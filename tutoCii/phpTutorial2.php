<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- import css bootstrap  -->
    <link href="css/index.css" rel="stylesheet">
</head>

<body>

    <!-- -------------------------------------------------------------------- -->
    <?php
    // apelle de la navBar
    require 'nav.php';
    // appelle des fonctions
    require 'function.php';
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
                //faire un if si gettime ?
                $t = strtotime($_GET["time1"]);
                // echo $t;

                if ($t > 1664427600 and $t < 1664431200) {
                    echo "<div id='time'>Attention c'est bientôt 8h!</div>";
                } elseif ($t >= 1664431200 and $t <= 1664447400) {
                    echo "<div id='time'>c'est le matin, tu dois être en train de bosser</div>";
                } elseif ($t > 1664447400 and $t <= 1664452800) {
                    echo "<div id='time'>c'est la pause déjeuner</div>";
                } elseif ($t > 1664452800 and $t <= 1664465400) {
                    if ($t >= 1664452800  and $t <= 1664461800) echo "<div id='time'>c'est l'après midi', tu dois être en train de bosser</div>";
                    else echo "<div id='time'>Si c'est vendredi, tu peux aller en week-end sinon encore un petit effort!!!</div>";
                } elseif ($t > 1664452800 and $t <= 1664465400) {
                    if ($t >= 1664452800  and $t <= 1664461800) echo "<div id='time'>c'est l'après midi', tu dois être en train de bosser</div>";
                    else echo "<div id='time'>Si c'est vendredi, tu peux aller en week-end sinon encore un petit effort!!!</div>";
                } else {
                    echo "<div id='time'>Tu fai ce que tu veux entre 17h30 et 7h00</div>";
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
                            <option value="">--- Choose a color ---</option>
                            <option value="red">Red</option>
                            <option value="green" selected>Green</option>
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
                echo $color;

                // if ($t > 1664427600 and $t < 1664431200) {
                //     echo "<div id='time'>Attention c'est bientôt 8h!</div>";
                // } elseif ($t >= 1664431200 and $t <= 1664447400) {
                //     echo "<div id='time'>c'est le matin, tu dois être en train de bosser</div>";
                // } elseif ($t > 1664447400 and $t <= 1664452800) {
                //     echo "<div id='time'>c'est la pause déjeuner</div>";
                // } elseif ($t > 1664452800 and $t <= 1664465400) {
                //     if ($t >= 1664452800  and $t <= 1664461800) echo "<div id='time'>c'est l'après midi', tu dois être en train de bosser</div>";
                //     else echo "<div id='time'>Si c'est vendredi, tu peux aller en week-end sinon encore un petit effort!!!</div>";
                // } elseif ($t > 1664452800 and $t <= 1664465400) {
                //     if ($t >= 1664452800  and $t <= 1664461800) echo "<div id='time'>c'est l'après midi', tu dois être en train de bosser</div>";
                //     else echo "<div id='time'>Si c'est vendredi, tu peux aller en week-end sinon encore un petit effort!!!</div>";
                // } else {
                //     echo "<div id='time'>Tu fai ce que tu veux entre 17h30 et 7h00</div>";
                // }
                ?>


            </div>
        </div>

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