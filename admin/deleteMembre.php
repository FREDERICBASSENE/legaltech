<?php
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ! Fallait préciser le paramètre id en GET !");
}

$id = $_GET['id'];

require '../includes/config.php';

$query = $db->prepare('DELETE FROM 	users_admin WHERE IdAdmin = :id and IdAdmin > 4');
$query->execute(['id' => $id]);

header("Location: index.php");
exit();
