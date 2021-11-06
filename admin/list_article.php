<?php 
session_start();
$title = "list_acticle";
if (empty($_SESSION['password-admin'])&& empty($_SESSION['email-admin'])) {
	header('Location: login.php');
}
require '../includes/config.php'; 
$resultats = $db->query('SELECT * FROM blog ORDER BY created_at DESC LIMIT 20');
// On fouille le résultat pour en extraire les données réelles
$articles = $resultats->fetchAll();
 ?>
<?php require 'views/list_article.view.php'; ?>