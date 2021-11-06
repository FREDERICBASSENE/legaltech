<?php session_start();
$title = "add_admin";
if (empty($_SESSION['password-admin'])&& empty($_SESSION['email-admin'])) {
	header('Location: login.php');
}


require '../includes/config.php';
 require '../functions/function.php';

 
if (isset($_POST['enregistre'])) {
 $errors = [];
	extract($_POST);
//si tous les champs ont ete remplis
	if (not_empty(['nom','prenom','email','password','sex'])){

		if (is_already_in_use('nom',$nom, 'users_admin')) {
		 
		$errors = "nom dejas utiliser";
	}
	if (is_already_in_use('email',$email, 'users_admin')) {
		// verifie si l'email est dejas utiliser
		$errors = "Email dejas utiliser";
	}
if (empty($errors)) {
	$pass = sha1($password);

	$q = $db->prepare("INSERT INTO users_admin(nom,prenom,email,password,sex,linkedin,facebook,twitter,instagram) VALUES(:nom, :prenom, :email, :password, :sex, :linkedin, :facebook, :twitter, :instagram)");
      $q->execute([
      	'nom' => $nom,
      	'prenom' => $prenom,
      	'email'=> $email,
      	'password'=> $pass,
      	'sex'=> $sex,
      	'linkedin'=> $linkedin,
      	'facebook'=>$facebook,
      	'twitter'=>$twitter,
      	'instagram'=>$instagram
     ]);
      $message = "Administrateur ajouter avec success!  ";
}
      
     
      
}else{
	save_input_data();
	$errors = "veuillez renseigner tous tous les champs !";
}
  
	// }else{
	// 	clear_input_data();
	 }





require 'views/add_admin.view.php';  ?>