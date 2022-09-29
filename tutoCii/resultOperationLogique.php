<?php
// appelle des fonctions
require 'function.php';
?>

<?php
// $checkbox1 = $_POST["checkbox1"];
// $checkbox2 = $_POST["checkbox2"];

if (empty($_POST["checkbox1"])) {
    // echo "Checkbox1 was unchecked.";
    $checkbox1 = 0;
} else {
    // echo "Checkbox1 was checked.";
    $checkbox1 = 1;
}

if (empty($_POST["checkbox2"])) {
    // echo "Checkbox2 was unchecked.";
    $checkbox2 = 0;
} else {
    // echo "Checkbox2 was checked.";
    $checkbox2 = 1;
}

if ("POST" === $_SERVER["REQUEST_METHOD"] && isset($_POST["checkboxes"])) {

    foreach ($_POST["checkboxes"] as $index => $checkbox) {

        // echo '$_POST["checkbox"][' . $index . '] = "' . $checkbox . '";';
    }
}
$checkboxes = $_POST["checkboxes"];
?>

<div>Voici vos nombres saisis dans le formulaire:
    <div style="margin-top:10px">
        La valeur de la checkbox1 est : <?php echo $checkbox1; ?><br>
        La valeur de la checkbox2 est : <?php echo $checkbox2; ?><br>
    </div>
    <div style="margin-top:10px">
        Le texte de la checkbox1 est : <?php echo $_POST["checkbox1Text"]; ?><br>
        Le texte de la checkbox2 est : <?php echo $_POST["checkbox2Text"]; ?><br>
    </div>
    <div style="margin-top:10px">
        Le tableau genéré est: <?php print_r($checkboxes); ?><br>
    </div>
</div>

<br>
<div style="border:solid;padding:5px;margin-bottom:5px">Voici le résulat des opérations:
    <ul style="margin-top:10px">
        <?php
        myOperationLoqique($checkbox1, $checkbox2, $_POST["checkbox1Text"], $_POST["checkbox2Text"], $checkboxes);
        ?>
    </ul>
</div>


<div style="text-align:center">
    <a href="phpTutorial.php">return </a>
</div>