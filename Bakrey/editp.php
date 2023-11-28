<?php
include ("config.php");

$id = $_POST["id"];
$product_name = $_POST["product_name"];
$product_description = $_POST["product_description"];
$product_price = $_POST["product_price"];
$product_image = $_POST["product_image"];

$query = "UPDATE `products` SET `product_name`='$product_name',`product_description`='$product_description',`product_price`='$product_price',`product_image`='product_image' WHERE id = $id";

$result = mysqli_query($conn , $query);

if($result){

    echo "Updated";
    header('Location: test.php');
}
else{
    echo "Error";
}