<?php
include ("../config.php");

$showdatetime = $_POST["showdatetime"];
$Class = $_POST["Class"];
$Rates = $_POST["Rates"];
$movie_id = $_POST["movie_id"];
$Theater_id = $_POST["Theater_id"];


$query = "INSERT INTO `showtime`(`movie_id`, `Theater_id`, `showdatetime`, `Class`, `Rates`) 
VALUES ('$movie_id','$Theater_id','$showdatetime','$Class','$Rates')";

$result = mysqli_query($conn , $query);

if($result){
    header("location:ShowtimeL.php") ;
}
else{
    echo "Error";
}
?>