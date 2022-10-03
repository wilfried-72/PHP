<?php
// Start the session
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
    ?>

    <h2 style="text-decoration:underline;text-align:center">Formulaire PHP</h2>

    <!-- -------------------------------------------------------------------- -->


    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";


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
            // Verification si l'émail est dans le bon format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Format du mail invalide";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // Verifie si la chaine de caractère est bien une adresse url valide
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "URL invalide";
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
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br><br>
        Gender:

        <!-- La fonction isset() vérifie si une variable est définie, ce qui signifie qu'elle doit être déclarée et n'est pas NULL. -->
        <!-- Cette fonction renvoie true si la variable existe et n'est pas NULL, sinon elle renvoie false. -->
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Donne les valeurs de tous les champs si il y aucune erreur de retournée
    echo "<h2>Voici vos données qui seront postées:</h2>";
    if ($nameErr || $nameErr || $emailErr ||  $genderErr ||  $websiteErr) echo "Les données ne seront pas envoyées";
    else {
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    }
    ?>

    <div style="text-align:center;margin-top:0px">
        <a href="phpForm.php">Relancer le formulaire et effacer les données </a>
    </div>

    <div style="text-align:end;margin-top:0px">
        © 2010-<?php echo date("Y"); ?>
    </div>

    <?php
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    ?>

</body>

</html>