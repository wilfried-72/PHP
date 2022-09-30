<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- import css bootstrap  -->
    <link href="../assets/css/index.css" rel="stylesheet">
</head>

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
                        echo "<div>Aucune couleur a été choisie</div>";
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





    <?php
    function sum(int $x, int $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);
    ?>


    <div style="text-align:center;margin-top:30px">
        <a href="phpTutorial2.php">Relancer le formulaire </a>
    </div>

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