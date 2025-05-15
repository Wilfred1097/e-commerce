<?php
// Include database connection
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve POST data
    $category_id = $_POST['productCategory'] ?? null;
    $type_id = $_POST['productType'] ?? null; // Assuming this is a comma-separated string of type IDs
    $description = $_POST['productDescription'] ?? null;
    $owner = $_POST['productArtisan'] ?? null;
    $size = $_POST['productSize'] ?? null;
    $material = $_POST['productMaterials'] ?? null;
    $address = $_POST['artisanAddress'] ?? null;
    $price = $_POST['productPrice'] ?? null;
    $quantity = $_POST['productQuantity'] ?? null;
    $image = $_FILES['productImage'] ?? null;

    // Validate inputs
    if (!$category_id || !$type_id || !$description || !$owner || !$size || !$material || !$address || !$price || !$quantity || !$image) {
        http_response_code(400);
        echo json_encode([
            'status' => 'error',
            'message' => 'All fields are required.',
        ]);
        exit;
    }

    try {
        // Handle file upload
        $uploadDir = 'uploads/products/';
        $imagePath = $uploadDir . basename($image['name']);
        if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
            throw new Exception('Failed to upload image.');
        }

        // Prepare SQL statement using PDO
        $stmt = $pdo->prepare("
            INSERT INTO `products` 
            (`category_id`, `type_id`, `description`, `owner`, `size`, `material`, `adress`, `price`, `image`, `qty`)
            VALUES
            (:category_id, :type_id, :description, :owner, :size, :material, :address, :price, :image, :qty)
        ");
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':type_id', $type_id); // Assuming type_id is stored as a string (comma-separated)
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':owner', $owner);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':material', $material);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $imagePath);
        $stmt->bindParam(':qty', $quantity);

        // Execute the statement
        if ($stmt->execute()) {
            http_response_code(201);
            echo json_encode([
                'status' => 'success',
                'message' => 'Product added successfully.',
            ]);
        } else {
            throw new Exception("Failed to insert product.");
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