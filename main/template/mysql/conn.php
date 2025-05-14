<?php
// $host = "153.92.15.53";
// $dbname = "u605048123_brgyadmin";
// $username = "u605048123_admin2025";
// $password = "Ee10FPFn+3";

$host = "localhost";
$dbname = "ecomm";
$username = "root";
$password = "";

// MySQL database name u605048123_ecomm
// MySQL username      u605048123_ecomm25
// Password        h|g2s]Pc0]

try {
    $pdo = new PDO("mysql:dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "Database Connected!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
