<?php
include ("config.php");
if(isset($_POST['submit'])){

$title = $_POST["title"];
$Genre = $_POST["Genre"];
$Release_date = $_POST["Release_Date"];
$description = $_POST["Description"];
$Rating = $_POST["Rating"];
$Trailer = $_POST["Trailer"];
$runtime = $_POST["runtime"];


$img=$_FILES["imag"];

$imgName = $img['name'];
$tempPath = $img['tmp_name'];
$myPath= "../images/".$imgName;


move_uploaded_file($tempPath,$myPath);


$query = "INSERT INTO `movies`(`title`, `Genre`, `Release_Date`, `Poster`,`Description`,`Rating`,`Trailer`,`runtime`) 
VALUES ('$title','$Genre','$Release_date','$imgName','$description','$Rating','$Trailer','$runtime')";

$result = mysqli_query($conn , $query);

if($result){
    header("location:movielist.php") ;
    echo "<div class='alert alert-success w-75 mt-5 mx-auto' role='alert'>
          Record Insert Succesfully
        </div>";
}
else{
    echo "Error";
    }
}