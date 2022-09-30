<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprendre PHP</title>
    <link href="assets/css/index.css" rel="stylesheet">
</head>

<body>

     <!-- -------------------------------------------------------------------- -->
     <?php
    // apelle de la navBar
    require 'components/nav.php';
    ?>

    <h1> Mon premier tuto PHP chez CII TELECOM</h1>

    <?php
    //Mise en commentaire par block
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters";
    ?>
</body>

</html>