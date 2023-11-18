<?php
include ("config.php");

$user_name = $_GET["user_name"];
$user_email = $_GET["user_email"];
$user_password = $_GET["user_password"];
$user_address = $_GET["user_address"];
$role_id = $_GET["role_id"];

$query = "INSERT INTO `users`(`user_name`, `user_email`, `user_password`, `user_address`, `role_id`) 
VALUES ('$user_name','$user_email','$user_password','$user_address','$role_id')";

$result = mysqli_query($conn , $query);

if($result){
    echo "Record Inserted";
}
else{
    echo "Error";
}
