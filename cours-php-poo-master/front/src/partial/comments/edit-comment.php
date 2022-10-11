<?php
// import de la connexion Connexion à la DB
include '../../../../env.php';
/**
 * DANS CE FICHIER ON CHERCHE A éditer LE COMMENTAIRE DONT L'ID EST PASSE EN PARAMETRE GET !
 * 
 * On va donc vérifier que le paramètre "id" est bien présent en GET, qu'il correspond bien à un commentaire existant
 * Puis on le supprimera !
 */

/**
 * 1. Récupération du paramètre "id" en GET
 */
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ! Fallait préciser le paramètre id en GET !");
}

$id = $_GET['id'];

/**
 * 2. Connexion à la base de données avec PDO
 * Attention, on précise ici deux options :
 * - Le mode d'erreur : le mode exception permet à PDO de nous prévenir violament quand on fait une connerie ;-)
 * - Le mode d'exploitation : FETCH_ASSOC veut dire qu'on exploitera les données sous la forme de tableaux associatifs
 * 
 */
$pdo = new PDO("mysql:host=" . $GLOBALS['DATABASE_HOST'] . ";" . "dbname=" . $GLOBALS['DATABASE_NAME'] . ';charset=utf8', $GLOBALS['DATABASE_USER'], $GLOBALS['DATABASE_PASSWORD'], [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

/**
 * 3. Vérification de l'existence du commentaire
 */
$query = $pdo->prepare('SELECT * FROM comments WHERE id = :id');
$query->execute(['id' => $id]);
if ($query->rowCount() === 0) {
    die("Aucun commentaire n'a l'identifiant $id !");
}


/**
 * 4. Récupération du commentaire
 * Pareil, toujours une requête préparée pour sécuriser la donnée filée par l'utilisateur
 */
$commentaires = $query->fetchAll();

// print_r($commentaires); 

/**
 * 5. On affiche 
 */
$pageTitle = "Editer le commentaire";
ob_start();

//on utilise ce require pour afficher le Html
require('../../pages/comments/editComments.html.php');
$pageContent = ob_get_clean();
//on utilise ce require pour utiliser le bon layout
require('../../layout/layout.html.php');
