<?php
    $host = "localhost";
   $user = "root";                     
   $pass = "";                                  
 $db = "moviedata";
     $port = 3306;
     $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    // $con=mysqli_connect("localhost","root","","hello");
?>