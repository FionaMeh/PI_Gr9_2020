<?php
session_start();

include "User.php";

$user = new User();
if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $login = $user->check_login($emailusername, $password);
    if ($login) {
// Registration Success
        header("location:MainPage.php");
    } else {
// Registration Failed
        echo 'Wrong username or password';
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
                    <h2 class="form-title">Log in account</h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="emailusername" required="" id="name" placeholder="Username or email "/>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" required="" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input onclick="return(submitlogin());" type="submit" name="submit"  class="form-submit" value="Login" /></td>
                    </div>
                </form>
                <p class="loginhere">
                    Don't have an an account ? <a href="register.php" class="register.php">Register now here!</a>
                </p>
            </div>
        </div>
    </section>

</div>

<script type="text/javascript" language="javascript">

    function submitlogin() {
        var form = document.login;
        if(form.emailusername.value == ""){
            alert( "Enter email or username." );
            return false;
        }
        else if(form.password.value == ""){
            alert( "Enter password." );
            return false;
        }
    }

</script>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
