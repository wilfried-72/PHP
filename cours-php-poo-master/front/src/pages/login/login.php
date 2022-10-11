<?php
$pageTitle = "Login";
ob_start();
//on utilise ce require pour afficher le Html
require ('login.html.php');
$pageContent = ob_get_clean();
//on utilise ce require pour utiliser le bon layout
require('../../layout/layout.html.php'); 
exit();
?>
