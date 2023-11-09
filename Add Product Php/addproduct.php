<?php
include ("config.php");

$product_name = $_GET["product_name"];
$product_description = $_GET["product_description"];
$product_price = $_GET["product_price"];
$unit = $_GET["unit"];
$product_image = $_GET["product_image"];
$category_id = $_GET["category_id"];
$brand_id = $_GET["brand_id"];
$availability = $_GET["availability"];

$query = "INSERT INTO `products`(`product_name`, `product_description`, `product_price`, `unit`, `product_image`, `category_id`, `brand_id`, `availability`) 
VALUES ('$product_name','$product_description','$product_price','$unit','$product_image','$category_id','$brand_id','$availability')";

$result = mysqli_query($conn , $query);

if($result){
    echo "Record Inserted";
}
else{
    echo "Error";
}
