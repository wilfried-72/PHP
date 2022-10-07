<!-- 
    Page Get ID
-->
<?php
// import du fichier database.php
require 'database.php';
// on définit par default notre id en null
$id = null;

// on check si on récupère l'id dans notre method get
if (!empty($_GET['id'])) {
    // on instancie notre id avec l'id de la method get
    $id = $_REQUEST['id'];
}

// si il n'y a pas d'id
if (null == $id) {
    // on redirige sur la page index.php
    header("Location: index.php");
} else {
    // on definit pdo pour la connexion
    $pdo = Database::connect();
    // on check notre pdo en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // on définit notre script sql
    $sql = "SELECT * FROM customers where id = ?";
    // on définit l'execution de notre script par la connexion
    $q = $pdo->prepare($sql);
    // on execute notre query que l'on demande de rendre dans un tableau
    $q->execute(array($id));
    // on définit le résultat de notre nouvelle recherche
    $data = $q->fetch(PDO::FETCH_ASSOC);
    // on se déconnect de notre db
    Database::disconnect();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

        <div class="span10 offset1">
            <div class="row">
                <h3>Read a Customer</h3>
            </div>

            <div class="form-horizontal">
                <div class="control-group">
                    <label class="control-label">Name</label>
                    <div class="controls">
                        <label class="checkbox">
                            <!-- on appel la variable name de notre résultat -->
                            <?php echo $data['name']; ?>
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Email Address</label>
                    <div class="controls">
                        <label class="checkbox">
                            <!-- on appel la variable email de notre résultat -->
                            <?php echo $data['email']; ?>
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Mobile Number</label>
                    <div class="controls">
                        <label class="checkbox">
                            <!-- on appel la variable mobile de notre résultat -->
                            <?php echo $data['mobile']; ?>
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <!-- Boutton de retour à l'index.php -->
                    <a class="btn" href="index.php">Back</a>
                </div>

            </div>
        </div>

    </div> <!-- /container -->
</body>

</html>