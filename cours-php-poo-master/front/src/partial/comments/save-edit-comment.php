<?php
// import de la connexion Connexion à la DB
include '../../../../env.php';

/**
 * CE FICHIER DOIT editer le commentaire selectionné
 * 
 * On doit d'abord vérifier que toutes les informations ont été entrées dans le formulaire
 * Si ce n'est pas le cas : un message d'erreur
 * Sinon, on va sauver les informations
 * 
 * Il faudra donc faire une première requête pour s'assurer que l'commentaire existe
 * Ensuite on pourra editer ce commentaire
 * 
 * Et enfin on pourra rediriger l'utilisateur vers l'commentaire en question
 */

/**
 * 1. On vérifie que les données ont bien été envoyées en POST
 * D'abord, on récupère les informations à partir du POST
 * Ensuite, on vérifie qu'elles ne sont pas nulles
 */

// On verifie le contenu
$content = null;
if (!empty($_POST['content'])) {
    // on enleve les balises html pour eviter les attaques XSS
    $content = htmlspecialchars($_POST['content']);
}

//l'id du commentaire
$comment_id = null;
if (!empty($_POST['comment_id']) && ctype_digit($_POST['comment_id'])) {
    $comment_id = $_POST['comment_id'];
}

// Enfin l'id de l'article
$article_id = null;
if (!empty($_POST['article_id']) && ctype_digit($_POST['article_id'])) {
    $article_id = $_POST['article_id'];
}

// Vérification finale des infos envoyées dans le formulaire (donc dans le POST)
// Si il n'y a pas de contenu OU qu'il n'y a pas d'identifiant du commentaire
if (!$comment_id || !$content || !$article_id) {
    // die("Votre formulaire a été mal rempli !");
    header('Location: ../articles/article.php?id=' . $article_id);
} else {

    /**
     * 2. Vérification que l'id du commentaire pointe bien vers un commentaire qui existe
     * Ca nécessite une connexion à la base de données puis une requête qui va aller chercher l'commentaire en question.
     * 
     * Attention, on précise ici deux options :
     * - Le mode d'erreur : le mode exception permet à PDO de nous prévenir violament quand on fait une connerie ;-)
     * - Le mode d'exploitation : FETCH_ASSOC veut dire qu'on exploitera les données sous la forme de tableaux associatifs
     * 
     * PS : Ca fait pas genre 3 fois qu'on écrit ces lignes pour se connecter ?! 
     */
    $pdo = new PDO("mysql:host=" . $GLOBALS['DATABASE_HOST'] . ";" . "dbname=" . $GLOBALS['DATABASE_NAME'] . ';charset=utf8', $GLOBALS['DATABASE_USER'], $GLOBALS['DATABASE_PASSWORD'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    $query = $pdo->prepare('SELECT * FROM comments WHERE id = :comment_id');
    $query->execute(['comment_id' => $comment_id]);

    // Si rien n'est revenu, on fait une erreur
    if ($query->rowCount() === 0) {
        die("Ho ! Le commentaire $comment_id n'existe pas !");
    } else echo "il existe";

    // UPDATE comments SET content="tititit ergeggtttttttttege" WHERE id=118;



    // // 3. update du commentaire
    $query = $pdo->prepare('UPDATE comments SET content=:content, created_at = NOW() WHERE id = :comment_id');
    $query->execute(compact('content', 'comment_id'));

    // // 4. Redirection vers l'commentaire en question :
    header('Location: ../articles/article.php?id=' . $article_id);
    exit();
}
