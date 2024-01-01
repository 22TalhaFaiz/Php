<?php
include ("../config.php");
if(isset($_POST['submit'])){

$Theater_Name = $_POST["Theater_Name"];
$Location = $_POST["Location"];
$Capacity = $_POST["Capacity"];
$Class = $_POST["Class"];

$query = "INSERT INTO `theater`(`Theater_Name`, `Location`, `Capacity`,`Class`) 
VALUES ('$Theater_Name','$Location','$Capacity','$Class')";

$result = mysqli_query($conn , $query);

if($result){
    header("location:theatrelist.php") ;
    echo "<div class='alert alert-success w-75 mt-5 mx-auto' role='alert'>
          Record Insert Succesfully
        </div>";
}
else{
    echo "Error";
    }
}