<?php
session_start();

$_SESSION['show'] = $_GET['show'];
$_SESSION['movie'] = $_GET['movie'];
$_SESSION['theatre'] = $_GET['theatre'];

if(!isset($_SESSION['user_id'])) {
    header('location:login.php');
} else {
    header('location:booking.php');
}
?>
