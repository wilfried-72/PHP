<!-- 
    Page Create
-->
<?php
// import du fichier database.php et global variable env.php
include '../../back/src/databases/database.php';
include '../../env.php';

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
    // On check notre name
    if (empty($name)) {
        // variable de l'err
        $nameError = 'Please enter Name';
        // si il n'y a pas de name alors
        $valid = false;
    }

    if (empty($email)) {
        // variable de l'err
        $emailError = 'Please enter Email Address';
        // si il n'y a pas d'email alors
        $valid = false;
        // Ici on check si l'email respect bien le format e@mail.com
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // variable de l'err
        $emailError = 'Please enter a valid Email Address';
        // si il n'y a pas d'email alors
        $valid = false;
    }

    if (empty($mobile)) {
        // variable de l'err
        $mobileError = 'Please enter Mobile Number';
        // si il n'y a pas de mobile alors
        $valid = false;
    }

    // Si tout est valid alors
    if ($valid) {
        // insert data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO customers (name,email,mobile) values(?, ?, ?)";
        // echo "sql requete". $sql;
        $q = $pdo->prepare($sql);
        $q->execute(array($name, $email, $mobile));
        Database::disconnect();
        header("Location: ../../index.php");
    }
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
                <h3>Create a Customer</h3>
            </div>

            <!-- Notre formulaire envoie sur le script create.php -->
            <form class="form-horizontal" action="create.php" method="post">
                <!-- gestion de l'err no-data -->
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
                <!-- gestion de l'err no-data -->
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
                <!-- gestion de l'err no-data -->
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
                    <button type="submit" class="btn btn-success">Create</button>
                    <!-- redirect -->
                    <a class="btn" href="../../index.php">Back</a>
                </div>
            </form>
        </div>

    </div> <!-- /container -->
</body>

</html>