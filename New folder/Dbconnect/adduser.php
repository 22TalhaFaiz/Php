<?php
    include("config.php");

    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    $user_address = $_POST["user_address"];
    $role_id = $_POST["role_id"];

    $query = "INSERT INTO `users`(`user_name`, `user_email`, `user_password`, `user_address`, `role_id`) VALUES ('$user_name','$user_email','$user_password','$user_address','$role_id')";

    $result = mysqli_query($conn, $query);
    
    if($result){
        echo "Record inserted";
    }
    else{
        echo "Error";
    }
?>