<?php
include 'config.php';

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->id) && !empty($data->name) && !empty($data->brand) && 
    !empty($data->category) && !empty($data->quantity) && !empty($data->price) && 
    !empty($data->expiry_date)) {
    
    $sql = "UPDATE products SET 
            name = :name, 
            brand = :brand, 
            category = :category, 
            quantity = :quantity, 
            price = :price, 
            expiry_date = :expiry_date 
            WHERE id = :id";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $data->id);
    $stmt->bindParam(':name', $data->name);
    $stmt->bindParam(':brand', $data->brand);
    $stmt->bindParam(':category', $data->category);
    $stmt->bindParam(':quantity', $data->quantity);
    $stmt->bindParam(':price', $data->price);
    $stmt->bindParam(':expiry_date', $data->expiry_date);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Product updated successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to update product"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Incomplete data"]);
}
?>