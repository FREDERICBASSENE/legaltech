<?php 
session_start();
require '../functions/function.php';
$title = "home";
if (empty($_SESSION['password-admin'])&& empty($_SESSION['email-admin'])) {
	header('Location: login.php');
}

require '../includes/config.php'; 
$userConnect = $_SESSION['email-admin'];
$resultats = $db->query('SELECT * FROM users_admin');
// On fouille le résultat pour en extraire les données réelles
$admins = $resultats->fetchAll();
require 'views/index.view.php'; 

?>