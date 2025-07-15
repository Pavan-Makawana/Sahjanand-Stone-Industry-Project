<?php
    
session_start();

unset($_SESSION['semail']);

session_destroy();

header("location:login.php");

?>