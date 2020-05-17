<?php


include 'user.php';
$user = new User(); // Checking for user logged in or not


if (isset($_REQUEST['regjistro'])) {

    extract($_REQUEST);

    $register = $user->reg_user($fullname, $uname, $upass, $uemail);

    if ($register) {

//U regjistrua me sukses

        echo 'Registration successful <a href="login.php">Click here</a> to login';

    } else {

// ne rast te deshtimit te regjistrimit

        echo 'Registration failed. Email or Username already exits please try again';

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="views/style.css">
</head>
<body>

<div class="main">

    <section class="signup">
        <img src="images/signup-bg.jpg" alt="">
        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" name="reg">
                    <h2 class="form-title">Create account</h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="fullname" id="name" placeholder="Your Fullname"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="uname" id="uname" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="uemail" id="uemail" placeholder="Email"/>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-input" name="upass" id="password" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group">

                        <input onclick="return(submitreg());"type="submit" name="regjistro" id="submit" class="form-submit" value="Sign up"/>
                    </div>
                </form>
                <p class="loginhere">
                    Have already an account ? <a href="login.php" class="login.php">Login here</a>
                </p>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html