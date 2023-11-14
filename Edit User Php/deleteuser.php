<?php
include ("config.php");
$id = $_GET["id"];
$query = "delete from users where id = $id";
mysqli_query($conn , $query);
header("location:Table.php")



?>