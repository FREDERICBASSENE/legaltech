<?php 
session_start();
$title = "blog";
if (empty($_SESSION['password-admin'])&& empty($_SESSION['email-admin'])) {
	header('Location: login.php');
}
 require '../includes/config.php';
 require '../functions/function.php';

 
if (isset($_POST['poster'])) {
 $errors = [];
//aploading de l'avatar de l'user
	if (!empty($_FILES)) {
	$image_name = $_FILES['image']['name'];
	var_dump($image_name);
	$image_extension = strrchr($image_name, '.');
	$extension_autorisees = array('.png','.jpg','.jpeg','.gif','.PNG');
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
		$errors = "Seul les images qui ont l'extention : '.pnp','.jpg','.jpeg','.gif','.PNG'  sont autorisees ";
	}
}
	extract($_POST);
//si tous les champs ont ete remplis
	if (not_empty(['titre','intro','contenu','auteur'])){

if (empty($errors)) {

	$q = $db->prepare("INSERT INTO blog(titre,introduction,contenu,auteur,image) VALUES(:titre, :introduction, :contenu, :auteur, :image)");
      $q->execute([
      	'titre' => $titre,
      	'introduction' => $intro,
      	'contenu'=> $contenu,
      	'auteur'=> $auteur,
      	'image'=> $image_name
     ]);
      $message = "Votre poste a ete mise a jour ";
}
      
     
      
}else{
	save_input_data();
	$errors = "veuillez renseigner tous tous les champs !";
}
  
	// }else{
	// 	clear_input_data();
	 }


 ?>

<?php require 'views/blog.view.php'; ?>

