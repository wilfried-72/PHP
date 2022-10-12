<?php
// import de la connexion Connexion à la DB
include '../../../../env.php';
include '../../../../back/src/database/database.php';

if (!empty($_POST)) {
    // On définit nos variables à envoyer
    $passwordErr = null;
    $cpasswordErr = null;
    $first_nameError = null;
    $last_nameError = null;
    $emailError = null;
    $valid = true;
    $account = null;
    $first_name = "";
    $last_name = "";
    $email = "";
    $passwordView = "";;
    $cpassword = "";

    // On définit la valeur de nos variable au résultat de la method post
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $passwordView = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // On check notre first name
    if (empty($first_name)) {
        // variable de l'err
        $first_nameError = 'Please enter first Name';
        // si il n'y a pas de name alors
        $valid = false;
    } else if (empty($last_name)) {
        // variable de l'err
        $last_nameError = 'Please enter Last Name';
        // si il n'y a pas de name alors
        $valid = false;
    } else if (empty($email)) {
        // variable de l'err
        $emailError = 'Please enter Email Address';
        // si il n'y a pas d'email alors
        $valid = false;
        // Ici on check si l'email respect bien le format e@mail.com
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // variable de l'err
        $emailError = 'Please enter a valid Email Address';
        // si il n'y a pas d'email alors
        $valid = false;
    } else if (mb_strlen($_POST["password"]) <= 8) {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        $valid = false;
    } elseif (!preg_match("#[0-9]+#", $passwordView)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
        $valid = false;
    } elseif (!preg_match("#[A-Z]+#", $passwordView)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        $valid = false;
    } elseif (!preg_match("#[a-z]+#", $passwordView)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        $valid = false;
    } elseif (!preg_match("#[\W]+#", $passwordView)) {
        $passwordErr = "Your Password Must Contain At Least 1 Special Character!";
        $valid = false;
    } elseif (strcmp($passwordView, $cpassword) !== 0) {
        $cpasswordErr = "Passwords must match!";
        $valid = false;
    }

    if ($valid) {
        $passwordErr = null;
        $cpasswordErr = null;
        $first_nameError = null;
        $last_nameError = null;
        $emailError = null;

        $password = password_hash($passwordView, PASSWORD_DEFAULT);


        // $pdo = Database::connect();
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $query = $pdo->prepare('INSERT INTO user SET author=:author, title = :title, introduction= :introduction, content = :content, created_at = NOW()');
        // $query->execute(compact('author', 'title', 'introduction', 'content'));
        // Database::disconnect();

        echo "<script> if (window.confirm(\"Votre compte a été crée\")) {location.href=\"../../../../front/src/controllers/auth/login.php\"}</script>";

    } else $account = "Votre compte n'est pas encore crée";
}

$pageTitle = "Login";
ob_start();
//on utilise ce require pour afficher le Html
require('../../pages/login/login.html.php');
$pageContent = ob_get_clean();
//on utilise ce require pour utiliser le bon layout
require('../../layout/layout.html.php'); 
// exit();
