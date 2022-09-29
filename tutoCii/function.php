<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet">
    <title>Feuille de calcul</title>
</head>

<body>

    <?php
    function myTest()
    {
        echo "<div class='array'>";
        print_r(cars);
        echo "</div>";
        echo "<li>" . "Voici la valeur aléàtoire choisie dans ce tableau est: <span class='colorTextResult'>" . cars[rand(0, sizeof(cars) - 1)] . "</span></li>";
    }

    function myOperation($a, $b)
    {
        $a1 = $a;
        $a2 = $a;
        $b1 = $b;
        echo "<div class='box'>";

        echo "<div>";
        echo "<p>Opérations arithmétiques PHP</p>";
        $y = $a + $b;
        echo "<li>" . "le resultat de l'opération ' $a+$b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
        $y = $a - $b;
        echo "<li>" . "le resultat de l'opération ' $a-$b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
        $y = $a * $b;
        echo "<li>" . "le resultat de l'opération ' $a*$b ' est: <span class='colorTextResult'>" . $y . "</span></li>";

        if (trim($b) <> 0) {
            echo "test fonction if";
            $y = $a / $b;
            echo "<li>" . "le resultat de l'opération ' $a/$b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
            $y = $a % $b;
            echo "<li>" . "le resultat de l'opération modulo ' $a%$b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
            $y = $a ** $b;
            echo "<li>" . "le resultat de l'opération exponentielle ' $a ** $b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
        }

        echo "</div>";
        echo "<div>";
        echo "<p>Opérations d'affectation PHP</p>";
        $a1 += $b1;
        echo "<li>" . "le resultat de l'opération ' a+=b ' est: <span class='colorTextResult'>" . $a1 . "</span></li>";
        $a1 -= $b1;
        echo "<li>" . "le resultat de l'opération ' a-=b ' est: <span class='colorTextResult'>" . $a1 - $b1 . "</span></li>";
        $a1 *= $b1;
        echo "<li>" . "le resultat de l'opération ' a*= b ' est: <span class='colorTextResult'>" . $a1 . "</span></li>";

        if (trim($b) <> 0) {
            $a1 /= $b1;
            echo "<li>" . "le resultat de l'opération modulo ' a/=b ' est: <span class='colorTextResult'>" . $a1 / $b1 . "</span></li>";
            $a2 %= $b1;
            echo "<li>" . "le resultat de l'opération exponentielle 'a %=b' est: <span class='colorTextResult'>" . $a2 . "</span></li>";
        }
        $y = $b1;
        echo "<li>" . "le resultat de l'opération ' a=b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
        echo "</div>";
        echo "</div>";
    }

    function myCompare($a, $b)
    {
        $a1 = trim($a);
        $b1 = intval($b);
        echo "<div class='box'>";

        echo "<div>";
        echo "<p>Opérateurs de comparaison PHP</p>";

        echo "<li>" . "Est ce que ' a==b ': ";
        echo "<span class='colorTextResult'>";
        echo var_dump($a == $b);
        echo "</span></li>";

        echo "<li>" . "Est ce que ' a==b ' sans comparer pas le type: ";
        echo "<span class='colorTextResult'>";
        var_dump($a1);
        var_dump($b1);
        echo "=>";
        echo var_dump($a1 == $b1);
        echo "</span></li>";

        echo "<li>" . "Est ce que ' a===b 'en comparant pas le type:  ";
        echo "<span class='colorTextResult'>";
        var_dump($a1);
        var_dump($b1);
        echo "=>";
        echo var_dump($a1 === $b1);
        echo "</span></li>";

        echo "<li>" . "Est ce que ' a!=b 'en comparant pas le type:  ";
        echo "<span class='colorTextResult'>";
        echo "=>";
        echo var_dump($a != $b);
        echo "</span></li>";

        echo "<li>" . "Est ce que ' a<>b 'en comparant pas le type:  ";
        echo "<span class='colorTextResult'>";
        echo "=>";
        echo var_dump($a <> $b);
        echo "</span></li>";

        echo "<li>" . "Est ce que ' a!=b 'en comparant pas le type:  ";
        echo "<span class='colorTextResult'>";
        var_dump($a1);
        var_dump($b1);
        echo "=>";
        echo var_dump($a1 != $b1);
        echo "</span></li>";

        echo "<li>" . "Est ce que ' a!==b 'en comparant aussi le type:  ";
        echo "<span class='colorTextResult'>";
        var_dump($a1);
        var_dump($b1);
        echo "=>";
        echo var_dump($a1 !== $b1);
        echo "</span></li>";

        echo "<li>" . "Est ce que ' a>b ': ";
        echo "<span class='colorTextResult'>";
        echo var_dump($a > $b);
        echo "</span></li>";

        echo "<li>" . "Est ce que ' a>=b ': ";
        echo "<span class='colorTextResult'>";
        echo var_dump($a >= $b);
        echo "</span></li>";

        echo "<li>" . "Est ce que 'a inf b' :";
        echo "<span class='colorTextResult'>";
        echo var_dump($a < $b);
        echo "</span></li>";

        echo "<li>" . "Est ce que ' a<=b ': ";
        echo "<span class='colorTextResult'>";
        echo var_dump($a <= $b);
        echo "</span></li>";

        echo "<li>" . "Est ce que ' a<=>b ' introduit en PHP7 : ";
        echo "<span class='colorTextResult'>";
        echo var_dump($a <=> $b);
        echo "</span></li>";

        echo "</div>";

        echo "<div>";
        echo "<p>Opérateurs d'incrémentation/décrémentation PHP</p>";
        echo "<li>" . "Pre-incrementation de a +1 est: <span class='colorTextResult'>" . ++$a . "</span></li>";
        echo "<li>" . "Post-incrementation de b +1 est: <span class='colorTextResult'>" . $b++ . "</span></li>";
        echo "<li>" . "Post-incrementation de b +1 est: <span class='colorTextResult'>" . $b++ . "</span></li>";
        echo "<li>" . "Derniere valeur de b : <span class='colorTextResult'>" . $b . "</span></li>";
        echo "<li>" . "Pre-incrementation de a -1 est: <span class='colorTextResult'>" . --$a . "</span></li>";
        echo "<li>" . "Post-incrementation de b -1 est: <span class='colorTextResult'>" . $b-- . "</span></li>";
        echo "<li>" . "Post-incrementation de b -1 est: <span class='colorTextResult'>" . $b-- . "</span></li>";
        echo "<li>" . "Derniere valeur de b : <span class='colorTextResult'>" . $b . "</span></li>";
        echo "</div>";
    }

    function myOperationLoqique($check1, $check2, $checkbox1Text, $checkbox2Text, $checkboxes)
    {

        $checkboxes1  = array();
        $checkbox2 = array("titi", "tata", "toto", "tutu", "tyty");
        $checkboxes2  = array();

        foreach ($checkbox2 as $index => $checkbox2) {
            // echo $checkbox2;
            array_push($checkboxes2, $checkbox2);
        }


        foreach ($checkboxes as $index => $checkbox1) {
            // echo $checkbox1;
            array_push($checkboxes1, $checkbox1);
        }


        $x = $check1;
        $y = $check2;

        echo "<div class='box'>";
        echo "<div>";
        echo "<p>Opérateurs logiques PHP</p>";

        echo "<li>" . "Table de vérité sur ($x and $y): ";
        echo "<span class='colorTextResult'>";
        echo var_dump($x and $y);
        echo "</span></li>";

        echo "<li>" . "Table de vérité sur ($x && $y): ";
        echo "<span class='colorTextResult'>";
        echo var_dump($x && $y);
        echo "</span></li>";

        echo "<li>" . "Table de vérité sur ($x or $y): ";
        echo "<span class='colorTextResult'>";
        echo var_dump($x or $y);
        echo "</span></li>";

        echo "<li>" . "Table de vérité sur ($x || $y): ";
        echo "<span class='colorTextResult'>";
        echo var_dump($x || $y);
        echo "</span></li>";

        echo "<li>" . "Table de vérité sur ($x xor $y): ";
        echo "<span class='colorTextResult'>";
        echo var_dump($x xor $y);
        echo "</span></li>";

        echo "<li>" . "Table de vérité sur (!$x): ";
        echo "<span class='colorTextResult'>";
        echo var_dump(!$x);
        echo "</span></li>";

        echo "<li>" . "Table de vérité sur (!$y): ";
        echo "<span class='colorTextResult'>";
        echo var_dump(!$y);
        echo "</span></li>";

        echo "</div>";

        echo "<div>";
        echo "<p>Opérateurs de chaîne PHP</p>";

        echo "<li>" . "Concatenation du texte de la checkbox1 et 2: ";
        echo "<span class='colorTextResult'>";
        echo $checkbox1Text . " et " . $checkbox2Text;
        echo "</span></li>";

        echo "<li>" . "Concatenation assignment du texte de la checkbox1 et 2: ";
        echo "<span class='colorTextResult'>";
        echo $checkbox1Text .= $checkbox2Text;
        echo "</span></li>";

        echo "<p> Opérateurs de tableau PHP</p>";
        echo "<p> Tableau pour comparaison</p>";
        print_r($checkboxes2);
        echo "<p></p>";

        echo "<li>" . "Union of  array: ";
        echo "<span class='colorTextResult'>";
        print_r($checkboxes1 + $checkboxes2);
        echo "</span></li>";

        echo "<li>" . " ";
        echo "<span class='colorTextResult'>";
        echo var_dump($checkboxes1 == $checkboxes1);
        echo "</span></li>";

        echo "<li>" . " ";
        echo "<span class='colorTextResult'>";
        echo var_dump($checkboxes1 == $checkboxes2);
        echo "</span></li>";

        echo "<li>" . "";
        echo "<span class='colorTextResult'>";
        echo var_dump($x xor $y);
        echo "</span></li>";

        echo "<li>" . " ";
        echo "<span class='colorTextResult'>";
        echo var_dump(!$x);
        echo "</span></li>";

        echo "<li>" . " ";
        echo "<span class='colorTextResult'>";
        echo var_dump(!$y);
        echo "</span></li>";

        echo "</div>";


        echo "<div>";
    }


    ?>


</body>

</html>