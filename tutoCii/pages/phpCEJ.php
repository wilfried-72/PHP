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
    <div class="box" style="border-style: solid; padding:25px;margin-bottom:15px;text-align:center">


        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>json_encode() </h4>


            <?php


            $file = file_get_contents(fileArray);
            echo "file" . $file . "<br><br>";

            // $file = rtrim($file, "\r\n");
            // $file = str_replace("\r\n", "\n", $file);

            $str2 = str_replace('\\' , "" , json_encode($file));

            $age = array($str2);
            // echo json_encode($age);
            echo $str2;


            ////////////////////////////////////////////////////////////Atttention, je garde ceci://////////////////////////////////////

            // $myfile = fopen(filePath . "TestEcritureJson.json", "w") or die("Unable to open file!");
            // $txt = json_encode($age);
            // fwrite($myfile, $txt);
            // fclose($myfile);
            /////////////////////////////////////////////////////////////////////////////////////////////////



            // $a = [];
            // $fileArray = fopen(fileArray, "r") or die("Unable to open file!");
            // while (!feof($fileArray)) {
            //     // array_push($a, fgets($fileArray));
            //     echo fgets($fileArray) . "<br>";
            //     // array_push($tab, fgets($fileArray));
            // }
            // fclose($fileArray);

            // print_r($a);

            // echo "json" . json_encode($test) . "<br>";

            // echo "test: ". $test;
            // $fileArray = fopen(fileArray, "r") or die("Unable to open file!");
            // // echo fread($fileArray, filesize(fileArray));
            // $toto = fread($fileArray, filesize(fileArray));
            // fclose($fileArray);

            // echo "test: " . $toto . "<br><br><br>";
            // $age2 = array($toto);
            // print_r($age2[0]);
            // echo "<br>";

            // $a = array();
            // $test = array_push($a, $age2[0]);
            // print_r($test);
            // echo "<br>";

            // foreach ($test as $x => $x_value) {
            //     echo "Key=" . $x . ", Value=" . $x_value;
            //     echo "<br>";
            // }



            // $bibi = array($age2[0]);

            // $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

            // foreach ($age2 as $x => $x_value) {
            //     echo "Key=" . $x . ", Value=" . $x_value;
            //     echo "<br>";
            // }

            // echo "<br>";
            // echo json_encode($age2[0]);


            // $age = array(
            //     "AJAX" => "Asynchronous JavaScript and XML",
            //     "CSS" => "Cascading Style Sheets",
            //     "HTML" => "Hyper Text Markup Language",
            //     "PHP" => "PHP Hypertext Preprocessor",
            //     "SQL" => "Structured Query Language",
            //     "SVG" => "Scalable Vector Graphics",
            //     "XML" => "EXtensible Markup Language"
            // );
            // print_r($age);
            // echo json_encode($age);


            // $toto = str_replace("\\", "", $toto);
            // echo "new test toto: " . $toto . "<br>";
            // $age = array($toto);
            // print_r($age);
            // echo "age: " . $age . "<br>";
            // echo "json" . json_encode($age[0]) . "<br>";

            // $toto = "";

            // $myfile = fopen(fileArray, "r") or die("Unable to open file!");
            // Output one line until end-of-file
            // $tab = [];
            // $fileArray = fopen(fileArray, "r") or die("Unable to open file!");
            // while (!feof($fileArray)) {
            //     // echo fgets($fileArray) . "<br>";
            //     // array_push($tab, fgets($fileArray));
            // }
            // fclose($fileArray);

            // $age = array($tab);
            // print_r($age);
            // echo "age: " . $age . "<br>";
            // echo "json" . json_encode($age) . "<br>";

            // echo "toto" . $toto;
            // echo "json" . json_encode($tab2) . "<br>";

            // print_r($tab);


            // $fileArray = fopen(fileArray, "r") or die("Unable to open file!");
            // echo fread($myfile, filesize(fileArray));
            // fclose($myfile);
            ?>


        </div>

        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>json_decode() </h4>

            <?php

            $json = file_get_contents(fileJson); //si je fait un echo là, pas de soucis
            $obj = json_decode($json);
            var_dump($obj);

            // $fileArray = fopen(fileJson, "r") or die("Unable to open file!");
            // echo fread($fileArray, filesize(fileArray));
            // $toto = fread($fileArray, filesize(fileArray));
            // fclose($fileArray);

            // json_decode($toto);
            ?>


        </div>


    </div>

    <?php include '../components/footer.php'; ?>

</body>

</html>