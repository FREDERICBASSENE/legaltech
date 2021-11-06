<?php 
session_start();
require 'includes/config.php'; 
$resultats = $db->query('SELECT * FROM blog ORDER BY created_at DESC LIMIT 20');
// On fouille le résultat pour en extraire les données réelles
$articles = $resultats->fetchAll();

 ?>


<?php require 'views/index.view.php'; ?>