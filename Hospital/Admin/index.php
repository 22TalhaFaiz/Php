<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{

include("config.php");
include("header.php");

?>


<?php
  
}
?>