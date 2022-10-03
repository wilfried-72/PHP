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

    <h2 style="text-decoration:underline;text-align:center">Fonctions de Base</h2>

    <!-- -------------------------------------------------------------------- -->
    <?php

    // Constates
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Ferrari",
        "Peugeot",
        "Toyota"
    ]);

    // Variables
    $nb = 5.10;
    $txt = "Bonjour je suis dans PHP $nb ";
    $txtSearch = "PHP";
    $txtReplace = $nb;
    $newTxt = 7;
    $arrayNbTest = [1, -100, -300, 0, 100, 500, 18.15, 18.65];

    // Classes
    // POO avec class et construc
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "<span class='classCar'>My car is a " . $this->color . " " . $this->model . "!</span><br>";
        }
    }
    ?>

    <div class="box">
        <!-- -------------------------------------------------------------------- -->
        <div>
            <h4>Fonction print:</h4>
            <?php
            /*Les différences sont minimes : echo n'a pas de valeur de retour alors qu'il print a une valeur de retour de 1,
     il peut donc être utilisé dans des expressions.
     echo peut prendre plusieurs paramètres (bien qu'une telle utilisation soit rare) 
     alors qu'il print peut prendre un argument. echo est légèrement plus rapide que print. */
            print "J'utilise la fonction Print";
            ?>
        </div>
        <!-- -------------------------------------------------------------------- -->
        <div>
            <h4>Fonction Echo:</h4>
            <?php
            echo "$txt";
            ?>

        </div>
    </div>


    <div class="box">
        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Fonction VarDump:</h4>
            <?php
            echo "La valeur et le type de donnée de ce text '$txt' est: ";
            echo var_dump($txt)
            ?>
        </div>
        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Fonction POO avec classe et constructeur:</h4>
            <ul>
                <?php
                $myCar = new Car("black", "Volvo");
                echo "<li>" .  $myCar->message() . " </li>";
                $myCar = new Car("red", "Toyota");
                echo "<li>" . $myCar->message() . " </li>";
                ?>
            </ul>
        </div>
    </div>


    <div class="box">
        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Fonction chaine de caractère:</h4>
            <ul>
                <?php
                // ******** Les chaines de caractères********************************
                echo "<li>" . "La taille de la chaine de caractère '$txt' est de : <span class='colorTextResult'>" . strlen($txt) . "</span></li>";

                //Compte les mots dans une chaîne
                echo "<li>" . "Le nombre de mots dans la chaine '$txt' est de : <span class='colorTextResult'>" . str_word_count($txt) . "</span></li>";

                //Compte les mots dans une chaîne
                echo "<li>" . "Inversez la chaîne '$txt' comme ceci : <span class='colorTextResult'>" . strrev($txt) . "</span></li>";

                //Rechercher un texte dans une chaîne
                echo "<li>" . "Le mot $txtSearch commence à la position <span class='colorTextResult'>" . strpos(($txt), $txtSearch) + 1 . " dans la phrase '$txt'" . "</span></li>";

                // Remplace le texte dans une chaîne
                echo "<li>" . "On remplace $txtReplace par $newTxt dans la phrase $txt et la phrase devient: <span class='colorTextResult'>" . str_replace($txtReplace, $newTxt, $txt) . "</span></li>";
                ?>
            </ul>
        </div>

        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Fonction vérification des nombres:</h4>

            <ul>
                <?php
                // Vérifiez si le type d'une variable est entier 
                echo "<li>" . "Est ce que le type $nb est un entier: ";
                echo "<span class='colorTextResult'>";
                echo var_dump(is_int($nb));
                echo "</span></li>";

                // d'une variable est flottant :
                echo "<li>" . "Est ce que le type $nb est une variable flottante: ";
                echo "<span class='colorTextResult'>";
                echo var_dump(is_float($nb));
                echo "</span></li>";

                /*
        PHP_FLOAT_MAX - Le plus grand nombre à virgule flottante représentable
        PHP_FLOAT_MIN - Le plus petit nombre à virgule flottante positif représentable
        PHP_FLOAT_MAX - Le plus petit nombre à virgule flottante négatif représentable
        PHP_FLOAT_DIG - Le nombre de chiffres décimaux qui peuvent être arrondis en un flottant et inversement sans perte de précision
        PHP_FLOAT_EPSILON - Le plus petit nombre positif représentable x, de sorte que x + 1.0 != 1.0
        */

                $int_cast = (int) $nb;
                echo "<li>" . "La valeur de  $nb devient un entier: ";
                echo "<span class='colorTextResult'>";
                echo $int_cast;
                echo "</span></li>";
                ?>
            </ul>
        </div>
    </div>


    <div class="box">
        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Fonction mathématique:</h4>

            <ul>
                <?php
                echo "<li>";
                echo "La valeur de pi est : <span class='colorTextResult'>", (pi());
                echo "</span></li>";
                echo "<div class='array'>";
                print_r($arrayNbTest);
                echo "</div>";
                echo "<li>" . "La valeur mini du tableau est : <span class='colorTextResult'>" . min($arrayNbTest) . "</span></li>";
                echo "<li>" . "La valeur max du tableau est : <span class='colorTextResult'>" . max($arrayNbTest) . "</span></li>";
                echo "<li>" . "La valeur absolue de $arrayNbTest[2] est: <span class='colorTextResult'>" . abs($arrayNbTest[2]) . "</span></li>";
                echo "<li>" . "La valeur aroundie de  $arrayNbTest[6] est: <span class='colorTextResult'>" . round($arrayNbTest[6]) . "</span></li>";
                echo "<li>" . "La valeur aroundie de $arrayNbTest[7] est: <span class='colorTextResult'>" . round($arrayNbTest[7]) . "</span></li>";
                echo "<li>" . "La valeur aléàtoire entre $arrayNbTest[3] $arrayNbTest[4] est: <span class='colorTextResult'>" . rand($arrayNbTest[3], $arrayNbTest[4]) . "</span></li>";
                ?>
            </ul>
        </div>

        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Fonction avec une constante:</h4>

            <ul>
                <?php
                myTest();
                ?>
            </ul>

        </div>
    </div>

    <div class="box">
        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Fonction avec operateur comparaison et incrémentation/décrémentation en utilisant un formulaire</h4>
            <form action="../components/resultOperation.php" method="post">
                Nombre 1: <input type="number" name="number1"><br>
                Nombre 2: <input type="number" name="number2"><br>
                <input type="submit" value="Voir les différents calculs">
            </form>
        </div>

        <div>
            <h4>Fonction avec operateur logique en utilisant un formulaire</h4>
            <form action="../components/resultOperationLogique.php" method="post">
                <div class="box">
                    Checkbox1:<input id="checkbox1" type="checkbox" name="checkbox1"><br>
                    <input id="divCheckbox1" style="display:none;" type="text" name="checkbox1Text" value="la checkbox1 n'a pas été validée">
                </div>

                <div class="box">
                    Checkbox2:<input id="checkbox2" type="checkbox" name="checkbox2"><br>
                    <input id="divCheckbox2" style="display:none;" type="text" name="checkbox2Text" value="la checkbox2 n'a pas été validée">
                </div>

                <input id="array1" name="checkboxes[]" value="checkbox1NotActivate">
                <input id="array2" name="checkboxes[]" value="checkbox2NotActivate">

                <input type="submit" value="Voir le résultat">

            </form>
        </div>
    </div>

</body>

</html>

<script>
    const Checkbox1Id = document.getElementById("checkbox1");
    const Checkbox2Id = document.getElementById("checkbox2");
    const divCheckbox1 = document.getElementById("divCheckbox1");
    const divCheckbox2 = document.getElementById("divCheckbox2");
    const array1 = document.getElementById("array1");
    const array2 = document.getElementById("array2");

    Checkbox1Id.addEventListener('change', (event) => {

        const stateCheckbox1 = (divCheckbox1.style.display == "none") ? divCheckbox1.style.display = "block" : divCheckbox1.style.display = "none";
        // console.log("sateChckbox1", stateCheckbox1);

        if (stateCheckbox1 === "block") {
            divCheckbox1.style.backgroundColor = "green";
            divCheckbox1.value = "la checkbox1 a été validée";
            array1.value = "checkbox1Activate";
        } else {
            divCheckbox1.value = "la checkbox1 n'a pas été validée";
            array1.value = "checkbox1NotActivate";
        }
    });

    Checkbox2Id.addEventListener('change', (event) => {

        const stateCheckbox2 = (divCheckbox2.style.display == "none") ? divCheckbox2.style.display = "block" : divCheckbox2.style.display = "none"
        // console.log("sateChckbox2", stateCheckbox2)

        if (stateCheckbox2 === "block") {
            divCheckbox2.style.backgroundColor = "green";
            divCheckbox2.value = "la checkbox2 a été validée";
            array2.value = "checkbox2Activate"
        } else {
            divCheckbox2.value = "la checkbox2 n'a pas été validée";
            array2.value = "checkbox2NotActivate";
        }

    });
</script>