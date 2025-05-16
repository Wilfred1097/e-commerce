<?php
// $host = "localhost";
$dbname = "ecomm";
$username = "root";
$password = "";

// $host = "153.92.15.53";
// $dbname = "u605048123_ecomm";
// $username = "u605048123_ecomm25";
// $password = "h|g2s]Pc0]";
try {
    $pdo = new PDO("mysql:dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "Database Connected!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
