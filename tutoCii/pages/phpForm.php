<?php
//initialisation de 3 cookies
$cookie_name = "user";
$cookie_value = "wil";
$cookie_name2 = "admin";
$cookie_value2 = "doe";
$cookie_name3 = "cookieTest";
$cookie_value3 = "test";
// exprimer en seconde pour le temps des cookies
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day donc 30 jours
setcookie($cookie_name, $cookie_value, time() + 60, "/"); // cookie dure 1 min
setcookie($cookie_name2, $cookie_value2, time() + 20, "/"); // cookie dure 20 secondes
setcookie($cookie_name3, $cookie_value3, time() + (86400 * 30), "/"); // 86400 = 1 day donc 30 jours

//initialisation de la session
session_start();
?>

<!DOCTYPE html>

<!-- import css bootstrap  -->
<link href="../assets/css/index.css" rel="stylesheet">
<html>

<body>

    <!-- -------------------------------------------------------------------- -->
    <?php
    // apelle de la navBar
    require '../components/nav.php';
    // appelle des fonctions
    require '../utils/function.php';

    //Declaration constante
    define("fileArray", "../assets/documents/webdictionary.txt");
    define("fileJson", "../assets/documents/heros.json");
    ?>



    <h2 style="text-decoration:underline;text-align:center">Formulaire PHP avec fonction filter et/ou Regex dans les champs</h2>

    <!-- -------------------------------------------------------------------- -->

    <div class="box" style="border-style: solid; padding:5px;margin-bottom:15px;">

        <div>
            <?php
            // define variables and set to empty values
            $nameErr = $emailErr = $genderErr = $websiteErr = $websiteFilterErr = $adresseIPErr = $adresseIPV6Err = "";
            $name = $email = $gender = $comment = $website = $matricule = $matriculeErr = $adresseIP =  $adresseIPV6 = "";


            // Execute le code sur l'action post du formulaire
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // si input est vide alors on indique via la variable $nameErr que le champ est obligatoire
                if (empty($_POST["name"])) {
                    $nameErr = "Le nom est obligatoire";
                    // sinon la variable $name prend la valeur du champ qui sera modifiée par la fonction test_input
                    // Voici ce que fait cette fonction:
                    // - Retourne la chaine en string
                    // - Supprime les antislashs d'une chaîne. 
                    // - Convertit certains caractères prédéfinis en entités HTML.
                } else {
                    $name = test_input($_POST["name"]);
                    // Verifie si le nom contient bien que des lettres et des espaces
                    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                        $nameErr = "Vous devez saisir que des lettres et des espaces";
                    }
                }

                // C'est le même pincipe pour les autres champs du formulaire.......
                if (empty($_POST["email"])) {
                    $emailErr = "L'email est obligatoire";
                } else {
                    $email = test_input($_POST["email"]);
                    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                    // Verification si l'émail est dans le bon format
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Format du mail invalide";
                    }
                }

                if (empty($_POST["website"])) {
                    $website = "";
                } else {

                    // Test avec regex
                    $website = test_input($_POST["website"]);
                    // Verifie si la chaine de caractère est bien une adresse url valide
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                        $websiteErr = "URL invalide with Regex";
                    }

                    //Test avec filter
                    $url = test_input($_POST["website"]);
                    // Remove all illegal characters from a url
                    $url = filter_var($url, FILTER_SANITIZE_URL);

                    if (!filter_var($url, FILTER_VALIDATE_URL) === true) {
                        $websiteFilterErr = " and/no Not a valid URL with filter";
                    }
                }

                if (empty($_POST["matricule"])) {
                    $matricule = "";
                } else {
                    /* min value */
                    $min = 1;
                    /* max value */
                    $max = 10;

                    // Test avec Filter fonction
                    $matricule  = test_input($_POST["matricule"]);

                    //test si entier et non à 0       
                    if (filter_var($matricule, FILTER_VALIDATE_INT) === 0 || !filter_var($matricule, FILTER_VALIDATE_INT) === true) {
                        $matriculeErr = "No integer number";
                    } else {
                        //test si nombre compris entre 1 et 10
                        if (filter_var($matricule, FILTER_VALIDATE_INT) === 0 || !filter_var($matricule, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === true) {
                            $matriculeErr = "integer are not between " . $min . " and " . $max;
                        }
                    }
                }

                if (empty($_POST["adresseIP"])) {
                    $adresseIP = "";
                } else {
                    $adresseIP   = test_input($_POST["adresseIP"]);
                    if (!filter_var($adresseIP, FILTER_VALIDATE_IP) === true) {
                        $adresseIPErr = "not a valid IP address";
                    }
                }

                if (empty($_POST["adresseIPV6"])) {
                    $adresseIPV6 = "";
                } else {
                    $adresseIPV6 = test_input($_POST["adresseIPV6"]);
                    if (!filter_var($adresseIPV6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === true) {
                        $adresseIPV6Err = "not a valid IP V6 address";
                    }
                }

                if (empty($_POST["comment"])) {
                    $comment = "";
                } else {
                    $comment = test_input($_POST["comment"]);
                }

                if (empty($_POST["gender"])) {
                    $genderErr = "Le genre est obligatoire";
                } else {
                    $gender = test_input($_POST["gender"]);
                }
            }
            ?>

            <!-- Formulaire HTML -->
            <p><span class="error">* Champ obligatoire</span></p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                Nom: <input type="text" name="name" value="<?php echo $name; ?>">
                <span class="error">* <?php echo $nameErr; ?></span>
                <br><br>
                E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
                <span class="error">* <?php echo $emailErr;  ?></span>
                <br><br>
                Website: <input type="text" name="website" value="<?php echo $website; ?>">
                <span class="error"><?php echo $websiteErr . $websiteFilterErr; ?></span>
                <br><br>
                Matricule compris entre 1 et 10 : <input type="float" name="matricule" value="<?php echo $matricule; ?>">
                <span class="error"><?php echo $matriculeErr; ?></span>
                <br><br>
                Adresse IP: <input type="text" name="adresseIP" value="<?php echo $adresseIP; ?>">
                <span class="error"><?php echo $adresseIPErr; ?></span>
                <br><br>
                Adresse IPV6 : <input type="text" name="adresseIPV6" value=" <?php echo $adresseIPV6; ?>">
                <span class="error"><?php echo $adresseIPV6Err; ?></span>
                <br><br>
                Commentaire: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
                <br><br>
                Genre:
                <!-- La fonction isset() vérifie si une variable est définie, ce qui signifie qu'elle doit être déclarée et n'est pas NULL. -->
                <!-- Cette fonction renvoie true si la variable existe et n'est pas NULL, sinon elle renvoie false. -->
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
                <span class="error">* <?php echo $genderErr; ?></span>
                <br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        <div>
            <?php
            // Donne les valeurs de tous les champs si il y aucune erreur de retournée
            echo "<h2>Voici vos données qui seront postées:</h2>";
            if ($nameErr || $nameErr || $emailErr ||  $genderErr ||  $websiteErr ||  $matriculeErr || $adresseIPErr || $adresseIPV6Err)  echo "Les données ne seront pas envoyées";
            else {
                echo $name;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $website;
                echo "<br>";
                echo $matricule;
                echo "<br>";
                echo $adresseIP;
                echo "<br>";
                echo $adresseIPV6;
                echo "<br>";
                echo $comment;
                echo "<br>";
                echo $gender;
            }
            ?>
            <div style="text-align:center;padding:10px;margin-top:50px">
                <a href="phpForm.php">Relancer le formulaire et effacer les données </a>
            </div>

        </div>

    </div>

    <h2 style="text-decoration:underline;text-align:center">Gestion des cookies/session</h2>


    <p><span><b>Ajout de parametre dans la session ouverte:</b></span></p>

    <form style="margin-bottom:20px;" method="Post" action="">
        Nom du parametre: <input type="text" name="nameParams">
        Valeur du paramètre: <input type="text" name="valueParams">
        <input type="submit" name="submitCookie" value="Rajout paramètre Session">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Set session variables
        $_SESSION[$_POST["nameParams"]] = $_POST["valueParams"];
        echo "Session variables are set.";
    }
    ?>

    <form method="Get" action="../components/cookieSession.php">
        <input type="submit" name="submitCookie" value="Vérification des cookies/sessions">
    </form>

    <?php include '../components/footer.php'; ?>

</body>

</html>