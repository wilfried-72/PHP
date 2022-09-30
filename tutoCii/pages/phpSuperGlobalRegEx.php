<link href="../assets/css/index.css" rel="stylesheet">

<?php
// apelle de la navBar
require '../components/nav.php';
// appelle des fonctions
require '../utils/function.php';
?>


<h2 style="text-decoration:underline;text-align:center">Variables Globales et Regex</h2>

<p style="margin:0;padding:0"><b style="margin:0;padding:0">PHP $GLOBALS SERVE:R</b></p>
<div class="box" style="border-style: solid; padding:5px;margin-bottom:15px;">
    <div>
        <?php
        echo "<div style='padding:5px;text-align:center'>PHP_SELF: " . $_SERVER['PHP_SELF'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>SERVER_NAME: " . $_SERVER['SERVER_NAME'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>HTTP_HOST: " . $_SERVER['HTTP_HOST'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>HTTP_REFERER: " . $_SERVER['HTTP_REFERER'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>HTTP_USER_AGENT: " . $_SERVER['HTTP_USER_AGENT'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>REQUEST_METHOD': " . $_SERVER['REQUEST_METHOD'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>REQUEST_TIME: " . $_SERVER['REQUEST_TIME'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>QUERY_STRING: " . $_SERVER['QUERY_STRING'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>HTTP_ACCEPT: " . $_SERVER['HTTP_ACCEPT'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>HTTP_ACCEPT_CHARSET: " . $_SERVER['HTTP_ACCEPT_CHARSET'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>REMOTE_ADDR: " . $_SERVER['REMOTE_ADDR'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>REMOTE_HOST: " . $_SERVER['REMOTE_HOST'] . "</div>";
        ?>
    </div>

    <div>
        <?php
        echo "<div style='padding:5px;text-align:center'>GATEWAY_INTERFACE: " . $_SERVER['GATEWAY_INTERFACE'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>SERVER_ADDR: " . $_SERVER['SERVER_ADDR'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>HTTP_SERVER_SOFTWARE: " . $_SERVER['SERVER_SOFTWARE'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>SERVER_PROTOCOL: " . $_SERVER['SERVER_PROTOCOL'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>HTTPS: " . $_SERVER['HTTPS'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>SERVER_PORT: " . $_SERVER['SERVER_PORT'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>REMOTE_PORT: " . $_SERVER['REMOTE_PORT'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>SCRIPT_FILENAME: " . $_SERVER['SCRIPT_FILENAME'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>SERVER_ADMIN: " . $_SERVER['SERVER_ADMIN'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>SERVER_SIGNATURE: " . $_SERVER['SERVER_SIGNATURE'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>PATH_TRANSLATED: " . $_SERVER['PATH_TRANSLATED'] . "</div>";
        echo "<div style='padding:5px;text-align:center'>SCRIPT_URI: " . $_SERVER['SCRIPT_URI'] . "</div>";
        ?>
    </div>

</div>


<p style="margin:0;padding:0"><b style="margin:0;padding:0">PHP $GLOBALS:</b></p>
<div style="border-style: solid; padding:5px;margin-bottom:15px;text-align:center;">
    $GLOBALS est une super variable globale PHP qui est utilisée pour accéder aux variables globales de n'importe où dans le script PHP (également à partir de fonctions ou de méthodes).
    <br>PHP stocke toutes les variables globales dans un tableau appelé $GLOBALS[ index ]. L' index contient le nom de la variable.
    <br>L'exemple ci-dessous montre comment utiliser la super variable globale $GLOBALS :<br>
    <?php
    $x = 75;
    $y = 25;
    addition();
    echo "Addition entre $x et $y ";
    echo "<span class='colorTextResult'>";
    echo "=> On obtient le resultat: $z qui est le resulat dans la fonction addition() sans passer des paramètres à celle-ci.";
    echo "</span>";
    ?>
</div>