<?php
    session_start();
    if(@$_GET['action'] == 'logout') {
        session_destroy();
        header('Location: login.php');
        die();
    
    }
    else if(!$_SESSION['name']){
        session_destroy();
        header('Location: login.php');
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rental Service</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/selectcar.css"></link>

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--Nav-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><i class="fa fa-car w3-margin-right"></i>  Rental Service</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="/selectcar/index.html">Show Car</a></li>
                    <li><a href="history.php">History</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" id="profile" data-toggle="dropdown">
                            <?php echo $_SESSION['name']."   " ?>
                            <?php echo $_SESSION['lastname']."   " ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-lr animated fadein" role="menu">
                            <li role="presentation"><a role="menuitem" href="#">Profile</a></li>
                            <li role="presentation"><a role="menuitem" href="history.php">History</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" href="?action=logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Content page-->
    <div class="contentpage container" style="padding-top: 70px;">
        <h1>Brand</h1>
        <hr class="line" style="border-top: 0.5px solid #000;">
        <!--thumbnail logo-->
        <div class="contaniner">
            <!--<div class="col-sm-4">
                <div class="thumbnail">
                    <a href="model.html">
                        <div class="panel-body image"><img src="img/logo-toyota.png" class="img-responsive" style="width:100%" alt="Image"></div>
                    </a>
                </div>
            </div>-->
            <div class="col-sm-4">
                <div class="thumbnail">
                    <a href="../Rentalservice/history.php">
                        <div class="panel-body image"><img src="img/logo-honda.png" class="img-responsive" style="width:100%" alt="Image"></div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <a href="../Rentalservice/history.php">
                        <div class="panel-body image"><img src="img/logo-nissan.png" class="img-responsive" style="width:100%" alt="Image"></div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <a href="../Rentalservice/history.php">
                        <div class="panel-body image"><img src="img/logo-mazda.png" class="img-responsive" style="width:100%" alt="Image"></div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <a href="../Rentalservice/history.php">
                        <div class="panel-body image"><img src="img/logo-benz.png" class="img-responsive" style="width:100%" alt="Image"></div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <a href="../Rentalservice/history.php">
                        <div class="panel-body image"><img src="img/logo-bmw.png" class="img-responsive" style="width:100%" alt="Image"></div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Header -->

        <!--<div class="detail"></div>-->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!--<script>
        $(function() {
            $('.detail').load('detail.html');
        })
    </script>-->

</body>

</html>