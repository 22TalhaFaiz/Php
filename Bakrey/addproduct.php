<?php
include ("config.php");
if(isset($_POST['submit'])){
$product_name = $_POST["product_name"];
$product_description = $_POST["product_description"];
$product_price = $_POST["product_price"];

$img=$_FILES["imag"];

$imgName = $img['name'];
$tempPath = $img['tmp_name'];
$myPath= "images/".$imgName;


move_uploaded_file($tempPath,$myPath);


$query = "INSERT INTO `products`(`product_name`, `product_description`, `product_price`, `product_image`) 
VALUES ('$product_name','$product_description','$product_price','$myPath')";

$result = mysqli_query($conn , $query);

if($result){
    header("location:product.php") ;
    echo "<div class='alert alert-success w-75 mt-5 mx-auto' role='alert'>
          Record Insert Succesfully
        </div>";
}
else{
    echo "Error";
    }
}