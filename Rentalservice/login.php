<?php 
if(@$_GET["login"] == "fail") {
	$fail = '<font color="red">Invalid username or password.</font>';
	
}
if(@$_GET["loginas"] == "admin") {
	header("Location: ../adminpage/index.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta http-equiv="refresh" content="3" >-->
    <title>Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Favicon and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
    <!-- Top content -->
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text" style="color :black;">
                        <div style="font-size:3em;"><i class="fa fa-car"></i><br></div>
                        <h1 style="color :black; font-size:3em;"><strong> Rental Service</strong></h1>
                        <div class=" description ">
                            <!--<p>
                                This is a free responsive login form made with Bootstrap. Download it on <a href="http://azmind.com "><strong>AZMIND</strong></a>, customize and use it as you like!
                            </p>-->
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6 col-sm-offset-3 form-box ">
                        <div class="form-top ">
                            <div class="form-top-left ">
                                <h3>Login to our site</h3>
                                <p>Enter your username and password</p>
                                <?php echo @$fail; ?>
                            </div>
                            <div class="form-top-right ">
                                <i class="fa fa-lock "></i>
                            </div>
                        </div>
                        <div class="form-bottom ">
                            <form role="form " action="loginprocess.php?login=success" method="post" class="login-form">
                                <div class="form-group ">
                                    <label class="sr-only " for="form-username ">Username</label>
                                    <input type="text" autocomplete="off" name="username" placeholder="Username" class="form-username form-control " id="form-username ">
                                </div>
                                <div class="form-group ">
                                    <label class="sr-only " for="form-password ">Password</label>
                                    <input type="password" name="password" placeholder="Password" class="form-password form-control " id="form-password ">
                                </div>
                                <button type="submit " class="btn ">Sign in!</button>
                                <div align="center">
                                <a href="regis.php">
                                    <u>Register</u></a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6 col-sm-offset-3 social-login ">
                        <div class="social-login-buttons ">
                            <a class="btn btn-link-2 " href="# ">
                                <i class="fa fa-facebook "></i> Facebook
                            </a>
                            <a class="btn btn-link-2 " href="# ">
                                <i class="fa fa-twitter "></i> Twitter
                            </a>
                            <a class="btn btn-link-2 " href="# ">
                                <i class="fa fa-google-plus "></i> Google Plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js "></script>
    <script src="assets/bootstrap/js/bootstrap.min.js "></script>
    <script src="assets/js/jquery.backstretch.min.js "></script>
    <script src="assets/js/scripts.js "></script>
    <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js "></script>
        <![endif]-->
</body>
</html>