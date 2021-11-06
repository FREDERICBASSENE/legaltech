<?php

$auteur = null;
if (!empty($_POST['auteur'])) {
    $auteur = $_POST['auteur'];
}

// Ensuite le contenu
$contenu = null;
if (!empty($_POST['contenu'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $contenu = htmlspecialchars($_POST['contenu']);
}

// Enfin l'id de l'article
$article_id = null;
if (!empty($_POST['article_id']) && ctype_digit($_POST['article_id'])) {
    $article_id = $_POST['article_id'];
}

// Vérification finale des infos envoyées dans le formulaire (donc dans le POST)
// Si il n'y a pas d'auteur OU qu'il n'y a pas de contenu OU qu'il n'y a pas d'identifiant d'article
if (!$auteur || !$article_id || !$contenu) {
    die("Votre formulaire a été mal rempli !");
}


require 'includes/config.php';
require 'functions/function.php';

$query = $db->prepare('SELECT * FROM blog WHERE id = :article_id');
$query->execute(['article_id' => $article_id]);

// Si rien n'est revenu, on fait une erreur
if ($query->rowCount() === 0) {
    die("Ho ! L'article $article_id n'existe pas boloss !");
}

// 3. Insertion du commentaire
$query = $db->prepare('INSERT INTO commentaires SET auteur = :auteur, contenu = :contenu, blog_id = :article_id, created_at = NOW()');
$query->execute(compact('auteur', 'contenu', 'article_id'));

// 4. Redirection vers l'article en question :
header('Location: blog-details.php?id=' . $article_id);
exit();
