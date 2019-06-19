<?php
require_once '../../init.php';
if (isset($_SESSION["login"])) {
    header("location:../master/app");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>I-Bank Class</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <!-- <link rel="icon" type="image/png" href="../../Public/img/icons/favicon.ico"/> -->
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Public/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Public/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../../Public/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Public/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Public/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../Public/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../../Public/img/img-01.png" alt="IMG">
                </div>
                <?php if ($_GET['log'] == 1): ?>
                    <form class="login100-form validate-form" method="post" action="../../App/modal/Validate.php?aksi1=logAdmin">
                        <span class="login100-form-title">
                                Admin Login
                        </span>
                        <?php if (isset($_SESSION["not"])): ?>
                            <p style="padding-left: 10px; padding-bottom: 5px; color: red;"><?php echo $_SESSION["not"]; ?></p>
                        <?php endif ?>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: @UsernameYourClass">
                            <input class="input100" type="text" name="username" placeholder="Username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <a class="txt2" href="../../">
                                Back to blog
                            </a>
                            <a class="txt2" href="auth.view.php?log=2">
                               Or Login to Students
                            </a>
                        </div>
                    </form>
                <?php elseif($_GET['log'] == 2): ?>
                    <form class="login100-form validate-form" method="post" action="../../App/modal/Validate.php?aksi1=log">
                        <span class="login100-form-title">
                            Students Login
                        </span>
                        <?php if (isset($_SESSION["not"])): ?>
                            <p style="padding-left: 10px; padding-bottom: 5px; color: red;"><?php echo $_SESSION["not"]; ?></p>
                        <?php endif ?>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ****">
                            <input class="input100" type="text" name="nis" placeholder="NIS">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <a class="txt2" href="../../">
                                Back to blog
                            </a>
                            <a class="txt2" href="auth.view.php?log=1">
                               Or Login to Admin
                            </a>
                        </div>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="../../Public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../../Public/vendor/bootstrap/js/popper.js"></script>
    <script src="../../Public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../../Public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="../../Public/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="../../Public/js/main.js"></script>

</body>
</html>