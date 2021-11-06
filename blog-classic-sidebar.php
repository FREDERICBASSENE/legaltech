<?php 
session_start();
require 'includes/config.php'; 
$resultats = $db->query('SELECT * FROM blog');
// On fouille le résultat pour en extraire les données réelles
$articles = $resultats->fetchAll();
$compteur = count($articles);
$_SESSION['compteur'] = $compteur;
$recent = $db->query('SELECT * FROM blog ORDER BY created_at DESC LIMIT 3');
// On fouille le résultat pour en extraire les données réelles
$res = $recent->fetchAll();



 ?>



<?php require 'views/blog.view.php'; ?>