<?php
    session_start();
    // echo $_SESSION['pick_up']."\n";
    // echo $_SESSION['drop_off']."\n";
    // echo $_SESSION['start_date']."\n";
    // echo $_SESSION['end_date']."\n";
    // echo $_SESSION['start_time']."\n";
    // echo $_SESSION['end_time']."\n";
    // echo $_SESSION['card_type']."\n";
    // echo $_SESSION['card_id']."\n";
    // echo $_SESSION['name']."\n";
    // echo $_SESSION['lastname']."\n";
    // echo $_SESSION['birthday']."\n";
    // echo $_SESSION['email']."\n";
    // echo $_SESSION['phone']."\n";
    // echo $_SESSION['dln']."\n";
    
    include 'insertIntoRentalDB.php';
    include 'insertIntoReservationDB.php';
    // include 'updateCustomerDB.php';

    $link = mysqli_connect("localhost", "root", "", "Car_Rental_System");
	$sql = "SELECT rental.id,customer.name , customer.lastname , customer.birthday ,customer.email , customer.phone , customer.dln , 
                    pick_up_location.city_id AS pick_up_location , drop_off_location.city_id AS drop_off_location , 
                    rental.start_date, rental.end_date , car.brand , car.model , car.production_year , car.engine , 
                    car.engine_type , car.fuel ,
                    car.mileage , car.color , car.pic , reservation.card_type , reservation.card_id
            FROM rental
            LEFT JOIN customer 
                ON rental.customer_id = customer.id
            LEFT JOIN pick_up_location
                ON rental.pick_up_location_id = pick_up_location.id
            LEFT JOIN drop_off_location
                ON rental.drop_off_location_id = drop_off_location.id
            LEFT JOIN car
                ON rental.car_id = car.id
            LEFT JOIN reservation 
            	ON rental.id = reservation.rental_id
            WHERE rental.id = ".$last_id;
	
	$result = @mysqli_query($link, $sql);
    $row = @mysqli_num_rows(result);
	while($data = mysqli_fetch_array($result)) {
        $information = $data;
	}
    $pic =  explode('-',$information['pic']);
	mysqli_close($link);
    
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
    <link rel="stylesheet" type="text/css" href="../css/history.css"></link>
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
                    <li><a href="/Rentalservice">Home</a></li>
                    <li><a href="/selectcar/index.html">Select Car</a></li>
                    <li class="active"><a href="/history/index.html">History</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" id="profile" data-toggle="dropdown">
                            <?php echo @$_SESSION['name']."   " ?>
                            <?php echo @$_SESSION['lastname']."   " ?>
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

    <!-- Header -->
    <div class="history-container">
        <div class="container">
            <h1>History <?php  ?></h1>
            <hr class="line" style="border-top: 0.5px solid #000;">
            <div class="history-content">
                <div class="" style = "padding: 0px 0px">
                    <div class="thumbnail" >
                        <div class="clearfix card-detail">
                            <div class="col-md-4">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="product-img-src" src="pic/<?php echo explode('-',$information['pic'])[0]  ?>.png" alt="Avatar" class="image">
                                    </a>
                                </div>
                                <?php
                                    echo '<h4> '.$information['brand'].' '.$information['model'];
                                    if($information['engine_type'] == 'n/a') echo ' '.$information['engine'].'</h4>';
                                    else echo ' '.$information['engine_type'].'</h4>';
                                ?>
                                <div class="ratings">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </div>
                                <?php echo
                                    '<li> Production in year '.$information['production_year'].' </li>
                                    <li> Engine(L) : '.$information['engine'].'  </li>
                                    <li> EngineType : '.$information['engine_type'].'  </li>
                                    <li> Fuel : '.$information['fuel'].'  </li>
                                    <li> Mileage : '.$information['mileage'].'  </li>
                                    <li> Color : '.$information['color'].'  </li>';
                                ?>
                                <h2 class="price">$29,90</h2>
                            </div>
                            <div class="col-md-8">
                                <div class="clearfix ">
                                    <h2>Rental detail <span class="label label-success" style = "float: right;">Success</span></h2>            
                                    <div class="clearfix">
                                        <h4 style = "float:left;margin-right: 10px;">Rental ID :</h4>
                                        <h4><?php echo @$_SESSION['pick_up'] ?></h4>
                                        <div class="col-md-6" style="padding: 0px 0px">
                                            <div class = "col-md-12" style = "padding : 0px 0px">
                                                <h4 style = "float:left;margin-right: 10px;">Pick-up Location :</h4>
                                                <h4><?php echo $information['pick_up_location'] ?></h4>
                                            </div>
                                            <div class = "col-md-12" style = "padding : 0px 0px">
                                                <h4 style = "float:left;margin-right: 10px;">Start Date :</h4>
                                                <h4><?php echo $information['start_date'] ?></h4>
                                            </div>
                                            <div class = "col-md-12" style = "padding : 0px 0px">
                                                <h4 style = "float:left;margin-right: 10px;">Card Type :</h4>
                                                <h4><?php echo $information['card_type'] ?></h4>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="padding: 0px 0px">
                                            <div class = "col-md-12" style = "padding : 0px 0px">
                                                <h4 style = "float:left;margin-right: 10px;">Drop-off Location :</h4>
                                                <h4><?php echo $information['drop_off_location'] ?></h4>
                                            </div>
                                            <div class = "col-md-12" style = "padding : 0px 0px">
                                                <h4 style = "float:left;margin-right: 10px;">End Date :</h4>
                                                <h4><?php echo $information['end_date'] ?></h4>
                                            </div>
                                            <div class = "col-md-12" style = "padding : 0px 0px">
                                                <h4 style = "float:left;margin-right: 10px;">Card ID :</h4>
                                                <h4><?php echo $information['card_id'] ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h2>Driver detail</h2>
                                <div class = "clearfix">
                                    <div class="col-md-6" style="padding: 0px 0px">
                                        <div class = "col-md-12" style = "padding : 0px 0px">
                                            <h4 style = "float:left;margin-right: 10px;">Name : </h4>
                                            <h4><?php echo $information['name'] ?></h4>
                                        </div>
                                        <div class = "col-md-12" style = "padding : 0px 0px">
                                            <h4 style = "float:left;margin-right: 10px;">Birth Day : </h4>
                                            <h4><?php echo $information['birthday'] ?></h4>
                                        </div>
                                        <div class = "col-md-12" style = "padding : 0px 0px">
                                            <h4 style = "float:left;margin-right: 10px;">Email : </h4>
                                            <h4><?php echo $information['email'] ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding: 0px 0px">
                                        <div class = "col-md-12" style = "padding : 0px 0px">
                                            <h4 style = "float:left;margin-right: 10px;">Last Name : </h4>
                                            <h4><?php echo $information['lastname'] ?></h4>
                                        </div>
                                        <div class = "col-md-12" style = "padding : 0px 0px">
                                            <h4 style = "float:left;margin-right: 10px;">Age : </h4>
                                            <h4><?php echo @$_SESSION['age'] ?></h4>
                                        </div>
                                        <div class = "col-md-12" style = "padding : 0px 0px">
                                            <h4 style = "float:left;margin-right: 10px;">Phone number : </h4>
                                            <h4><?php echo $information['phone'] ?></h4>
                                        </div>
                                    </div>
                                    <div class = "col-md-12" style = "padding : 0px 0px">
                                        <h4 style = "float:left;margin-right: 10px;">Driver License Number : </h4>
                                        <h4><?php echo $information['dln'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Bootstrap-typeahead -->
    <script src="../js/bootstrap3-typeahead.js"></script>
    <!-- Bootstrap-datetimepicker -->
    <script src="../js/bootstrap-datetimepicker.min.js"></script>

</body>

</html>