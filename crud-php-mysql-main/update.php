<!-- 
    Page Update ID
-->
<?php
// import du fichier database.php
require 'database.php';
// on définit par default notre id en null
$id = null;

// on check si on récupère l'id dans notre method get
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

// si il n'y a pas d'id
if (null == $id) {
    // on redirige sur la page index.php
    header("Location: index.php");
}

// Si il y a une method post
if (!empty($_POST)) {
    // On définit nos variables à envoyer
    $nameError = null;
    $emailError = null;
    $mobileError = null;

    // On définit la valeur de nos variable au résultat de la method post
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // On check nos variable input:
    $valid = true;
    if (empty($name)) {
        $nameError = 'Please enter Name';
        $valid = false;
    }

    if (empty($email)) {
        $emailError = 'Please enter Email Address';
        $valid = false;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Please enter a valid Email Address';
        $valid = false;
    }

    if (empty($mobile)) {
        $mobileError = 'Please enter Mobile Number';
        $valid = false;
    }

    // Si tout est valid alors
    if ($valid) {
        // update data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE customers  set name = ?, email = ?, mobile =? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($name, $email, $mobile, $id));
        Database::disconnect();
        header("Location: index.php");
    }
// Sinon on récupère les datas pour les afficher sur la page
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM customers where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $name = $data['name'];
    $email = $data['email'];
    $mobile = $data['mobile'];
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
                <h3>Update a Customer</h3>
            </div>

            <!-- Notre formulaire d'édition -->
            <form class="form-horizontal" action="update.php?id=<?php echo $id ?>" method="post">
                <div class="control-group <?php echo !empty($nameError) ? 'error' : ''; ?>">
                    <label class="control-label">Name</label>
                    <div class="controls">
                        <!-- Input pour l'envoi sur la méthod post -->
                        <input name="name" type="text" placeholder="Name" value="<?php echo !empty($name) ? $name : ''; ?>">
                        <!-- gestion de l'err no-data -->
                        <?php if (!empty($nameError)) : ?>
                            <span class="help-inline"><?php echo $nameError; ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="control-group <?php echo !empty($emailError) ? 'error' : ''; ?>">
                    <label class="control-label">Email Address</label>
                    <div class="controls">
                        <!-- Input pour l'envoi sur la méthod post -->
                        <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email) ? $email : ''; ?>">
                        <!-- gestion de l'err no-data -->
                        <?php if (!empty($emailError)) : ?>
                            <span class="help-inline"><?php echo $emailError; ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="control-group <?php echo !empty($mobileError) ? 'error' : ''; ?>">
                    <label class="control-label">Mobile Number</label>
                    <div class="controls">
                        <!-- Input pour l'envoi sur la méthod post -->
                        <input name="mobile" type="text" placeholder="Mobile Number" value="<?php echo !empty($mobile) ? $mobile : ''; ?>">
                        <!-- gestion de l'err no-data -->
                        <?php if (!empty($mobileError)) : ?>
                            <span class="help-inline"><?php echo $mobileError; ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-actions">
                    <!-- Submit -->
                    <button type="submit" class="btn btn-success">Update</button>
                    <!-- redirect -->
                    <a class="btn" href="index.php">Back</a>
                </div>
            </form>
        </div>

    </div> <!-- /container -->
</body>

</html>