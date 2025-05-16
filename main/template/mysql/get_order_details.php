<?php
header('Content-Type: application/json');

include 'conn.php';

$sql = "
        SELECT
            o.order_id,
            o.user_id,
            u.first_name,
            u.last_name,
            u.gmail,
            o.payment_method,
            o.delivery_address,
            o.total_amount,
            o.order_status AS current_status,
            o.order_date,
            o.updated_at,
            t.status AS tracking_status,
            t.status_date AS status_updated_at,
            t.comments AS status_comments,
            COUNT(oi.item_id) AS total_items,

            GROUP_CONCAT(
                JSON_OBJECT(
                    'product_id', oi.product_id,
                    'quantity', oi.quantity,
                    'image', p.image
                )
            ) AS products

        FROM orders o
        LEFT JOIN users u ON o.user_id = u.id
        LEFT JOIN order_items oi ON o.order_id = oi.order_id
        LEFT JOIN products p ON p.id = oi.product_id
        LEFT JOIN (
            SELECT
                ot.order_id,
                ot.status,
                ot.status_date,
                ot.comments
            FROM order_tracking ot
            INNER JOIN (
                SELECT
                    order_id,
                    MAX(status_date) AS max_status_date
                FROM order_tracking
                GROUP BY order_id
            ) latest ON ot.order_id = latest.order_id AND ot.status_date = latest.max_status_date
        ) t ON o.order_id = t.order_id

        GROUP BY
            o.order_id,
            t.status,
            t.status_date,
            t.comments,
            o.user_id,
            u.first_name,
            u.last_name,
            u.gmail,
            o.payment_method,
            o.delivery_address,
            o.total_amount,
            o.order_status,
            o.order_date,
            o.updated_at

        ORDER BY o.order_date DESC;
        ";

try {
    $stmt = $pdo->query($sql);
    $orders = $stmt->fetchAll();
    echo json_encode(['success' => true, 'data' => $orders]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
