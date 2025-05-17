<?php
require 'conn.php'; // DB connection
require 'vendor/setasign/fpdf/fpdf.php'; // Make sure the path is correct

// Set parameters
$reportType = isset($_GET['reportType']) ? $_GET['reportType'] : 'Delivered';
$startDate = isset($_GET['startDate']) ? $_GET['startDate'] : date('Y-m-01');
$endDate = isset($_GET['endDate']) ? $_GET['endDate'] : date('Y-m-t');

// Format dates (for query)
$startDateQuery = date('Y-m-d', strtotime($startDate));
$endDateQuery = date('Y-m-d', strtotime($endDate));

// Query and fetch data
try {
    $stmt = $pdo->prepare("
        SELECT
            orders.*,
            users.first_name,
            users.middle_name,
            users.last_name,
            orders.order_date,
            COUNT(order_items.order_id) AS item_quantity,
            orders.total_amount
        FROM orders
        JOIN order_tracking ON order_tracking.order_id = orders.order_id
        JOIN users ON users.id = orders.user_id
        JOIN order_items ON order_items.order_id = orders.order_id
        WHERE order_tracking.status = :reportType
          AND orders.order_date BETWEEN :startDate AND :endDate
        GROUP BY orders.order_id, users.id
    ");
    $stmt->bindParam(':reportType', $reportType);
    $stmt->bindParam(':startDate', $startDateQuery);
    $stmt->bindParam(':endDate', $endDateQuery);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}

// Calculate total amount
$overallTotal = 0;
if ($results) {
    foreach ($results as $row) {
        $overallTotal += floatval($row['total_amount']);
    }
}

// Start PDF
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 9);

// Format header dates for display
$startDateFormatted = date('F j, Y', strtotime($startDate));
$endDateFormatted = date('F j, Y', strtotime($endDate));

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(0, 8, "Status: $reportType" . "                                                                                                                                                                                                                           From: $startDateFormatted to $endDateFormatted", 0, 1);

// Space before table
$pdf->Ln(5);

// Table Headers
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetFillColor(220, 220, 220);
$pdf->Cell(20, 7, 'Order ID', 1, 0, 'C', true);
$pdf->Cell(45, 7, 'Customer Name', 1, 0, 'C', true);
$pdf->Cell(35, 7, 'Order Date', 1, 0, 'C', true);
$pdf->Cell(25, 7, 'Quantity', 1, 0, 'C', true);
$pdf->Cell(45, 7, 'Method', 1, 0, 'C', true);
$pdf->Cell(35, 7, 'Date Delivered', 1, 0, 'C', true);
$pdf->Cell(35, 7, 'Order Status', 1, 0, 'C', true);
$pdf->Cell(30, 7, 'Amount', 1, 1, 'C', true);

// Table Rows
$pdf->SetFont('Arial', '', 8);
if (empty($results)) {
    $pdf->Cell(270, 10, 'No results found.', 1, 1, 'C');
} else {
    foreach ($results as $row) {
        $paymentMethodText = $row['payment_method'];
        if (!empty($row['refference_num'])) {
            $paymentMethodText .= ' - Paid via Gcash';
        }
        $orderDateFormatted = date('F j, Y', strtotime($row['order_date']));
        $dateUpdatedFormatted = date('F j, Y', strtotime($row['date_updated']));
        $pdf->Cell(20, 7, $row['order_id'], 1, 0, 'C');
        $pdf->Cell(45, 7, $row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name'], 1, 0, 'C');
        $pdf->Cell(35, 7, $orderDateFormatted, 1, 0, 'C');
        $pdf->Cell(25, 7, $row['item_quantity'] . ' product', 1, 0, 'C');
        $pdf->Cell(45, 7, $paymentMethodText, 1, 0, 'C');
        $pdf->Cell(35, 7, $dateUpdatedFormatted, 1, 0, 'C');
        $pdf->Cell(35, 7, $row['order_status'], 1, 0, 'C');
        $pdf->Cell(30, 7, number_format($row['total_amount'], 2), 1, 1, 'C');
    }
}

// Add overall total row
// Set font bold for total
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(240, 7, 'Overall Total:', 1, 0, 'C', true);
$pdf->Cell(30, 7, number_format($overallTotal, 2), 1, 1, 'C', true);

// Output PDF
$pdf->Output('I', 'order_report.pdf'); // I = Inline; D = Download
?>