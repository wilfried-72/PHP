<?php
// Fonction erase cookieTest
function eraseCookie($name)
{
    setcookie($name, "", time() - 3600, '/');
}

//config session et demarrage session
session_start();
?>

<!-- import css bootstrap  -->
<link href="../assets/css/index.css" rel="stylesheet">
<html>

<body>

    <h2 style="text-decoration:underline;text-align:center">Gestion des cookies/session</h2>

    <form method="Get" action="../components/cookieSession.php">
        <input type="submit" name="submitCookie" value="Relancer Test">
    </form>


    <?php
    // // Set session variables
    // $_SESSION["favcolor"] = "green";
    // $_SESSION["favanimal"] = "cat";
    // echo "Session variables are set.";


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!isset($_COOKIE["user"])) {
            echo "Cookie name 'user' is not set!<br>";
        } else {
            echo "-----------------------------<br>";
            echo "Cookie 'user' is set!<br>";
            echo "Value is: " . $_COOKIE["user"] . "<br>";
            echo "-----------------------------<br>";
        }

        if (!isset($_COOKIE["admin"])) {
            echo "Cookie name 'admin' is not set!<br>";
        } else {
            echo "-----------------------------<br>";
            echo "Cookie 'admin' is set!<br>";
            echo "Value is: " . $_COOKIE["admin"] . "<br>";
            echo "-----------------------------<br>";
        }

        if (!isset($_COOKIE["cookieTest"])) {
            echo "Cookie name 'cookieTest' is not set!<br>";
        } else {
            echo "-----------------------------<br>";
            echo "Cookie 'cookieTest' is set!<br>";
            echo "Value is: " . $_COOKIE["cookieTest"] . "<br>";
            echo "-----------------------------<br>";
        }

        echo "-----------------------------<br>";
        echo "Il reste " . (count($_COOKIE)) . " cookie(s) de valide<br>";
        echo "-----------------------------<br>";

        // Verification des sessions
        foreach ($_SESSION as $x => $val) {
            echo "-----------------------------<br>";
            echo "Parametre session <b>$x</b>  is <b>$val</b><br>";
            echo "-----------------------------<br>";
        }
    }
    ?>

    <div style="text-align:center">
        <a href="../pages/phpForm.php">Relancer les cookies qui se mettent sur la page PHP form </a>
    </div>

    <form method="POST" action="">
        <input type="submit" name="submitEraseCookie" value="Effacer cookieTest et session">
    </form>

    <?php
    // // Set session variables
    // $_SESSION["favcolor"] = "green";
    // $_SESSION["favanimal"] = "cat";
    // echo "Session variables are set.";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!isset($_COOKIE["cookieTest"])) {
            echo "Cookie name 'cookieTest' is not set!<br>";
        } else {
            // remove all session variables
            session_unset();
            // destroy the session
            session_destroy();
            eraseCookie('cookieTest');
        }
    }
    ?>




</body>

</html>