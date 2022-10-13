<?php
// import de la connexion Connexion à la DB
include '../../../../env.php';
include '../../../../back/src/database/database.php';

/**
 * CE FICHIER DOIT crrer UN ARTICLE!
 */

/**
 * 1. On vérifie que les données ont bien été envoyées en POST en double verification avec le required dans le formulaire html
 */


$author = null;
if (!empty($_POST['author'])) {
    $author = $_POST['author'];
}

$title = null;
if (!empty($_POST['title'])) {
    $title = $_POST['title'];
}

$content = null;
if (!empty($_POST['content'])) {
    // on enleve les balises html pour eviter les attaques XSS
    $content = htmlspecialchars($_POST['content']);
}

$introduction = null;
if (!empty($_POST['introduction'])) {
    // on enleve les balises html pour eviter les attaques XSS
    $introduction = htmlspecialchars($_POST['introduction']);
}

if ($author && $title && $content && $introduction) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $pdo->prepare('INSERT INTO articles SET author=:author, title = :title, introduction= :introduction, content = :content, created_at = NOW()');
    $query->execute(compact('author', 'title', 'introduction', 'content'));
    Database::disconnect();
    header('Location: ../articles/listArticles.php');
}

/**
 * 5. On affiche 
 */
session_start();
$pageTitle = "créer un article";
ob_start();

//on utilise ce require pour afficher le Html
require('../../pages/articles/createArticles.html.php');
$pageContent = ob_get_clean();
//on utilise ce require pour utiliser le bon layout
require('../../layout/layout.html.php');
