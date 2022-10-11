<?php
// import de la connexion Connexion à la DB
include '../../../../env.php';

/**
 * DANS CE FICHIER, ON CHERCHE A SUPPRIMER L'ARTICLE DONT L'ID EST PASSE EN GET et les commentaires associés
 * 
 * Il va donc falloir bien s'assurer qu'un paramètre "id" est bien passé en GET, puis que cet article existe bel et bien
 * Ensuite, on va pouvoir effectivement supprimer l'article et rediriger vers la page d'accueil
 */

/**
 * 1. On vérifie que le GET possède bien un paramètre "id" et que c'est bien un nombre
 */
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ?! Tu n'as pas précisé l'id de l'article !");
}

$id = $_GET['id'];

/**
 * 2. Connexion à la base de données avec PDO
 * Attention, on précise ici deux options :
 * - Le mode d'erreur : le mode exception permet à PDO de nous prévenir violament quand on fait une connerie ;-)
 * - Le mode d'exploitation : FETCH_ASSOC veut dire qu'on exploitera les données sous la forme de tableaux associatifs
 * 
 * PS : Vous remarquez que ce sont les mêmes lignes que pour l'index.php ?!
 */
$pdo = new PDO("mysql:host=" . $GLOBALS['DATABASE_HOST'] . ";" . "dbname=" . $GLOBALS['DATABASE_NAME'] . ';charset=utf8', $GLOBALS['DATABASE_USER'], $GLOBALS['DATABASE_PASSWORD'], [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

/**
 * 3. Vérification que l'article existe bel et bien
 */
$query = $pdo->prepare('SELECT * FROM articles WHERE id = :id');
$query->execute(['id' => $id]);
if ($query->rowCount() === 0) {
    die("L'article $id n'existe pas, vous ne pouvez donc pas le supprimer !");
}

/**
 * 4. Réelle suppression de l'article
 */
$query = $pdo->prepare('DELETE FROM articles WHERE id = :id');
$query->execute(['id' => $id]);


/**
 * 5. Vérification la présence de commentaire pour cet article
 */
$query = $pdo->prepare('SELECT * FROM comments WHERE article_id= :id');
$query->execute(['id' => $id]);
if ($query->rowCount() === 0) {
    die("Il n'y a pas de commentaire pour cet article, vous ne pouvez donc pas les supprimer !");
}

/**
 * 4. Réelle suppression de tous les commentaire liés à cet article
 */
$query = $pdo->prepare('DELETE FROM comments WHERE article_id = :id');
$query->execute(['id' => $id]);

/**
 * 5. Redirection vers la page d'accueil
 */
header("Location: ../../../../front/src/pages/articles/articles.php");
exit();
