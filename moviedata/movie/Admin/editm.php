<?php
include ("config.php");

$id = $_POST["id"];
$title = $_POST["title"];
$Genre = $_POST["Genre"];
$Release_Date = $_POST["Release_Date"];
$Description = $_POST["Description"];
$Rating = $_POST["Rating"];
$Trailer = $_POST["Trailer"];
$runtime = $_POST["runtime"];

$img=$_FILES["imag"];
print_r($img);
$imgName = $img['name'];
$tempPath = $img['tmp_name'];
$myPath= "../images/".$imgName;


move_uploaded_file($tempPath,$myPath);


$query = "UPDATE `movies` SET `title`='$title',`Genre`='$Genre',`Release_Date`='$Release_Date',`Description`='$Description',
`Rating`='$Rating',`Trailer`='$Trailer',`runtime`='$runtime',`Poster`='$myPath' WHERE id = $id";
$result = mysqli_query($conn , $query);

if($result){
    
}
else{
    echo "Error";
    }
