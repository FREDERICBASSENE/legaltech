<?php 
session_start();

require '../functions/function.php';

$title = "profile";
if (empty($_SESSION['password-admin'])&& empty($_SESSION['email-admin']) ) {
	header('Location: login.php');
}

 $admin_id = null;

// Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $admin_id = $_GET['id'];
 }



if (!$admin_id) {
     header('Location: index.php');
}


require '../includes/config.php';


$query = $db->prepare("SELECT * FROM users_admin WHERE IdAdmin = :admin_id");


$query->execute(['admin_id' => $admin_id]);

$user = $query->fetch();

if (isset($_POST['update'])) {
 $errors = [];
	extract($_POST);
//si tous les champs ont ete remplis
	if (not_empty(['nom','prenom','email'])){
if (empty($errors)) {
	try {
		$q = $db->prepare("UPDATE users_admin SET nom = ?, prenom = ?, email= ?, linkedin = ?, facebook = ?, twitter =  ?, Instagram = ? WHERE IdAdmin = ?");
      $q->execute([
      	 $nom, $prenom, $email, $linkedin, $facebook, $twitter,$instagram, $_SESSION['userConnect']]); 
      $message = "Profile mise a jour avec success!  ";
      header("Location: editProfile.php?id= $admin_id");
	}
	 catch (Exception $e) {
		$errors = "erreur introuvable ";
		
	}
}
	    
}
else{
	save_input_data();
	$errors = "veuillez renseigner tous les champs  en *!";
}
  
}


require 'views/editProfile.view.php'; 
 ?>