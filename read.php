<?php
include 'config.php';

$sql = "SELECT * FROM products ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(["success" => true, "products" => $products]);
?>