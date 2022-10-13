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

    <h2 style="text-decoration:underline;text-align:center">Fonctions if Switch loops Function Array ...</h2>

    <!-- -------------------------------------------------------------------- -->
    <div class="box">
        <!-- -------------------------------------------------------------------- -->
        <div style="text-align:center ;">
            <h4>Fonction if:</h4>

            <div>
                <form action="" method="get">
                    <input id="inputFormTime" type="time" required name="time1" value="00:00"><br>
                    <input type="submit" value="Valider">
                </form>

                <?php

                $t =  $_GET["time1"];

                if ($_GET["time1"]) {
                    if ($t > "07:00" and $t < "08:00") {
                        echo "<div id='time'>Attention c'est bientôt 8h!</div>";
                    } elseif ($t >= "08:00" and $t <= "12:30") {
                        echo "<div id='time'>c'est le matin, tu dois être en train de bosser</div>";
                    } elseif ($t > "12:30" and $t <= "14:00") {
                        echo "<div id='time'>c'est la pause déjeuner</div>";
                    } elseif ($t > "14:00" and $t <= "17:30") {
                        if ($t > "14:30"  and $t <= "16:30") echo "<div id='time'>c'est l'après midi, tu dois être en train de bosser</div>";
                        else echo "<div id='time'>Si c'est vendredi, tu peux aller en week-end sinon encore un petit effort!!!</div>";
                    } else {
                        echo "<div id='time'>Tu fais ce que tu veux entre 17h30 et 7h00</div>";
                    }
                }
                ?>
            </div>
        </div>
        <!-- -------------------------------------------------------------------- -->

        <div style="text-align:center ;">
            <h4>Fonction switch:</h4>
            <div>
                <form action="" method="get">
                    <div>
                        <label for="color">Background Color:</label>
                        <select name="color" id="color">
                            <option value="" selected>--- Choose a color ---</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <button type="submit">Select</button>
                    </div>
                </form>

                <?php
                $color = $_GET["color"];
                // echo $color;

                switch ($color) {
                    case "red":
                        echo "<div style='background-color:$color;margin:5px'>Vous avez choisis la couleur rouge</div>";
                        break;
                    case "blue":
                        echo "<div style='background-color:$color;margin:5px;color:white'>Vous avez choisis la couleur bleu</div>";
                        break;
                    case "green":
                        echo "<div style='background-color:$color;margin:5px';>Vous avez choisis la couleur green</div>";
                        break;
                    default:
                        echo "<div style='padding:5px;text-align:center'>Aucune couleur a été choisie</div>";
                }
                ?>


            </div>
        </div>

    </div>


    <!-- -------------------------------------------------------------------- -->
    <div class="box">
        <!-- -------------------------------------------------------------------- -->

        <div style="text-align:center ;">
            <h4>Fonction While:</h4>
            <div>

                <?php
                if (!empty($_POST['envoyer'])) {
                    $x = 1;
                    while ($x <= 5) {
                        echo "The number is: $x <br>";
                        $x++;
                    }
                }
                ?>
            </div>
        </div>
        <!-- -------------------------------------------------------------------- -->

        <div style="text-align:center ;">
            <h4>Fonction Do while</h4>
            <div>
                <?php

                if (!empty($_POST['envoyer'])) {
                    $y = 6;

                    do {
                        echo "The number is: $y <br>";
                        $y--;
                    } while ($y > 1);
                }
                ?>
            </div>
        </div>

        <div style="text-align:center ;">
            <h4>Fonction For</h4>
            <div>
                <?php
                if (!empty($_POST['envoyer'])) {
                    for ($x = 0; $x <= 5; $x += 1) {
                        echo "The number is: $x <br>";
                    };
                }
                ?>
            </div>
        </div>

        <div style="text-align:center ;">
            <h4>Fonction ForEach</h4>
            <div>
                <?php
                if (!empty($_POST['envoyer'])) {
                    $colors = array("red", "green", "blue", "yellow");
                    echo "Il y a " . count($colors) . " couleurs dans ce tableau: <br>";

                    foreach ($colors as $value) {
                        echo "$value <br>";
                    }
                }
                ?>
            </div>
        </div>

        <div style="text-align:center ;">
            <h4>Fonction Brake/continue</h4>
            <div>
                <?php
                if (!empty($_POST['envoyer'])) {
                    for ($x = 0; $x < 6; $x++) {
                        if ($x == 4) {
                            echo "Le numéro 4 a été exclu<br>";
                            continue;
                        }
                        echo "The number is: $x <br>";
                    }
                }
                ?>
            </div>
        </div>

    </div>

    <form style="display:flex;justify-content:center;margin-top:20px" action="" method="post">
        <input type="submit" id="envoyer" name="envoyer" value="envoyer">
    </form>


    <div class="box">
        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Fonction avec retour de valeur et variable typée PHP</h4>
            <form action="" method="get">
                Nombre 1: <input type="number" required name="num1" size="2"><br>
                Nombre 2: <input type="number" required name="num2" size="2"><br>
                <input type="submit" value="Calculer">
            </form>

            <?php
            $num1 =  (int) $_GET["num1"];
            $num2 =  (int) $_GET["num2"];
            echo "$num1 + $num2 = " . sum($num1, $num2) . "<br>";
            ?>

        </div>



        <div>
            <h4>Fonction avec retour de valeur (Type Declaration) et gab de 5 de la valeur</h4>
            <form action="" method="get">
                text1: <input type="text" required name="text1" size="2"><br>
                Gab: <input type="number" required name="gab1" size="1"><br>
                <input type="submit" value="Calculer">
            </form>

            <?php
            $text1 =  (float) $_GET["text1"];
            $gab1 =  (int) $_GET["gab1"];

            echo "Le resultat de l'opération est :" . addNumbersFloat($text1, $gab1) . "<br>";
            echo "Le resultat de l'opération sans la virgule est :" . addNumbers($text1, $gab1) . "<br>";
            ?>

        </div>
    </div>


    <div class="box">
        <div>
            <!-- -------------------------------------------------------------------- -->
            <h4>Multidimension dans un tableau </h4>
            <?php

            echo "voici le tableau voiture:";
            echo "array('Volvo', 22, 18),<br>
                array('BMW', 15, 13),<br>
                array('Saab', 5, 2),<br>
                array('Land Rover', 17, 15)<br>";

            $cars = array(
                array("Volvo", 22, 18),
                array("BMW", 15, 13),
                array("Saab", 5, 2),
                array("Land Rover", 17, 15)
            );

            if (!empty($_POST['envoyer2'])) {

                // echo "<div style='display:flex;justify-content:space-between;'>";
                for ($row = 0; $row < 4; $row++) {
                    echo "<p style='margin:0;padding:0'><b>Row number $row</b></p>";
                    echo "<ul style='margin:0;padding:0'>";
                    for ($col = 0; $col < 3; $col++) {
                        echo "<li style='margin:0;padding:0'>" . $cars[$row][$col] . "</li>";
                    }
                    echo "</ul>";
                }
                // echo "<div style='padding:5px;text-align:center'>";
            }
            ?>

            <div>
                <form style="display:flex;justify-content:center;margin-top:20px" action="" method="post">
                    <input type="submit" id="envoyer" name="envoyer2" value="envoyer">
                </form>
            </div>
        </div>


        <div style="text-align:center ;">
            <h4>Fonction tri array:</h4>
            <div>
                <form action="" method="get">
                    <div>
                        <label for="sort">Background Color:</label>
                        <select name="sort" id="sort">
                            <option value="" selected>--- Choisir le tri---</option>
                            <option value="1">sort()- trier les tableaux par ordre croissant</option>
                            <option value="2">rsort()- trier les tableaux par ordre décroissant</option>
                            <option value="3">asort()- trier les tableaux associatifs par ordre croissant, selon la valeur</option>
                            <option value="4">ksort()- trier les tableaux associatifs par ordre croissant, selon la clé</option>
                            <option value="5">arsort()- trier les tableaux associatifs par ordre décroissant, selon la valeur</option>
                            <option value="6">krsort()- trier les tableaux associatifs par ordre décroissant, selon la clé </option>

                        </select>
                    </div>
                    <br>
                    <div>
                        <button type="submit">Select</button>
                    </div>
                </form>

                <?php
                $sort = $_GET["sort"];
                $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
                $cars = array("Volvo", "BMW", "Toyota");
                $cars = array("Volvo", "BMW", "Toyota");

                switch ($sort) {
                    case "1":
                        echo "sort()- trier les tableaux par ordre croissant<br><br>";
                        sort($cars);
                        sorttableSimple($cars);
                        break;
                    case "2":
                        echo "rsort()- trier les tableaux par ordre décroissant<br><br>";
                        rsort($cars);
                        sorttableSimple($cars);
                        break;
                    case "3":
                        echo "asort()- trier les tableaux associatifs par ordre croissant, selon la valeur<br><br>";
                        asort($age);
                        sorttable($age);
                        break;
                    case "4":
                        echo "ksort()- trier les tableaux associatifs par ordre croissant, selon la clé<br><br>";
                        ksort($age);
                        sorttable($age);
                        break;
                    case "5":
                        echo "arsort()- trier les tableaux associatifs par ordre décroissant, selon la valeur<br><br>";
                        arsort($age);
                        sorttable($age);
                        break;
                    case "6":
                        echo "krsort()- trier les tableaux associatifs par ordre décroissant, selon la clé<br><br>";
                        krsort($age);
                        sorttable($age);
                        break;
                }
                ?>
            </div>
        </div>

    </div>

    <div style="text-align:center;margin-top:30px">
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>">Relancer le formulaire et effacer les données </a>
    </div>

    <?php include '../components/footer.php'; ?>

</body>

</html>

<script>
    const message = document.getElementById("time")
    inputFormTime = document.getElementById("inputFormTime");

    // inputTime.addEventListener('change', (event) => {
    //     message.innerText = "";

    // });

    inputFormTime.addEventListener('focusin', (event) => {
        message.innerText = ""

    });
</script>