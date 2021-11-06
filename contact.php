<?php 

$title = "contact"; 
require 'includes/config.php';
require 'functions/function.php';

if (isset($_POST['submit'])) {
	

	//si tous les champs ont ete remplis
	if (not_empty(['name','email','phone','subject', 'message'])){
       $errors = [];
    extract($_POST);
//verifi la longueur du pseudo
		if (mb_strlen($name) < 3) {
			$errors[] = "Nom trop court! (Minimum 3 caracteres)";


		}
		if (mb_strlen($phone) < 9) {
			$errors[] = "Numero de telephone invalide";


		}
	  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors[] = "Email invalide";
      } 
		//verifi la longueur du password
		if (mb_strlen($subject) < 5) {
			$errors[] = "Le sujet est implicide ";
		}
		if (mb_strlen($message) < 15) {
			$errors[] = "Le message doit contenir 15 caracteres min";
		}
if (count($errors)==0) {
	$q = $db->prepare("INSERT INTO contact(name, email, telephone, objet, message)
    	VALUES(:name, :email, :telephone, :objet, :message)");
    $q->execute([
      'name'=>$name,
      'email'=>$email,
      'telephone'=>$phone,
      'objet'=>$subject,
      'message'=>$message
    ]);
    $message = "VOTRE MESSAGE A BIEN ETE ENVOYE! ";
}
else{
	save_input_data();
}
}

}
 require 'views/contact.view.php';
?>