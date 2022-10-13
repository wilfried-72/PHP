<?php
// appelle des fonctions
require '../utils/function.php';
?>

<?php
if (!empty($_POST['number1'])) $number1 = $_POST["number1"];
else $number1 = "1 par défaut";
if (!empty($_POST['number2'])) $number2 = $_POST["number2"];
else $number2 = "1 par défaut";
?>

<div>Voici vos nombres saisis dans le formulaire:
    <div style="margin-top:10px">
        Le nombre 1 (a) est : <?php echo $number1; ?><br>
        Le nombre 2 (b) est : <?php echo $number2; ?><br>
    </div>
</div>

<br>
<div style="border:solid;padding:5px;margin-bottom:5px">Voici le résulat des opérations:
    <ul style="margin-top:10px">
        <?php
        if (!empty($_POST['number1']) && !empty($_POST['number2'])) myOperation($number1, $number2);
        elseif (!empty($_POST['number1'])) myOperation($number1,1);
        elseif (!empty($_POST['number2'])) myOperation(1,$number2);
        else myOperation();
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
    <a href="../pages/phpTutorial.php">return </a>
</div>