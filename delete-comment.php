<?php


if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ! Fallait préciser le paramètre id en GET !");
}

$id = $_GET['id'];


require 'includes/config.php';
/**
 * 3. Vérification de l'existence du commentaire
 */
$query = $db->prepare('SELECT * FROM commentaires WHERE idComment = :id');
$query->execute(['id' => $id]);
if ($query->rowCount() === 0) {
    die("Aucun commentaire n'a l'identifiant $id !");
}

/**
 * 4. Suppression réelle du commentaire
 * On récupère l'identifiant de l'article avant de supprimer le commentaire
 */

$commentaire = $query->fetch();
$article_id = $commentaire['blog_id'];

$query = $db->prepare('DELETE FROM commentaires WHERE idComment = :id');
$query->execute(['id' => $id]);


header("Location: blog-details.php?id=" . $article_id);
exit();
