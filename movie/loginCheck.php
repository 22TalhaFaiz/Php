<?php
    include('config.php');
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $query = "SELECT * from users where user_email = '$user_email' AND user_password = '$user_password'";

    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
        header("Location:index.php");
    }
    else{
        
        header("Location:login.php");
    }
    
?>