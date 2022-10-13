<!DOCTYPE html>

<!-- import css bootstrap  -->
<link href="../assets/css/index.css" rel="stylesheet">
<html>

<body>

    <?php
    // apelle de la navBar
    require '../components/nav.php';
    // appelle des fonctions
    require '../utils/function.php';
    ?>


    <h2 style="text-decoration:underline;text-align:center">Variables Globales</h2>

    <p style="margin:0;padding:0"><b style="margin:0;padding:0">PHP $GLOBALS SERVE:R</b></p>
    <div class="box" style="border-style: solid; padding:5px;margin-bottom:15px;">
        <div>
            <?php
            echo "<div style='padding:5px;text-align:center'><b>PHP_SELF: </b>" . $_SERVER['PHP_SELF'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>SERVER_NAME: </b>" . $_SERVER['SERVER_NAME'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>HTTP_HOST: </b>" . $_SERVER['HTTP_HOST'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>HTTP_REFERER: </b>" . $_SERVER['HTTP_REFERER'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>HTTP_USER_AGENT: </b>" . $_SERVER['HTTP_USER_AGENT'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>SCRIPT_NAME: </b>" . $_SERVER['SCRIPT_NAME'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>REQUEST_METHOD': </b>" . $_SERVER['REQUEST_METHOD'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>REQUEST_TIME: </b>" . $_SERVER['REQUEST_TIME'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>QUERY_STRING: </b>" . $_SERVER['QUERY_STRING'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>HTTP_ACCEPT: </b>" . $_SERVER['HTTP_ACCEPT'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>HTTP_ACCEPT_CHARSET: </b>" . $_SERVER['HTTP_ACCEPT_CHARSET'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>REMOTE_ADDR: </b>" . $_SERVER['REMOTE_ADDR'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>REMOTE_HOST: </b>" . $_SERVER['REMOTE_HOST'] . "</div>";
            ?>
        </div>

        <div>
            <?php
            echo "<div style='padding:5px;text-align:center'><b>GATEWAY_INTERFACE: </b>" . $_SERVER['GATEWAY_INTERFACE'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>SERVER_ADDR: </b>" . $_SERVER['SERVER_ADDR'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>HTTP_SERVER_SOFTWARE: </b>" . $_SERVER['SERVER_SOFTWARE'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>SERVER_PROTOCOL: </b>" . $_SERVER['SERVER_PROTOCOL'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>HTTPS: </b>" . $_SERVER['HTTPS'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>SERVER_PORT: </b>" . $_SERVER['SERVER_PORT'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>REMOTE_PORT: </b>" . $_SERVER['REMOTE_PORT'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>SCRIPT_FILENAME: </b>" . $_SERVER['SCRIPT_FILENAME'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>SERVER_ADMIN: </b>" . $_SERVER['SERVER_ADMIN'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>SERVER_SIGNATURE: </b>" . $_SERVER['SERVER_SIGNATURE'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>PATH_TRANSLATED: </b>" . $_SERVER['PATH_TRANSLATED'] . "</div>";
            echo "<div style='padding:5px;text-align:center'><b>SCRIPT_URI: </b>" . $_SERVER['SCRIPT_URI'] . "</div>";
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

    <p style="margin:0;padding:0"><b style="margin:0;padding:0">PHP $_REQUEST</b></p>
    <div style="padding:5px;margin-bottom:15px;text-align:center;">
        PHP $_REQUEST est une super variable globale PHP qui est utilisée pour collecter des données après avoir soumis un formulaire HTML.

        <div class="box" style="border-style: solid; padding:5px;margin-bottom:15px;">
            <div> Methode Post
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    Name: <input type="text" name="fnamePost">
                    <input type="submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                    $namePost = $_REQUEST['fnamePost'];
                    if (empty($namePost)) {
                        echo "<span class='colorTextResult'>";
                        echo "Name is empty";
                        echo "</span>";
                    } else {
                        echo "Résultat: ";
                        echo "<span class='colorTextResult'>";
                        echo $namePost;
                        echo "</span>";
                        echo " par methode Post";
                    }
                }
                ?>
            </div>

            <div>Methode Get
                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    Name: <input type="text" name="fnameGet">
                    <input type="submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    // collect value of input field
                    $nameGet = $_REQUEST['fnameGet'];
                    if (empty($nameGet)) {
                        echo "<span class='colorTextResult'>";
                        echo "Name is empty";
                        echo "</span>";
                    } else {
                        echo "Résultat: ";
                        echo "<span class='colorTextResult'>";
                        echo $nameGet;
                        echo "</span>";
                        echo " par methode Get";
                    }
                }
                ?>
            </div>
        </div>

    </div>

    <div style="text-align:center;margin-top:0px">
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>">Relancer le formulaire et effacer les données </a>
    </div>

    <?php include '../components/footer.php'; ?>
</body>

</html>