<?php  
//Gere l'etat active de nos differents liens
if (!function_exists('set_active')) {
function set_active($file){
	$fileName = basename($_SERVER["SCRIPT_NAME"]);
	if ($fileName == $file.'.php') {
		return "active";
	}else{
		return "";
	}
}
}

// verifie si les champs sont pas vides 
if (!function_exists('not_empty')) {
function not_empty($fields =[]){
	if (count($fields) != 0) {
		foreach ($fields as $field) {
			if (empty($_POST[$field]) || trim($_POST[$field]) == "") {
				return false;
			}
		}
		return true;
	}
}
}
//stocker les info input en session
if (!function_exists('save_input_data')) {
  function save_input_data(){
  	foreach ($_POST as $key => $value) {
  		if (strpos($key, 'password') == false) {
  			$_SESSION['input'][$key] = $value;
  		}
  		
  	}
  }
}
//recuperation des infos input stocker en session
if (!function_exists('get_input')) {
  function get_input($key){
  	if (!empty($_SESSION['input'][$key])) {
  		return $_SESSION['input'][$key];
  	}else{
  		return null; 
  	}
  	
  		
  }
}

//message flash
 	if (!function_exists('set_flash')) {
	function set_flash($message, $type='info'){
	$_SESSION['notification']['message']= $message;	
	$_SESSION['notification']['type']= $type;	
	}
}

if (!function_exists('is_already_in_use')) {
 	// verifie si pseudo ou email est  dejas utiliser
 	function is_already_in_use($field,$value, $table ){
 		global $db;
 		$q = $db->prepare("SELECT idAdmin FROM $table WHERE $field = ?");
 		$q->execute([$value]);
 		$count = $q->rowCount();
 	$q->closeCursor();	
 	return $count;
 	}
 }

 // permet de rendre tous les liens d'une chaine de caractere cliquable
if (!function_exists('replace_links')) {
	function replace_links($texte){
      $regex_url = "/(http|https|ftp|ftps)\:\/\/[a-zA-z0-9\-\.]+\.[a-zA-Z]{2,3}(\:[0-9]+)?(\/\s*)?/";
     return preg_replace($regex_url, "<a target=\"_blank\" href=\"$0\" >$0</a>", 
     	$texte);
	}
}

// suprimer les espaces et injections 
if (!function_exists('e')) {
function e($string){
	if ($string) {
		return htmlspecialchars($string);
	}
}
}