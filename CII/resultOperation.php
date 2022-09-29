<?php
// appelle des fonctions
require 'function.php';
?>

<div>Voici vos nombres saisis dans le formulaire:
    <div style="margin-top:10px">
        Le nombre 1 (a) est : <?php echo $_POST["number1"]; ?><br>
        Le nombre 2 (b) est : <?php echo $_POST["number2"]; ?><br>
    </div>
</div>

<?php
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
?>

<br>
<div style="border:solid;padding:5px;margin-bottom:5px">Voici le résulat des opérations:
    <ul style="margin-top:10px">
        <?php
        myOperation($number1, $number2);;
        ?>
    </ul>
</div>

<div style="border:solid;padding:5px;margin-bottom:5px">Voici le résulat des comparaisons:
    <ul style="margin-top:10px">
        <?php
        myCompare($number1, $number2);
        ?>
    </ul>
</div>


<div style="text-align:center">
    <a href="phpTutorial.php">return </a>
</div>
