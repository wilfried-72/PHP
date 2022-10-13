<!-- 
    Page Delete ID
-->
<?php
// import du fichier database.php et global variable env.php
include '../../back/src/databases/database.php';
include '../../env.php';

// on définit par default notre id en 0
$id = 0;

// on check si on récupère l'id dans notre method get
if (!empty($_GET['id'])) {
    // on instancie notre id avec l'id de la method get
    $id = $_REQUEST['id'];
}

if (!empty($_POST)) {
    // on récupère l'id de notre method post
    $id = $_POST['id'];

    // et on supprime nos data
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM customers  WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Database::disconnect();
    // et on redirige sur la page index
    header("Location: ../../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/css/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

        <div class="span10 offset1">
            <div class="row">
                <h3>Delete a Customer</h3>
            </div>
            <!-- On demande au formulaire d'executer le script si il est envoyer -->
            <form class="form-horizontal" action="delete.php" method="post">
                <!-- On définit l'id de notre method post -->
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <p class="alert alert-error">Are you sure to delete ?</p>
                <div class="form-actions">
                    <!-- Submit -->
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <!-- Redirection page index -->
                    <a class="btn" href="../../index.php">No</a>
                </div>
            </form>
        </div>

    </div> <!-- /container -->
</body>

</html>