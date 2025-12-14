<?php
include 'config.php';

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->name) && !empty($data->brand) && !empty($data->category) && 
    !empty($data->quantity) && !empty($data->price) && !empty($data->expiry_date)) {
    
    $sql = "INSERT INTO products (name, brand, category, quantity, price, expiry_date) 
            VALUES (:name, :brand, :category, :quantity, :price, :expiry_date)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $data->name);
    $stmt->bindParam(':brand', $data->brand);
    $stmt->bindParam(':category', $data->category);
    $stmt->bindParam(':quantity', $data->quantity);
    $stmt->bindParam(':price', $data->price);
    $stmt->bindParam(':expiry_date', $data->expiry_date);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Product created successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to create product"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Incomplete data"]);
}
?>