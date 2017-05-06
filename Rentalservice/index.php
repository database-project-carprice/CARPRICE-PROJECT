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
        <link rel="stylesheet" type="text/css" href="../css/landing-page.css"></link>

        <!-- Custom Fonts -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">




        <!--<link rel="stylesheet" href="../Rentalservice/js/jquery-ui.min.css">-->
        <!--<script> src="/js/jquery-2.1.1.min.js" </script>-->
        <!--<script> src="../js/jquery-ui.min.js" </script>-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>
        <html>
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
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="/selectcar/index.html">Select Car</a></li>
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
                                <li role="presentation"><a role="menuitem" href="#">History</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" href="?action=logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        </html>

       

<!-- Header -->
        <a name="about"></a>
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-message">
                            <h1 style="font-weight: 500;">Welcome to our page</h1>
                            <h3 style="font-weight: 500;">Bring freedom and your smile from my service</h3>
                            <hr class="intro-divider">
                            <!--<ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-map-marker"></i> <span class="network-name">Picking up point</span></a>
                            </li>
                            <li>
                                <a href="../selectcar/index.html" class="btn btn-default btn-lg"><i class="fa fa-thumbs-up"></i> <span class="network-name">Select your rides</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-calendar"></i> <span class="network-name">Pick up date</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-user-plus"></i> <span class="network-name">Sign up</span></a>
                            </li>
                        </ul>-->
                            <div style="width:65% ; position : relative; margin-left: auto;margin-right: auto;">
                                <div class="w3-bar w3-black">
                                    <button class="w3-bar-item w3-button tablink " onclick="openLink(event, 'Car');" style="width:33%"><i class="fa fa-map-marker w3-margin-right"></i>Pickup Point</button>
                                    <button class="w3-bar-item w3-button tablink " onclick="openLink(event, 'Date');" style="width:34%"><i class="fa fa-calendar w3-margin-right"></i>Date</button>
                                    <button class="w3-bar-item w3-button tablink " onclick="openLink(event, 'Time');" style="width:33%"><i class="fa fa-clock-o w3-margin-right"></i>Time</button>
                                </div>
                                <!-- Tabs -->
                                <form id="tab" action="content.php" method="post">
                                    <div id="Car" class="w3-container w3-white w3-padding-16 myLink tab-size">
                                        <div class="w3-row-padding" style="margin:0 -16px;">
                                            <h3>Best car rental service!</h3>
                                            <!--<p><span class="w3-tag w3-deep-orange">DISCOUNT!</span> Special offer if you book today: 25% off anywhere in the world with CarServiceRentalRUs</p>-->
                                            <div style="margin-top :3%">
                                                <div class="col-md-6 offset-md-2">
                                                    <input class="w3-input w3-border" type="text" id="slo" name="slocated" placeholder="Pick-up point" autocomplete="off">
                                                </div>
                                                <div class="col-md-6 offset-md-2">
                                                    <input class="w3-input w3-border" type="text" id="elo" name="elocated" placeholder="Drop point" autocomplete="off">
                                                </div>
                                            </div>
                                            <button class="w3-button w3-dark-grey" style="margin-top : 2%">Search Date</button>
                                        </div>
                                    </div>
                                    <div id="Date" class="w3-container w3-white w3-padding-16 myLink tab-size">
                                        <div class="w3-row-padding" style="margin:0 -16px;">
                                            <h3>Travel the world with us</h3>
                                            <!--<p><span class="w3-tag w3-deep-orange">DISCOUNT!</span> Special offer if you book today: 25% off anywhere in the world with CarServiceRentalRUs</p>-->
                                            <div style="margin-top :3%">
                                                <div class="col-md-6 offset-md-2 ">
                                                    <input class="w3-input w3-border" type="text" id="sdate" name="sdate" placeholder="Start date" data-format="yyyy-MM-dd">
                                                </div>
                                                <div class="col-md-6 offset-md-2">
                                                    <input class="w3-input w3-border" type="text" id="edate" name="edate" placeholder="End date" data-format="yyyy-MM-dd">
                                                </div>
                                                
                                            </div>
                                            <button class="w3-button w3-dark-grey" style="margin-top : 2%">Search and find dates</button>
                                        </div>
                                    </div>
                                    <div id="Time" class="w3-container w3-white w3-padding-16 myLink tab-size">
                                        
                                            <div class="w3-row-padding" style="margin:0 -16px;">
                                                <h3>Select the best times!</h3>
                                                <!--<p><span class="w3-tag w3-deep-orange">DISCOUNT!</span> Special offer if you book today: 25% off anywhere in the world with CarServiceRentalRUs</p>-->
                                                <div style="margin-top :3%">
                                                    <div class="col-md-6 offset-md-2">
                                                        <input class="w3-input w3-border" type="text" name="stime" id="stime" placeholder="Start time">
                                                    </div>
                                                    <div class="col-md-6 offset-md-2">
                                                        <input class="w3-input w3-border" type="text" name="etime" id="etime" placeholder="End time">
                                                    </div>
                                                </div>
                                                <button class="w3-button w3-dark-grey" style="margin-top : 2%" herf=index.php?action=content id="tsearch">Search for car </button>
                                                
                                            </div>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->
            

        </div>
        <!-- /.intro-header -->

        <!-- Page Content -->

        <a name="services"></a>
        <div class="content-section-b">

            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <br></br><br></br>
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">New car from every brands</h2>
                        <h1 class="lead">for every one. </h1>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="img/civic_01.png" alt="">
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.content-section-a -->

        <div class="content-section-a">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                        <br></br><br></br>
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Since ECO car<br>to SUPER car</h2>
                        <p class="lead">Support all of your requirements.</p>
                    </div>
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="img/mazda2_01.png" alt="" style="width:60%">
                        <img class="img-responsive" src="img/aventador_01.png" alt="">
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.content-section-b -->

        <div class="content-section-b">

            <div class="container">

                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Our service support any country<br>in the world</br>
                        </h2>
                        <p class="lead">We have local companies in most of every country,<br>In some country we contact local rental company to support service and not include charge</br>
                        </p>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="img/map_world.jpg" alt="">
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.content-section-a -->

        <a name="contact"></a>
        <div class="banner">

            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <h2>If these not enough for you</h2>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-inline banner-social-buttons">
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-caret-square-o-right "></i> <span class="network-name">More details</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.banner -->

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-inline">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a href="#services">Services</a>
                            </li>
                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                        <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>

        


        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- Bootstrap-typeahead -->
        <script src="../js/bootstrap3-typeahead.js"></script>
        <!-- Bootstrap-datetimepicker -->
        <script src="../js/bootstrap-datetimepicker.min.js" ></script>

        


        <script>
            // Tabs
            function openLink(evt, linkName) {

                var i, x, tablinks;
                x = document.getElementsByClassName("myLink");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
                }
                document.getElementById(linkName).style.display = "block";
                evt.currentTarget.className += " w3-red";

            }
            // Click on the first tablink on load
            document.getElementsByClassName("tablink")[0].click();
        </script>

        

        <script>
            var x = <?php include "autocomplete/city.php" ?>;
            $('#slo').typeahead({
                source: x
            });
            $('#elo').typeahead({
                source: x
            });
        </script>

        <script type="text/javascript">
            $(function() {
                $('#datetimepicker4').datetimepicker({
                    
                });
            });
        </script>

    </body>

    </html>