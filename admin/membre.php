<?php 
session_start();
require '../functions/function.php';
$title = "membres";
if (empty($_SESSION['password-admin'])&& empty($_SESSION['email-admin'])) {
	header('Location: login.php');
}

require '../includes/config.php'; 
$userConnect = $_SESSION['email-admin'];
$resultats = $db->query('SELECT * FROM users_admin WHERE IdAdmin <= 4');
// On fouille le résultat pour en extraire les données réelles
$admins = $resultats->fetchAll();

$resultat = $db->query('SELECT * FROM users_admin WHERE IdAdmin >  4');
// On fouille le résultat pour en extraire les données réelles
$membres = $resultat->fetchAll();
 ?>





<?php require 'views/membre.view.php'; ?>