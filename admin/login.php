<?php
session_start();
$title = "Login";
require '../includes/config.php';
 require '../functions/function.php';
if (isset($_POST['login'])) {
	
     extract($_POST);



	if (!empty($password) && !empty($email)) {
		$pass = sha1($password);
		$req = $db->prepare("SELECT IdAdmin, password, email FROM users_admin WHERE password = :password AND email = :email");
		$req->execute([
      	'password' => $pass,
      	'email' => $email,

      ]);
		
		
		if ($req->rowCount()!=0) {
			$_SESSION['password-admin']=$password;
			$_SESSION['email-admin']=$email;
			$userConnect = $_SESSION['email-admin']; 
			try {
				$resultats = $db->prepare("SELECT * FROM users_admin WHERE email = ?");
				$resultats->execute([$userConnect]);
			// On fouille le résultat pour en extraire les données réelles
			$admins = $resultats->fetch();
			$_SESSION['userConnect'] = $admins['IdAdmin'];
			} catch (Exception $e) {
				echo "error_log";
			}


			header('Location: index.php');
		}
		else{
			$message = "Desole !! Vous n'avez pas les droits d'access";
		}
	
	
	}

	
	
}

 require 'views/login.view.php'; ?>