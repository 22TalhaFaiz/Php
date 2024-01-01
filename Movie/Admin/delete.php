<?php
include ("config.php");
$id = $_GET["id"];
$query = "delete from movies where id = $id";
mysqli_query($conn , $query);
header("location:movielist.php")



?>