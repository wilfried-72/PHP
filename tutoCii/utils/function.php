<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/index.css" rel="stylesheet">
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

    function myOperation(int $a = 1, int $b = 1)
    {
        $a1 = $a;
        $a2 = $a;
        $b1 = $b;
        echo "<div class='box'>";

        echo "<div>";
        echo "<h5>Opérations arithmétiques PHP</h5>";
        $y = $a + $b;
        echo "<li>" . "le resultat de l'opération ' $a+$b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
        $y = $a - $b;
        echo "<li>" . "le resultat de l'opération ' $a-$b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
        $y = $a * $b;
        echo "<li>" . "le resultat de l'opération ' $a*$b ' est: <span class='colorTextResult'>" . $y . "</span></li>";

        if (trim($b) <> 0) {
            $y = $a / $b;
            echo "<li>" . "le resultat de l'opération ' $a/$b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
            $y = $a % $b;
            echo "<li>" . "le resultat de l'opération modulo ' $a%$b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
            $y = $a ** $b;
            echo "<li>" . "le resultat de l'opération exponentielle ' $a ** $b ' est: <span class='colorTextResult'>" . $y . "</span></li>";
        }

        echo "</div>";
        echo "<div>";
        echo "<h5>Opérations d'affectation PHP</h5>";
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
        echo "<h5>Opérateurs de comparaison PHP</h5>";

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
        echo "<h5>Opérateurs d'incrémentation/décrémentation PHP</h5>";
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
        echo "<h5>Opérateurs logiques PHP</h5>";

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
        echo "<h5>Opérateurs de chaîne PHP</h5>";

        echo "<li>" . "Concatenation du texte de la checkbox1 et 2: ";
        echo "<span class='colorTextResult'>";
        echo $checkbox1Text . " et " . $checkbox2Text;
        echo "</span></li>";

        echo "<li>" . "Concatenation assignment du texte de la checkbox1 et 2: ";
        echo "<span class='colorTextResult'>";
        echo $checkbox1Text .= $checkbox2Text;
        echo "</span></li>";

        echo "<h5> Opérateurs de tableau PHP</h5>";
        echo "<p> Tableau pour comparaison</p>";
        print_r($checkboxes2);
        echo "<h5></h5>";

        echo "<li>" . "Union of  array: ";
        echo "<span class='colorTextResult'>";
        print_r($checkboxes1 + $checkboxes2);
        echo "</span></li>";

        echo "<li>" . "Test de comparaison (x == y) avec le même tableau 'qui a été généré': ";
        echo "<span class='colorTextResult'>";
        echo var_dump($checkboxes1 == $checkboxes1);
        echo "</span></li>";

        echo "<li>" . "Test de comparaison (x == y) avec le tableau 'qui a été généré' et celui en comparaison: ";
        echo "<span class='colorTextResult'>";
        echo var_dump($checkboxes1 == $checkboxes2);
        echo "</span></li>";

        echo "<li>" . "Test de comparaison (x === y) avec le même tableau 'qui a été généré': ";
        echo "<span class='colorTextResult'>";
        echo var_dump($checkboxes1 === $checkboxes1);
        echo "</span></li>";

        echo "<li>" . "Test de comparaison (x === y) avec le tableau 'qui a été généré' et celui en comparaison: ";
        echo "<span class='colorTextResult'>";
        echo var_dump($checkboxes1 === $checkboxes2);
        echo "</span></li>";

        echo "<li>" . "est de comparaison (x != y) avec le même tableau 'qui a été généré': ";
        echo "<span class='colorTextResult'>";
        echo var_dump($checkboxes1 != $checkboxes1);
        echo "</span></li>";

        echo "<li>" . "est de comparaison (x <> y) avec le tableau 'qui a été généré' et celui en comparaison: ";
        echo "<span class='colorTextResult'>";
        echo var_dump($checkboxes1 <> $checkboxes2);
        echo "</span></li>";

        echo "<li>" . "est de comparaison (x !==y) avec le même tableau 'qui a été généré': ";
        echo "<span class='colorTextResult'>";
        echo var_dump($checkboxes1 !== $checkboxes1);
        echo "</span></li>";

        echo "<li>" . "est de comparaison (x !== y) avec le tableau 'qui a été généré' et celui en comparaison: ";
        echo "<span class='colorTextResult'>";
        echo var_dump($checkboxes1 !== $checkboxes2);
        echo "</span></li>";

        echo "<h5> Opérateurs d'affectation conditionnelle PHP</h5>";
        echo "<li>" . " Condition ternaire entre le même tableau 'qui a été généré': ";
        $checkboxes1 === $checkboxes1 ? $result = "les deux tableaux sont identique" : $result = "les deux tableaux ne sont identiques";
        echo "<span class='colorTextResult'>";
        echo $result;
        echo "</span></li>";

        echo "<li>" . " Condition ternaire entre le tableau 'qui a été généré' et celui en comparaison: ";
        $checkboxes1 === $checkboxes2 ? $result = "les deux tableaux sont identique" : $result = "les deux tableaux ne sont identiques";
        echo "<span class='colorTextResult'>";
        echo $result;
        echo "</span></li>";

        echo "<li>" . " Fusion nulle sur PHP7'qui a été généré' et celui en comparaison: ";
        $toto = $checkboxes1 ?? $checkboxes2 ? $result = "les deux tableaux sont identique" : $result = "les deux tableaux ne sont identiques";
        echo "<span class='colorTextResult'>";
        echo $toto;
        echo "</span></li>";
        echo "</div>";
        echo "</div>";
    }

    function sum(int $x, int $y)
    {
        $z = $x + $y;
        return $z;
    }

    function sorttable($value)
    {

        echo "voici le tableau de personne avec leurs ages: <br>";
        echo "Peter =>35<br>", "Ben=>37<br>", "Joe=>43<br><br>";

        foreach ($value as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    };

    function sorttableSimple($value)
    {
        echo "voici le tableau de marque de voiture: <br>";
        echo "Volvo, BMW ,Toyota <br><br>";

        $clength = count($value);
        for ($x = 0; $x < $clength; $x++) {
            echo $value[$x];
            echo "<br>";
        }
    };

    function addition()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    };

    function countLetters($matches)
    {
        return $matches[0] . '(' . strlen($matches[0]) . ')';
    };

    function countLettersArray($matches)
    {
        return $matches[0] . '[' . strlen($matches[0]) . 'letter]';
    };

    function countDigits($matches)
    {
        return $matches[0] . '[' . strlen($matches[0]) . 'digit]';
    };
    function test_input($data)
    {
        // retourne la chaine en string
        $data = trim($data);
        // Supprime les antislashs d'une chaîne. 
        $data = stripslashes($data);
        // Convertit certains caractères prédéfinis en entités HTML.
        $data = htmlspecialchars($data);
        return $data;
    };


    ?>


</body>

</html>