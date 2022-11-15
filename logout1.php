<?php 
session_start();
unset( $_SESSION['firstName']);
 header("Location:http://localhost/blogs/dashboard.php");
?>