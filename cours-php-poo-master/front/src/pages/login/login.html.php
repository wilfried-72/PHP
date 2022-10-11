<?php

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


    if (!empty($_POST["password"]) && isset($_POST['password'])) {

        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];


        if (mb_strlen($_POST["password"]) <= 8) {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
            $valid = false;
        } elseif (!preg_match("#[0-9]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        } elseif (!preg_match("#[A-Z]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        } elseif (!preg_match("#[a-z]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } elseif (!preg_match("#[\W]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Special Character!";
        } elseif (strcmp($password, $cpassword) !== 0) {
            $cpasswordErr = "Passwords must match!";
        }
    } else {
        $passwordErr = "Please enter password   ";
        $valid = true;
        if ($valid) {
            echo "cest bon";
        }
    }
}
?>


<div class="container mb-5">
    <div class="row">
        <div class="col-md-6">
            <div class="login-card  text-center border border-dark p-2"">
                <h2 class=" text-center mb-4">Sign In</h2>
                <form action="">
                    <p>
                        <label for="email">Email</label>
                        <input type="text" class="form-input" name="email" placeholder="Enter your email address">
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input type="password" class="form-input" name="password" placeholder="Enter your password">
                    </p>
                    <input type="submit" class="btn btn-secondary" value="Login">
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="login-card text-center border border-dark p-2">
                <h2 class="text-center mb-4">Sign Up</h2>
                <form action="">
                    <p>
                        <label for="name">First Name</label>
                        <input required type="text" class="form-input" name="first_name" placeholder="Enter your first name">
                    </p>
                    <p>
                        <label for="name">Last Name</label>
                        <input required type="text" class="form-input" name="last_name" placeholder="Enter your last name">
                    </p>
                    <p>
                        <label for="email">Email</label>
                        <input required type="text" class="form-input" name="email" placeholder="Enter your email address">
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input required type="password" class="form-input" name="password" placeholder="Enter your password">
                    </p>
                    <p class="<?php echo !empty($cpasswordErr) ? 'error' : ''; ?>">
                        <label for="password">Verif Password</label>
                        <input type="password" class="form-input" name="cpassword" placeholder="Enter your password">
                        <!-- gestion de l'err no-data -->
                        <?php if (!empty($cpasswordErr)) : ?>
                            <span class="help-inline"><?php echo $cpasswordErr; ?></span>
                        <?php endif; ?>

                    </p>
                    <input type="submit" class="btn btn-secondary" value="Register">
                </form>
            </div>
        </div>
    </div>
</div>