<?php

session_start();
//fetch the seeion
$email = $_SESSION['myemail'];
session_destroy();
header("location:../login.php");


?>