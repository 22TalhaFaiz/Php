<?php
include ("../config.php");
$id = $_GET["id"];
$query = "delete from theater where id = $id";
mysqli_query($conn , $query);
header("location:theatrelist.php")



?>