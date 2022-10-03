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


    <h2 style="text-decoration:underline;text-align:center">Regex</h2>

    <div style="padding:5px;margin-bottom:15px;text-align:center;">
        Les expressions régulières vous permettent de rechercher et de remplacer des modèles dans des chaînes.<br>

        <div class="box" style="border-style: solid; padding:5px;margin-bottom:15px;">
            <div><b>preg_filter <br></b>
                La preg_filter()fonction renvoie une chaîne ou un tableau de chaînes dans lequel les correspondances du modèle ont été remplacées par la chaîne de remplacement.<br>
                Si l'entrée est un tableau, cette fonction renvoie un tableau. Si l'entrée est une chaîne, cette fonction renvoie une chaîne.<br>
                Syntax: preg_filter(pattern, replacement, input, limit, count) <br>
                <p style="font-style: italic">Texte: <br>
                    "It is 5 o'clock",<br>
                    "40 days",<br>
                    "No numbers here",<br>
                    "In the year 2000"<br>
                </p>


                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p style="font-style: italic;text-align:left">Choix Patterns <br>
                        -[abc] Find one character from the options between the bracket,<br>
                        -[^abc] Find any character NOT between the brackets,<br>
                        -[0-9] Find one character from the range 0 to 9,<br>
                    </p>

                    Pattern: <input type="text" name="pregFilter">
                    <input type="submit">
                </form>

                <?php
                $inputPregFilter = [
                    "It is 5 o'clock",
                    "40 days",
                    "No numbers here",
                    "In the year 2000"
                ];
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    // collect value of input field
                    $pregFilter = $_REQUEST['pregFilter'];
                    if (empty($pregFilter)) {
                    } else {
                        $resultPregFilter = preg_filter('/[' . $pregFilter . ']+/', '($0)', $inputPregFilter);
                        echo "Le résultat est: ";
                        echo "<div class='array'>";
                        print_r($resultPregFilter);
                        echo "</div>";
                    }
                }
                ?>
            </div>

            <div>
                <b>preg_grep <br></b>
                La preg_grep()fonction renvoie un tableau contenant uniquement les éléments de l'entrée qui correspondent au modèle donné.<br>
                Syntax: preg_grep(pattern, input, flags) <br>
                <p style="font-style: italic">Texte: <br>
                    "Red",<br>
                    "Pink",<br>
                    "Green",<br>
                    "Blue",<br>
                    "Purple",<br>
                </p>


                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    Get items from an array which begin with: <input type="text" size="1" name="preg_grep">
                    <input type="submit">
                </form>

                <?php
                $inputPregFilter = [
                    "Red",
                    "Pink",
                    "Green",
                    "Blue",
                    "Purple"
                ];

                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    // collect value of input field
                    $pregFilter = $_REQUEST['preg_grep'];
                    if (empty($pregFilter)) {
                    } else {
                        $resultPregFilter = preg_grep("/^" . $pregFilter  . "/i", $inputPregFilter);
                        echo "Le résultat est: ";
                        echo "<div class='array'>";
                        print_r($resultPregFilter);
                        echo "</div>";
                    }
                }
                ?>
            </div>

            <div>

                <b>preg_last_error<br></b>
                La preg_last_error()fonction renvoie un code d'erreur pour la dernière expression régulière évaluée. La valeur renvoyée correspondra à l'une des constantes<br>
                Syntax: preg_last_error()<br>

                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    texte: <input type="text" name="txtPregLastError">
                    Pattern: <input type="text" name="patternPregLastError">
                    <input type="submit">
                </form>

                <?php
                $strTxtPregLastError  = $_REQUEST['txtPregLastError'];
                $patternText = $_REQUEST['patternPregLastError'];
                $patternPregLastError = '/' . $patternText . '/';

                echo '<p style="font-style: italic">Texte: <br>';
                echo "$strTxtPregLastError<br>";
                echo "Pattern: " . $patternText;
                echo "</p>";

                $match = @preg_match($patternPregLastError, $strTxtPregLastError, $matches);

                if ($match === false) {
                    // An error occurred
                    $err = preg_last_error();
                    if ($err == PREG_INTERNAL_ERROR) {
                        echo 'Invalid regular expression.';
                    }
                } else if ($match) {
                    // A match was found
                    echo $matches[0];
                } else {
                    // No matches were found
                    echo 'No matches found';
                }
                ?>
            </div>
        </div>

    </div>

    <div style="padding:5px;margin-bottom:15px;text-align:center;">
        <div class="box" style="border-style: solid; padding:5px;margin-bottom:15px;">
            <div><b>preg_match <br></b>
                La preg_match()fonction renvoie si une correspondance a été trouvée dans une chaîne.<br>
                Syntax: preg_match(pattern, input, matches, flags, offset)<br>

                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    texte: <input type="text" name="txtPregMatch">
                    Pattern: <input type="text" name="patternPregMatch">
                    <input type="submit">
                </form>

                <?php
                $strTxtPregMatch = $_REQUEST['txtPregMatch'];
                $patternTextPregMatchSet = $_REQUEST['patternPregMatch'];
                $patternTextPregMatch = "/" . $patternTextPregMatchSet . "/i";

                echo '<p style="font-style: italic">Texte: <br>';
                echo "$strTxtPregMatch<br>";
                echo "Pattern: " . $patternTextPregMatchSet;
                echo "</p>";
                if (preg_match($patternTextPregMatch, $strTxtPregMatch) === 1) echo "Le pattern '$patternTextPregMatchSet' a été trouvé dans le texte '$strTxtPregMatch'";
                else echo "Le pattern '$patternTextPregMatchSet' n'a pas été trouvé dans le texte '$strTxtPregMatch'";
                ?>

            </div>

            <div><b>preg_match_all<br></b>
                La preg_match_all()fonction renvoie le nombre de correspondances d'un modèle trouvées dans une chaîne et remplit une variable avec les correspondances trouvées.
                Syntax: preg_match_all(pattern, input, matches, flags, offset)<br>

                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    texte: <input type="text" name="txtPregMatchAll">
                    Pattern: <input type="text" name="patternPregMatchAll">
                    <input type="submit">
                </form>

                <?php
                $strTxtPregMatchAll = $_REQUEST['txtPregMatchAll'];
                $patternTextPregMatchAllSet = $_REQUEST['patternPregMatchAll'];
                $patternTextPregMatchAll = "/" . $patternTextPregMatchAllSet . "/i";

                echo '<p style="font-style: italic">Texte: <br>';
                echo "$strTxtPregMatchAll<br>";
                echo "Pattern: " . $patternTextPregMatchAllSet;
                echo "</p>";
                if (preg_match_all($patternTextPregMatchAll, $strTxtPregMatchAll, $matches)) echo print_r($matches);
                else echo "Le pattern '$patternTextPregMatchAllSet' n'a pas été trouvé dans le texte '$strTxtPregMatchAll'";
                ?>
            </div>





        </div>


    </div>

    <div style="padding:5px;margin-bottom:15px;text-align:center;">
        <div class="box" style="border-style: solid; padding:5px;margin-bottom:15px;">
            <div><b>preg_replace <br></b>
                La preg_replace() fonction renvoie une chaîne ou un tableau de chaînes où toutes les correspondances d'un modèle ou d'une liste de modèles trouvés dans l'entrée sont remplacées par des sous-chaînes.<br>
                Syntax: preg_replace(patterns, replacements, input, limit, count) <br>

                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    texte: <input type="text" name="txtPregReplace">
                    Pattern: <input type="text" name="patternPregReplace">
                    PatternReplace: <input type="text" name="newPatternPregReplace">
                    <input type="submit">
                </form>

                <?php
                $strTxtPregReplace = $_REQUEST['txtPregReplace'];
                $patternTextPregReplaceSet = $_REQUEST['patternPregReplace'];
                $newPatternTextPregReplace = $_REQUEST['newPatternPregReplace'];
                $patternTextPregReplace = "/" . $patternTextPregReplaceSet . "/i";

                echo '<p style="font-style: italic">Texte: <br>';
                echo "$strTxtPregReplace<br>";
                echo "Pattern: " . $patternTextPregReplaceSet . "<br>";
                echo "Pattern: " . $newPatternTextPregReplace . "<br>";
                echo "</p>";
                echo "Le nouveau text est: " . preg_replace($patternTextPregReplace, $newPatternTextPregReplace, $strTxtPregReplace);
                ?>

            </div>

            <div><b>preg_replace-callback<br></b>
                La preg_replace_callback()fonction, étant donné une expression et un rappel, renvoie une chaîne où toutes les correspondances de l'expression sont remplacées par la sous-chaîne renvoyée par la fonction de rappel.<br>
                Exemple sur callback: Compter les lettres de tous les mots d'une phrase
                Syntax: preg_replace_callback(pattern, callback, input, limit, count)<br>

                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    texte: <input type="text" name="txtPregReplaceCallback">
                    Pattern: <input type="text" name="patternPregReplaceCallback">
                    <input type="submit">
                </form>

                <?php
                $strTxtPregReplaceCallback = $_REQUEST['txtPregReplaceCallback'];
                $patternTextPregReplaceCallbackSet = $_REQUEST['patternPregReplaceCallback'];
                $patternTextPregReplaceCallback = "/" . $patternTextPregReplaceCallbackSet . "/i";

                echo '<p style="font-style: italic">Texte: <br>';
                echo "$strTxtPregReplaceCallback<br>";
                echo "Pattern: " . $patternTextPregReplaceCallbackSet;
                echo "</p>";
                $resultPregReplaceCallback = preg_replace_callback($patternTextPregReplaceCallback, 'countLetters', $strTxtPregReplaceCallback);
                echo $resultPregReplaceCallback;
                ?>
            </div>


            <div><b>preg_replace-callback_Array<br></b>
                La preg_replace_callback_array()fonction renvoie une chaîne ou un tableau de chaînes dans lequel les correspondances d'un ensemble d'expressions régulières sont remplacées par la valeur de retour d'une fonction de rappel.<br>
                Exemple sur callback: Montrez combien de lettres ou de chiffres se trouvent dans chaque mot d'une phrase :
                Syntax: preg_replace_callback_array(patterns, input, limit, count) <br>

                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    texte: <input type="text" name="txtPregReplaceCallbackArray">
                    <input type="submit">
                </form>

                <?php

                $strTxtPregReplaceCallbackArray = $_REQUEST['txtPregReplaceCallbackArray'];
                $patternsPregReplaceCallbackArray = [
                    '/\b[a-z]+\b/i' => 'countLettersArray',
                    '/\b[0-9]+\b/' => 'countDigits'
                ];


                echo '<p style="font-style: italic">Texte: <br>';
                echo "$strTxtPregReplaceCallbackArray<br>";
                echo "Pattern: " . print_r($patternsPregReplaceCallbackArray);
                echo "</p>";
                $resultPregReplaceCallback = preg_replace_callback_array($patternsPregReplaceCallbackArray, $strTxtPregReplaceCallbackArray);
                echo $resultPregReplaceCallback;
                ?>
            </div>
        </div>
    </div>

    <div style="padding:5px;margin-bottom:15px;text-align:center;">
        <div class="box" style="border-style: solid; padding:5px;margin-bottom:15px;">
            <div><b>preg_split <br></b>
                La preg_split() fonction divise une chaîne en un tableau en utilisant les correspondances d'une expression régulière comme séparateurs<br>
                Utilisez preg_split() pour diviser une date en ses composants<br>
                Syntax: preg_split(pattern, string, limit, flags) <br>

                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    texte: <input type="datetime-local" name="datepregSplit">
                    <input type="submit">
                </form>

                <?php
                $datepregSplit = $_REQUEST['datepregSplit'];
                $patternDatepregSplit = "/[-\s:]/";
                $components = preg_split($patternDatepregSplit, $datepregSplit);

                echo '<p style="font-style: italic">Texte: <br>';
                echo "$datepregSplit<br>";
                echo "Pattern: " . $patternDatepregSplit . "<br>";
                echo "</p>";
                print_r($components);
                ?>

            </div>

            <div><b>preg_quote<br></b>
                La preg_quote()fonction ajoute une barre oblique inverse aux caractères qui ont une signification particulière dans les expressions régulières afin que les recherches de caractères littéraux puissent être effectuées. <br>
                Cette fonction est utile lors de l'utilisation d'une entrée utilisateur dans des expressions régulières.<br>
                Utilisez preg_quote() pour utiliser en toute sécurité des caractères spéciaux dans une expression régulière <br>
                Syntax: preg_quote(input, delimiter) <br>

                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    texte: <input type="text" name="txtQuote">
                    <input type="submit">
                </form>
                <?php
                $strTxtQuote = $_REQUEST['txtQuote'];
                $search = preg_quote("://", "/");
                $patternQuote  = "/$search/";
                echo '<p style="font-style: italic">Texte: <br>';
                echo "$strTxtQuote<br>";
                echo "Pattern: " . $search;
                echo "</p>";
                if (preg_match($patternQuote, $strTxtQuote)) {
                    echo "The input is a URL.";
                } else {
                    echo "The input is not a URL.";
                }
                ?>
            </div>



        </div>


    </div>

    <div style="text-align:center;margin-top:0px">
        <a href="phpRegEx.php">Relancer le formulaire et effacer les données </a>
    </div>

    <?php include '../components/footer.php'; ?>
</body>

</html>