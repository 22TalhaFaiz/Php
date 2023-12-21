<?php
include ("config.php");

$id = $_POST["id"];
$title = $_POST["title"];
$Genre = $_POST["Genre"];
$Release_Date = $_POST["Release_Date"];
$Description = $_POST["Description"];
$Rating = $_POST["Rating"];

$img=$_FILES["imag"];

$imgName = $img['name'];
$tempPath = $img['tmp_name'];
$myPath= "../images/".$imgName;


move_uploaded_file($tempPath,$myPath);


$query = "UPDATE `movies` SET `title`='$title',`Genre`='$Genre',`Release_Date`='$Release_Date',`Description`='$Description',`Rating`='$Rating',`Poster`='$myPath' WHERE id = $id";
$result = mysqli_query($conn , $query);

if($result){
    header("location:movielist.php") ;
}
else{
    echo "Error";
    }
