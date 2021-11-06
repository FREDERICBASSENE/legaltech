<?php 
session_start();
session_destroy();
$_SESSION = [];
//redirection
header('Location: login.php');
 ?>