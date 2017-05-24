
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

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

        <div class="inner-bg"  >
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text" style="color :black;">

                        <h1 style="color :black; font-size:3em;"><strong>Register</strong></h1>
                        <div class=" description ">
                            <!--<p>
                                This is a free responsive login form made with Bootstrap. Download it on <a href="http://azmind.com "><strong>AZMIND</strong></a>, customize and use it as you like!
                            </p>-->
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <?php if(@$_GET["regis"] == "success") {
                        echo '<div class="col-sm-6 col-sm-offset-3 form-box ">
                                <h3>Sucess!</h3>
                                <div class="form-bottom ">
                                <div align="center">
                                    <a href="login.php"><u>Try to login.</u></a>
                                </div>
                                </div>
                            </div>'; 
                            } else {
                                echo '<div class="col-sm-6 col-sm-offset-3 form-box ">

                        <h3>It\'s free and always will be.</h3>

                        <div class="form-bottom ">
                            <form role="form " action="regisprocess.php" method="post" class="login-form ">
                                <div class="form-group ">
                                    <input autocomplete="off" type="text" name="username" placeholder="Username" class="form-username form-control " id="form-username  ">
                                </div>
                                <div class="form-group ">
                                    <input type="password" name="password" placeholder="Password" class="form-password form-control " id="form-password ">
                                </div>
                                <br>
                                <div class="form-group " >
                                    <input autocomplete="off" type="text" name="name" placeholder="First name" class="form-username form-control " id="form-username ">
                                </div>
                                <div class="form-group ">
                                    <input autocomplete="off" type="text" name="lastname" placeholder="Last name" class="form-username form-control " id="form-username ">
                                </div>
                                <div class = "col-md-6" style = "padding-left: 0px">
                                    <div class="form-group ">
                                        <input autocomplete="off" type="text" name="email" placeholder="Email" class="form-username form-control " id="form-username ">
                                    </div>
                                </div>
                                <div class = "col-md-6" style = "padding-right: 0px">
                                    <div class="form-group ">
                                    <input autocomplete="off" type="text" name="phone" placeholder="Phone number" class="form-username form-control " id="form-username ">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <input autocomplete="off" type="text" name="birthday" placeholder="Brithday (Format:YYYY-MM-DD)" class="form-username form-control " id="form-username ">
                                </div>
                                <div class="form-group ">
                                    <input autocomplete="off" type="text" name="dln" placeholder="Driving licence number" class="form-username form-control " id="form-username ">
                                </div>
                                <br>
                                <button type="submit " class="btn ">Create Account</button>
                            </form>
                            <div align="center">
                                <a href="login.php">
                                    <u>Back</u></a>
                            </div>
                        </div>
                    </div>';
                            }
                    ?>
                    
                </div>
                <!--<div class="row ">
                    <div class="col-sm-6 col-sm-offset-3 social-login ">
                        <h3>...or login with:</h3>
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
                </div>-->
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