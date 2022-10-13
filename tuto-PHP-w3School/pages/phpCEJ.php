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
    define("filePath", "../assets/documents/");
    ?>



    <h2 style="text-decoration:underline;text-align:center">Fonction callback, Exception</h2>

    <!-- -------------------------------------------------------------------- -->

    <div class="box" style="border-style: solid; padding:25px;margin-bottom:15px;text-align:center">

        <div>
            <h4>Fonction avec callback intégré à la fonction array_map() pour calculer la longueur de chaque chaîne dans un tableau </h4>
            <?php
            $strings = ["apple", "orange", "banana", "coconut"];
            echo "<br>Voici le tableau: <br>";
            echo '"apple", "orange", "banana", "coconut"<br><br>';
            echo "<span style='font-size:small;'><b>Résulat de cette fonction: </b></span><br>";

            $lengths = array_map(function ($item) {
                return strlen($item);
            }, $strings);

            $clength = count($strings);

            for ($x = 0; $x < $clength; $x++) {
                echo  "Le nombre de caracteres est de " . $lengths[$x] . " dans la chaine '" . $strings[$x];
                echo "<br>";
            } ?>
        </div>

        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Exécutez un callback à partir d'une fonction définie par l'utilisateur </h4>
            <form action="" method=" get">
                Texte 1 pour rajouter !: <input type="text" name="txt1" size="20"><br>
                Texte 2 pour rajouter ?: <input type="text" name="txt2" size="20"><br>
                <input type="submit" value="valider">
            </form>

            <?php
            $txt1 =  $_GET["txt1"];
            $txt2 =  $_GET["txt2"];
            // Pass "exclaim" and "ask" as callback functions to printFormatted()

            if ($txt1 || $txt2) {
                printFormatted($txt1, "exclaim");
                echo "<br>";
                printFormatted($txt2, "ask");
            }
            ?>
        </div>

        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Exécutez un callback à partir d'une fonction définie par l'utilisateur </h4>
            <form action="" method=" get">
                Nombre 1: <input type="number" required name="num1" size="2"><br>
                Nombre 2: <input type="number" required name="num2" size="2"><br>
                <input type="submit" value="Calculer">
            </form>

            <?php
            $num1 =  (int) $_GET["num1"];
            $num2 =  (int) $_GET["num2"];


            if ($num1 || $num2) {
                try {
                    echo divide($num1, $num2);
                    echo "<br>";
                } catch (Exception $ex) {
                    echo "Unable to divide";
                    echo "<br>";
                    $code = $ex->getCode();
                    $message = $ex->getMessage();
                    $file = $ex->getFile();
                    $line = $ex->getLine();
                    echo "Exception thrown in $file <br> on line $line: [Code $code] <br> '$message' <br> ";
                } finally {
                    echo "Process complete.<br>";
                }
            }

            ?>
        </div>
    </div>


    <div style="text-align:center;margin-top:30px;margin-bottom:30px">
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>">Relancer le formulaire et effacer les données </a>
    </div>

    <h2 style="text-decoration:underline;text-align:center">Fonction sur les fichiers en format JSON</h2>
    <div style="border-style: solid; padding:25px;margin-bottom:15px;text-align:center">

        <!-- -------------------------------------------------------------------- -->
        <h3>json_encode() </h3>
        <p><b></p>Voici le tableau d'origine: </b></p>
        <p>
            "AJAX" => "Asynchronous JavaScript and XML", "CSS" => "Cascading Style Sheets", "HTML" => "Hyper Text Markup Language", "PHP" => "PHP Hypertext Preprocessor", "SQL" => "Structured Query Language", "SVG" => "Scalable Vector Graphics", "XML" => "EXtensible Markup Language"
        </p>

        <?php
        $test = array("AJAX" => "Asynchronous JavaScript and XML", "CSS" => "Cascading Style Sheets", "HTML" => "Hyper Text Markup Language", "PHP" => "PHP Hypertext Preprocessor", "SQL" => "Structured Query Language", "SVG" => "Scalable Vector Graphics", "XML" => "EXtensible Markup Language");
        echo "<p><b>Voici le json de généré: </b></p>";
        echo json_encode($test);

        $myfile = fopen(filePath . "TestEcritureJson.json", "w") or die("Unable to open file!");
        $txt = json_encode($test);
        fwrite($myfile, $txt);
        fclose($myfile);

        echo "<br><br>";
        ?>


        <div>
            <!-- -------------------------------------------------------------------- -->
            <h3>json_decode() à partir d'un fichier json enregistré dans architecture </h3>

            <?php
            $json = file_get_contents(fileJson); //si je fait un echo là, pas de souci
            $arr = json_decode($json, true);
            echo "<br>--------------------<br>";
            var_dump($arr);
            echo "<br>--------------------<br><br>";

            echo "Name: " . $arr["members"][1]['name'] . "<br>";
            echo "secretIdentity de " . $arr["members"][0]['name'] . " est " . $arr["members"][0]['secretIdentity']  . "<br>";
            echo "<br>--------------------<br><br>";
            
            echo "<div class='box'>";
            foreach ($arr["members"] as $key => $items) {
                // echo  $key . " => " . $value . "<br>";
                echo "<div>";
                echo "********************************************<br>";

                foreach ($items as $key => $item) {
                    echo  $key . " : " . $item . "<br>";
                    echo "---<br>";

                    if ($key === "powers") {
                        echo "**Powers**<br>";
                        echo "_________________<br>";
                        foreach ($item as $key => $value) {
                            echo $value . "<br>";
                        }
                        echo "_________________<br>";
                    }
                }
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>

</body>

</html>