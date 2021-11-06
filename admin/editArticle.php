<?php 
session_start();
$title = "edit_acticle";
if (empty($_SESSION['password-admin'])&& empty($_SESSION['email-admin'])) {
	header('Location: login.php');
}
require '../includes/config.php'; 
require '../functions/function.php';
$id = $_GET['id'];
$resultats = $db->prepare('SELECT * FROM blog where id = :id');
$resultats->execute([
	'id'=>$id
]);
// On fouille le résultat pour en extraire les données réelles
$articles = $resultats->fetchAll();



if (isset($_POST['update'])) {
 $errors = [];
//aploading de l'avatar de l'user
	if (!empty($_FILES)) {
	$image_name = $_FILES['image']['name'];
	var_dump($image_name);
	$image_extension = strrchr($image_name, '.');
	$extension_autorisees = array('.png','.jpg','.jpeg','.gif','.PNG', '.JPG');
	$image_tmp_name = $_FILES['image']['tmp_name'];
	$image_dest = 'imageBlog/'.$image_name;
	if (in_array($image_extension, $extension_autorisees)) {
	if (move_uploaded_file( $image_tmp_name, $image_dest)) {

	}
	else{
			$errors  = "Une erreur est survenu lors de l 'envoi du fichier";
	}
		
	} 
	else{
		$errors = "Seul les images qui ont l'extention : '.pnp','.jpg','.jpeg','.gif','.PNG','.JPG'  sont autorisees ";
	}
}
	extract($_POST);
//si tous les champs ont ete remplis
	if (not_empty(['titre','intro','contenu','auteur'])){

if (empty($errors)) {
  try {
  	$q = $db->prepare("UPDATE blog SET titre = ?, introduction = ?, contenu = ? ,auteur = ?, image = ? where id = ?" );
      $q->execute([
      	 $titre,
      	 $intro,
      	 $contenu,
      	 $auteur,
      	 $image_name,
      	$id
     ]);
      $message = "Votre poste a ete mise a jour ";
      header("Location: list_article.php");
  } catch (Exception $e) {
  	$errors = "erreur introuvable $e";
  }
	
}
      
     
      
}else{
	save_input_data();
	$errors = "veuillez renseigner tous tous les champs !";
}
  
	// }else{
	// 	clear_input_data();
	 }

 ?>





<?php require 'views/editArticle.view.php'; ?>