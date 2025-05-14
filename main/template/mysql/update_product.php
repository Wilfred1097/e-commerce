<?php
// Include database connection
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve POST data
    $product_id = $_POST['editproductId'] ?? null; // Product ID to identify the record to update
    $category_id = $_POST['editProductCategory'] ?? null;
    $size = $_POST['editProductSize'] ?? null;
    $price = $_POST['editProductPrice'] ?? null;
    $type_names = $_POST['editProductType'] ?? null; // Assuming this is a comma-separated string of type names
    $description = $_POST['editProductDescription'] ?? null;
    $owner = $_POST['editProductArtisan'] ?? null;
    $material = $_POST['editProductMaterials'] ?? null;
    $address = $_POST['editProductAddress'] ?? null;
    $image = $_FILES['editProductImage'] ?? null;

    // Validate inputs
    if (!$product_id || !$category_id || !$type_names || !$description || !$owner || !$size || !$material || !$address || !$price) {
        http_response_code(400);
        echo json_encode([
            'status' => 'error',
            'message' => 'All fields are required.',
        ]);
        exit;
    }

    try {
        // Initialize variables
        $imagePath = null;

        // Handle file upload if a new image is provided
        if ($image && $image['tmp_name']) {
            $uploadDir = 'uploads/products/';
            $imagePath = $uploadDir . basename($image['name']);
            if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
                throw new Exception('Failed to upload image.');
            }
        }

        // Convert type names to IDs
        $type_names_array = explode(',', $type_names); // Split type names into an array
        $type_ids = [];

        foreach ($type_names_array as $type_name) {
            $type_name = trim($type_name); // Trim whitespace
            $stmt = $pdo->prepare("SELECT id FROM product_type WHERE name = :name");
            $stmt->bindParam(':name', $type_name);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $type_ids[] = $result['id']; // Add the ID to the array
            } else {
                throw new Exception("Product type '$type_name' not found in database.");
            }
        }

        // Join the IDs into a comma-separated string
        $type_id_string = implode(',', $type_ids);

        // Prepare SQL statement using PDO
        $sql = "
            UPDATE `products`
            SET
                `category_id` = :category_id,
                `type_id` = :type_id,
                `description` = :description,
                `owner` = :owner,
                `size` = :size,
                `material` = :material,
                `adress` = :address,
                `price` = :price
        ";

        // Append image update if a new image is provided
        if ($imagePath) {
            $sql .= ", `image` = :image";
        }

        $sql .= " WHERE `id` = :product_id";

        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':type_id', $type_id_string); // Use the concatenated type IDs
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':owner', $owner);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':material', $material);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':product_id', $product_id);

        // Bind image path if provided
        if ($imagePath) {
            $stmt->bindParam(':image', $imagePath);
        }

        // Execute the statement
        if ($stmt->execute()) {
            http_response_code(200);
            echo json_encode([
                'status' => 'success',
                'message' => 'Product updated successfully.',
            ]);
        } else {
            throw new Exception("Failed to update product.");
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode([
            'status' => 'error',
            'message' => $e->getMessage(),
        ]);
    }
}

// Close database connection
$pdo = null;
?>