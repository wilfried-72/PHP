<div class="mx-5 px-2 mb-5">
    <div class="row">
        <div class="col-md-6">
            <div class="login-card  text-center border border-dark"">
                <h2 class=" text-center mb-4">Sign In</h2>
                <form action="../../controllers/auth/auth.php" method="POST" <p>
                    <label for="email">Email</label>
                    <input required type="text" class="form-input" name="email" placeholder="Enter your email address">
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input id="lpassword-field" required type="password" class="form-input" name="lpassword" placeholder="Enter your password">
                        <span><i toggle="#lpassword-field" class="fa fa-eye toggle-lpassword"></i></span>

                        <!-- gestion de l'err no-data -->
                        <?php if (!empty($authError)) : ?>
                            <span class="help-inline text-danger bg-light"><?php echo $authError; ?></span>
                        <?php endif; ?>
                    </p>
                    <input type="submit" class="btn btn-secondary my-2" value="Login">
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="login-card text-center border border-dark">
                <h2 class="text-center mb-4">Sign Up</h2>
                <form action="../../controllers/auth/login.php" method="POST">
                    <p>
                        <label for="name">First Name</label>
                        <input type="text" class="form-input" name="first_name" placeholder="Enter your first name" value="<?php echo $first_name; ?>">
                        <!-- gestion de l'err no-data -->
                        <?php if (!empty($first_nameError)) : ?>
                            <span class="help-inline text-danger bg-light"><?php echo $first_nameError; ?></span>
                        <?php endif; ?>
                    </p>
                    <p>
                        <label for="name">Last Name</label>
                        <input type="text" class="form-input" name="last_name" placeholder="Enter your last name" value="<?php echo $last_name; ?>">
                        <!-- gestion de l'err no-data -->
                        <?php if (!empty($last_nameError)) : ?>
                            <span class="help-inline text-danger bg-light"><?php echo $last_nameError; ?></span>
                        <?php endif; ?>
                    </p>

                    <p>
                        <label for="email">Email</label>
                        <input type="text" class="form-input" name="email" placeholder="Enter your email address" value="<?php echo $email; ?>">

                        <!-- gestion de l'err no-data -->
                        <?php if (!empty($emailError)) : ?>
                            <span class="help-inline text-danger bg-light"><?php echo $emailError; ?></span>
                        <?php endif; ?>
                    </p>

                    <p>
                        <label for="password">Password</label>
                        <input id="password-field" type="password" class="form-input" name="password" placeholder="Enter your password" value="<?php echo $passwordView; ?>">
                        <span><i toggle="#password-field" class="fa fa-eye toggle-password"></i></span>
                        <!-- gestion de l'err no-data -->
                        <?php if (!empty($passwordErr)) : ?>
                            <span class="help-inline text-danger bg-light"><?php echo $passwordErr; ?></span>
                        <?php endif; ?>

                    </p>


                    <p>
                        <label for=" password">Verif Password</label>
                        <input id="cpassword-field" type="password" class="form-input" name="cpassword" placeholder="Enter yet your password">
                        <span><i toggle="#cpassword-field" class="fa fa-eye toggle-cpassword"></i></span>
                        <!-- gestion de l'err no-data -->
                        <?php if (!empty($cpasswordErr)) : ?>
                            <span class="help-inline text-danger bg-light"><?php echo $cpasswordErr; ?></span>
                        <?php endif; ?>
                    </p>

                    <div class=" my-2">
                        <input type="submit" class="btn btn-secondary" value="Register">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-3">
        <a class="btn btn-sm  btn-primary" href="../../../../front/src/controllers/auth/login.php">Effacer formulaire</a>
    </div>
</div>


<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(".toggle-cpassword").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(".toggle-lpassword").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>