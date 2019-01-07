<?php

require_once('src/user.class.php');
$user = new User();

if(isset($_POST['login']))
{
    $err = [];
    if(isset($_POST['username']) && !empty($_POST['username']))
    {
        $user->username = $_POST['username'];
    }
    else
    {
        $err['username'] = "Enter username!";
    }
    if(isset($_POST['password']) && !empty($_POST['password']))
    {
        $user->password = $_POST['password'];
    }
    else
    {
        $err['password'] = "Enter Password!";
    }
    if(count($err) == 0)
    {
         // call login function
        $st = $user->login();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LW Drama Club</title>
    <link rel="apple-touch-icon" sizes="57x57" href="img/logo-57x57.jpg">
    <link rel="apple-touch-icon" sizes="60x60" href="img/logo-60x60.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="img/logo-72x72.jpg">
    <link rel="apple-touch-icon" sizes="76x76" href="img/logo-76x76.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="img/logo-114x114.jpg">
    <link rel="apple-touch-icon" sizes="120x120" href="img/logo-120x120.jpg">
    <link rel="apple-touch-icon" sizes="144x144" href="img/logo-144x144.jpg">
    <link rel="apple-touch-icon" sizes="152x152" href="img/logo-152x152.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo-180x180.jpg">
    <link rel="icon" type="image/jpg" sizes="192x192" href="img/logo-192x192.jpg">
    <link rel="icon" type="image/jpg" sizes="32x32" href="img/logo-32x32.jpg">
    <link rel="icon" type="image/jpg" sizes="96x96" href="img/logo-96x96.jpg">
    <link rel="icon" type="image/jpg" sizes="16x16" href="img/logo-16x16.jpg">
    <link rel="manifest" href="img/logo.jpg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/logo-144x144.jpg">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="img/logo.jpg" style="height: 32px; width: 32px;">
    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/linearfont.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--featured items-->
<section class="contentHolder">
    <div class="container">
        <div class="row">
                <div class="registerCustomer loginFormHolder">
                    <div class="profilePicHolder">
                        <img src="img/logo.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Welcome Lulworth Cove Drama Club<span>Please login to proceed</span></h2>
                    <form method="post" action="">
                        <?php if(isset($st)) { echo $st; }  ?>
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" name="username" class="form-control" id="username" placeholder=" User Name">
                            <?php if(isset($err['username'])){ echo $err['username']; } ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            <?php if(isset($err['password'])) { echo $err['password'];} ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox loginCheckBox">
                                    <label>
                                        <input type="checkbox"> Keep me looged in
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="#" class="forgotPwd">Forgot Password?</a>
                            </div>
                        </div>
                        <input type="submit" name="login" href="#" class="userLogin" value="Login">
                    </form>
                </div>
        </div>
    </div>
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>

<script src="js/script.js"></script>
<script src="js/jssor.slider.min.js" type="text/javascript"></script>
</body>
</html>
