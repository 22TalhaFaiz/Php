<?php
include ("../config.php");
$id = $_POST["id"];
$Theater_Name = $_POST["Theater_Name"];
$Location = $_POST["Location"];
$Capacity = $_POST["Capacity"];
$Class = $_POST["Class"];


$query = "UPDATE `theater` SET `Theater_Name`='$Theater_Name',`Location`='$Location',`Capacity`='$Capacity',`Class`='$Class' WHERE id = $id";
$result = mysqli_query($conn , $query);

if($result){
    header("location:theatrelist.php") ;
}
else{
    echo "Error";
    }
