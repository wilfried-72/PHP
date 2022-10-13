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

    <h2 style="text-decoration:underline;text-align:center">PHP Date and Time</h2>
    <!-- -------------------------------------------------------------------- -->

    <div style="border-style: solid; padding:5px;margin-bottom:10px;">
        <div style="text-align:center;margin-top:0px">
            <p>Syntax: date(format,timestamp)</p>

            <div class="box">

                <div style="text-align:center;">
                    <h4>Format date:</h4>
                    <div>
                        <?php
                        echo "Nous somme le: " . date("d/m/Y") . "<br>";
                        echo "Nous somme le: " . date("d.m.Y") . "<br>";
                        echo "Nous somme le: " . date("d-m-Y") . "<br>";
                        echo "Nous somme le: " . date("l") . " " . date("d-m-Y") . "<br>";
                        ?>
                    </div>
                </div>

                <div style="text-align:center;">
                    <h4>Date fuseau horaire:</h4>
                    <div>
                        <form action="" method="get">
                            <div>
                                <?php
                                $timezone_identifiers =
                                    DateTimeZone::listIdentifiers(DateTimeZone::ALL);

                                echo "<label for='dateFuse'></label>";
                                echo "<select name='dateFuse' id='dateFuse'>";
                                echo "<option disabled selected>Choisir son fuseau horaire</option>";
                                $n = 425;
                                for ($i = 0; $i < $n; $i++) {

                                    // Print the timezone identifiers
                                    echo "<option value='" . $timezone_identifiers[$i] .
                                        "'>" . $timezone_identifiers[$i] . "</option>";
                                }

                                echo "</select>";
                                ?>
                            </div>
                            <br>
                            <div>
                                <button type="submit">Select</button>
                            </div>
                        </form>

                        <?php
                        date_default_timezone_set($_GET['dateFuse']);
                        echo "Il est " . date("h:i:sa") . " à " . $_GET['dateFuse'];
                        ?>
                    </div>
                </div>

                <div style="text-align:center;">
                    <h4>Format date avec fonction strtotime() :</h4>
                    <div>
                        <?php
                        $d = strtotime("tomorrow");
                        echo "tomorrow => " . date("Y-m-d h:i:sa", $d) . "<br>";

                        $d = strtotime("next Saturday");
                        echo "next Saturday=> " . date("Y-m-d h:i:sa", $d) . "<br>";

                        $d = strtotime("+3 Months");
                        echo "+3 Months=> " . date("Y-m-d h:i:sa", $d) . "<br>";
                        ?>
                    </div>
                </div>


                <div style="text-align:center;">
                    <h4>L'exemple ci-dessous affiche les dates des six prochains samedis :</h4>
                    <div>
                        <?php
                        $startdate = strtotime("Saturday");
                        $enddate = strtotime("+6 weeks", $startdate);

                        while ($startdate < $enddate) {
                            echo date("M d", $startdate) . "<br>";
                            $startdate = strtotime("+1 week", $startdate);
                        }
                        ?>
                    </div>
                </div>

                <div style="text-align:center;">
                    <h4>L'exemple ci-dessous affiche le nombre de jours jusqu'au 4 juillet : :</h4>
                    <div>
                        <?php
                        $jour = "December 25";
                        $d1 = strtotime($jour);
                        $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
                        echo "Il y a " . $d2 . " jours jusqu'à $jour";
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>

</body>

</html>