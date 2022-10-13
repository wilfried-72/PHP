<?php
// import de la connexion Connexion à la DB
include '../../../../env.php';
include '../../../../back/src/database/database.php';

if (!empty($_POST)) {
    // On définit la valeur de nos variable au résultat de la method post
    $lemail = $_POST['email'];
    $lpassword = $_POST["lpassword"];
    $authError = null;
    $auth = null;

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $query->execute(['email' => $lemail]);
    $auth = $query->fetch();

    if ($auth) {
        if (password_verify($lpassword, $auth['password'])) {

            $cookie_name = "CookieAuth";
            $cookie_value = true;

            $GLOBALS['setCookie'] = true;
            $GLOBALS['session'] = true;

            $pageTitle = "Auth";
            ob_start();
            //on utilise ce require pour afficher le Html
            require('../../pages/login/login.html.php');
            //on utilise ce require pour utiliser le bon layout
            require('../../layout/layout.html.php');
            header('Location: ../../../../index.php');
        } else {
            $authError = "Erreur de mail ou de mot de passe !";
            $pageTitle = "Auth";
            ob_start();
            //on utilise ce require pour afficher le Html
            require('../../pages/login/login.html.php');
            $pageContent = ob_get_clean();
            //on utilise ce require pour utiliser le bon layout
            require('../../layout/layout.html.php');
        }
    } else {
        $authError = "Erreur de mail ou de mot de passe !";
        $pageTitle = "Auth";
        ob_start();
        //on utilise ce require pour afficher le Html
        require('../../pages/login/login.html.php');
        $pageContent = ob_get_clean();
        //on utilise ce require pour utiliser le bon layout
        require('../../layout/layout.html.php');
    }
    Database::disconnect();
}
