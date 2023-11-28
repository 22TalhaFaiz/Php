<?php 
include("config.php");

$imgg= $_FILES["imgg"];

$imgName = $img['name'];
$tempPath = $img['tmp_name'];
$myPath = "images/".$imgName;

move_uploaded_file($tempPath , $myPath);
$qry ="INSERT INTO `products`(`product_image`) VALUES ('$myPath')";










?>