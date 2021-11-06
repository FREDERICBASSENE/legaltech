<?php //database connexion
define('DB_HOST', 'localhost');
define('DB_NAME', 'legaltech.sn');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

try {
	$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USERNAME,DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
	die('Erreur'.$e->getMessage());
}
  