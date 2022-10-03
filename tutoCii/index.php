<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprendre PHP</title>
    <!-- import css -->
    <link href="assets/css/index.css" rel="stylesheet">
</head>

<body>

    <!-- -------------------------------------------------------------------- -->
    <?php
    // apelle de la navBar
    // À utiliser require lorsque le fichier est requis par l'application.
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


    <!-- lorsqu'un fichier est inclus dans l' include instruction et que PHP ne le trouve pas, le script continue à s'exécuter : -->
    <!-- À utiliser include lorsque le fichier n'est pas requis et que l'application doit continuer lorsque le fichier n'est pas trouvé. -->


    <?php
    echo " <br><br>----------------------- Test Include -------------------";
    include './components/footer.php';
    echo " je recupère la variable <span style='color:red'><b>'$dataFooter'</b></span> avec include dans fichier existant <br>";
    include './components/noFileExists.php';
    echo " je recupère la variable <span style='color:red'><b>'$dataFooterNoExist'</b></span> avec include dans fichier inexistant <br>";

    echo " <br>----------------------- Test Require -------------------";
    require './components/footer.php';
    echo " je recupère la variable <span style='color:red'><b>'$dataFooter'</b></span> avec require dans fichier existant <br>";
    require './components/noFileExists.php';
    echo " je recupère la variable <span style='color:red'><b>'$dataFooterNoExist'</b></span> avec require dans fichier inexistant <br>";
    ?>
</body>

</html>