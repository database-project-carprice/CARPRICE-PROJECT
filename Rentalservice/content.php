<?php
    
    session_start();
    if(@$_GET['action'] == 'logout') {
        session_destroy();
        header('Location: login.php');
        die();
    
    }
    $selectidcar = 1;
    $firstPage = true;
    $secPage = false;
    $thirdPage = false;
    $fouthPage = false;

   
    if(@$_GET['slocated'] && @$_GET['elocated'] && @$_GET['sdate'] && @$_GET['edate'] && @$_GET['stime'] && @$_GET['etime']){
        $_SESSION['pick_up'] = $_GET['slocated'];
        $_SESSION['drop_off'] = $_GET['elocated'];
        $_SESSION['start_date'] = $_GET['sdate'];
        $_SESSION['end_date'] = $_GET['edate'];
        $_SESSION['start_time'] = $_GET['stime'];
        $_SESSION['end_time'] = $_GET['etime'];
    }

    if(@$_GET['name'] && @$_GET['lastname'] && @$_GET['birth_day'] && @$_GET['email'] && @$_GET['phone_number'] && @$_GET['driver_license']){
        $thirdPage = true;
        $_SESSION['name'] = $_GET['name'];
        $_SESSION['lastname'] = $_GET['lastname'];
        $_SESSION['birthday'] = $_GET['birth_day'];
        $_SESSION['email'] = $_GET['email'];
        $_SESSION['phone'] = $_GET['phone_number'];
        $_SESSION['dln'] = $_GET['driver_license'];
    }
    if(@$_GET['card_type'] && @$_GET['card_id']){
        $fouthPage = true;
        $_SESSION['card_type'] = $_GET['card_type'];
        $_SESSION['card_id'] = $_GET['card_id'];
    }
    

    if(@$_GET['select']) {
        // include 'showDetailCustomer.php';
        $secPage = true;
        $_SESSION['car_id'] = $_GET['select'];
        $selectidcar = $_GET['select'];
        $sql = "SELECT * FROM car
                    WHERE id = '".$selectidcar."'";
    } 
    else if(@$_GET['brand']){
        $select = '( brand = \'';
        $select = $select.implode('\') AND ( brand = \'',$_GET['brand']);
        $select = $select.'\')';
        
        $sql = "SELECT *  FROM car 
                    WHERE ".$select;
    }
    else if(@$_GET['type']){
        $select = '( name = \'';
        $select = $select.implode('\') AND ( name = \'',$_GET['type']);
        $select = $select.'\')';
        
        $sql = "SELECT *  FROM car 
                    WHERE category_id = (
                            SELECT id FROM category
                            WHERE ".$select.")";     
    }
    else {
        $sql = "SELECT *  FROM car ";
    }
    

   
    
    
    
    $link = mysqli_connect("localhost", "root", "", "Car_Rental_System");
	
	$rows = 1;
	$result = mysqli_query($link, $sql);
	while($data = mysqli_fetch_array($result)) {
        $cId[$rows] = $data['id'];
        $cBrand[$rows] = $data['brand'];
        $cModel[$rows] = $data['model'];
        $cYear[$rows] = $data['production_year'];
        $cEngine[$rows] = $data['engine'];
        $cType[$rows] = $data['engine type'];
        $cFuel[$rows] = $data['fuel'];
        $cMile[$rows] = $data['mileage'];
        $cColor[$rows] = $data['color'];
        $cPic[$rows] = explode('-',$data['pic']);
        $rows++;
	}
	mysqli_close($link);
    
  
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin page</title>

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="../css/content.css" rel="stylesheet">
    </head>

    <body>
        <!--Nav-->
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
        <!--Content-->
        <div class="container">
            <div class="row">
                <section>
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" id="tab1" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                        <span class="round-tab">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </a>
                                </li>

                                <li role="presentation" id="tab2" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                        <span class="round-tab">
                                            <i class="fa fa-id-card-o"></i>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" id="tab3" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                        <span class="round-tab">
                                            <i class="fa fa-credit-card"></i>
                                        </span>
                                    </a>
                                </li>

                                <li role="presentation" id="tab4" class="disabled">
                                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-ok"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <form role="form">
                            <div class="tab-content ">
                                
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="sub-content">
                                                <h3>Search details</h3>
                                                <div>
                                                    <i class="fa fa-map-marker" aria-hidden="true" style="float:left;"></i>
                                                    <h4 style="margin-top:0px;padding-left: 15px;">Pick-up</h4>
                                                    <div>
                                                        <p>
                                                            <?php echo @$_SESSION['pick_up'] ?> </p>
                                                        <p>
                                                            <?php echo @$_SESSION['start_date']." ".@$_SESSION['end_time'] ?> </p>
                                                        <!--<p>Bangkok - Suvarnabhumi Airport - International 4 Jun 2017 10:00</p>-->
                                                    </div>
                                                </div>
                                                <div>
                                                    <i class="fa fa-map-marker" aria-hidden="true" style="float:left;"></i>
                                                    <h4 style="margin-top:0px;padding-left: 15px;">Drop-point</h4>
                                                    <div>
                                                        <p>
                                                            <?php echo @$_SESSION['drop_off'] ?> </p>
                                                        <p>
                                                            <?php echo @$_SESSION['end_date']." ".@$_SESSION['end_time'] ?> </p>
                                                        <!--<p>Bangkok - Suvarnabhumi Airport - International 4 Jun 2017 10:00</p>-->
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="sub-content">
                                                <h3>Sort by</h3>
                                                <form>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio">Price
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio">Brands
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio">Engine
                                                    </label>
                                                </form>
                                            </div>

                                            <div class="sub-content">
                                                <h3>Filter</h3>
                                                <div class="panel-group" id="accordion">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Brands</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse in">
                                                            <div class="panel-body">
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="brand[]" value="Honda">Honda</label>
                                                                </div>
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="brand[]" value="Toyota">Toyota</label>
                                                                </div>
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="brand[]" value="Nissan">Nissan</label>
                                                                </div>
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="brand[]" value="Ford">Ford</label>
                                                                </div>
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="brand[]" value="Bmw">BMW</label>
                                                                </div>
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="brand[]" value="Benz">Benz</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Type</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="type[]" value="Sedan">Sedan</label>
                                                                </div>
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="type[]" value="Hatchback">Hatchback</label>
                                                                </div>
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="type[]" value="Crossover">Crossover</label>
                                                                </div>
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="type[]" value="MVP">MVP</label>
                                                                </div>
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="type[]" value="SUV">SUV</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Transmission</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="Tran[]" value="Auto">Auto</label>
                                                                </div>
                                                                <div class="checkbox-position">
                                                                    <label class="checkbox-inline"><input type="checkbox" name="Tran[]" value="Manual">Manual</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-success right"> Find</button>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class = "row-search align-self-end">
                                                <h4 style= "float: left ; margin-right: 10px">Search</h4>
                                                <input type="text" class="form-control" id="usr" style= "float: left ; width:200px ; margin-right: 10px" > 
                                                <button type="button" class="btn btn-info">Find</button>
                                            </div>
                                            <!-- BEGIN PRODUCTS -->
                                            <?php 
                                                for($i = 1 ; $i < $rows ; $i++){
                                                    echo '<div class="thumbnail">
                                                            <div class="clearfix card-detail">
                                                                <div class="col-md-7 ">
                                                                    <div class="product-img">
                                                                        <a href="#">
                                                                            <img class="product-img-src" src="pic/'.$cPic[$i][0].'.png" alt="Avatar" class="image">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                
                                                                    <h4> '.$cBrand[$i].' '.$cModel[$i];
                                                                    if($cType[$i] == 'n/a') echo ' '.$cEngine[$i].'</h4>';
                                                                    else echo ' '.$cType[$i].'</h4>';
                                                                echo '<div class="ratings">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                        <span class="glyphicon glyphicon-star-empty"></span>
                                                                    </div>
                                                                    <li> Production in year '.$cYear[$i].' </li>
                                                                    <li> Engine(L) : '.$cEngine[$i].'  </li>
                                                                    <li> EngineType : '.$cType[$i].'  </li>
                                                                    <li> Fuel : '.$cFuel[$i].'  </li>
                                                                    <li> Mileage : '.$cMile[$i].'  </li>
                                                                    <li> Color : '.$cColor[$i].'  </li>
                                                                    <hr class="line">
                                                                    <p class="price">$29,90</p>
                                                                    <ul class="list-inline pull-right">
                                                                        <li><a class="btn btn-primary " href="content.php?content=step2&select='.$cId[$i].'" >CHOOSE THIS CAR</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                }
                                            ?>
                                            <!---->
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <div>
                                        <div class="thumbnail">
                                            <div class="clearfix card-detail">
                                                <div class="col-md-7 ">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="product-img-src" src="pic/<?php echo @$cPic[1][0] ?>.png" alt="Avatar" class="image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <?php
                                                    echo '<h4> '.@$cBrand[1].' '.@$cModel[1];
                                                        if(@$cType[1] == 'n/a') echo ' '.@$cEngine[1].'</h4>';
                                                        else echo ' '.@$cType[1].'</h4>';
                                                        ?>
                                                        <div class="ratings">
                                                            <span class="glyphicon glyphicon-star"></span>
                                                            <span class="glyphicon glyphicon-star"></span>
                                                            <span class="glyphicon glyphicon-star"></span>
                                                            <span class="glyphicon glyphicon-star"></span>
                                                            <span class="glyphicon glyphicon-star-empty"></span>
                                                        </div>
                                                        <?php echo
                                                    '<li> Production in year '.$cYear[1].' </li>
                                                        <li> Engine(L) : '.$cEngine[1].'  </li>
                                                        <li> EngineType : '.$cType[1].'  </li>
                                                        <li> Fuel : '.$cFuel[1].'  </li>
                                                        <li> Mileage : '.$cMile[1].'  </li>
                                                        <li> Color : '.$cColor[1].'  </li>';
                                                        ?>
                                                        <hr class="line">
                                                        <p class="price">$29,90</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <h2>Driver Details</h2>
                                            <form action="content.php?content=step3" method="get">
                                                <div class="row form-sub" style="padding-bottom: 20px;">
                                                    <div class="col col-md-4 form-sub-text">
                                                        <p>First Name*</p>
                                                    </div>
                                                    <div class="col col-md-8 col-offset-2">
                                                        <input type="text" class="form-control" placeholder=""  name="name" value="<?php echo @$_SESSION['name']; ?>" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="row form-sub " style="padding-bottom: 20px;">
                                                    <div class="col col-md-4 form-sub-text">
                                                        <p>Last Name*</p>
                                                    </div>
                                                    <div class="col col-md-8">
                                                        <input type="text" class="form-control" placeholder="" name="lastname" value="<?php echo @$_SESSION['lastname']; ?>" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="row form-sub" style="padding-bottom: 20px;">
                                                    <div class="col col-md-4 form-sub-text">
                                                        <p>Birthday*</p>
                                                    </div>
                                                    <div class="col col-md-8">
                                                        <input type="text" class="form-control" placeholder="" name="birth_day" value="<?php echo @$_SESSION['birthday']; ?>" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="row form-sub" style="padding-bottom: 20px;">
                                                    <div class="col col-md-4 form-sub-text">
                                                        <p>Email*</p>
                                                    </div>
                                                    <div class="col col-md-8">
                                                        <input type="text" class="form-control" placeholder="" name="email" value="<?php echo @$_SESSION['email']; ?>" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="row form-sub" style="padding-bottom: 20px;">
                                                    <div class="col col-md-4 form-sub-text">
                                                        <p>Phone number*</p>
                                                    </div>
                                                    <div class="col col-md-8">
                                                        <input type="text" class="form-control" placeholder="" name="phone_number" value="<?php echo @$_SESSION['phone']; ?>" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="row form-sub" style="padding-bottom: 20px;">
                                                    <div class="col col-md-4 form-sub-text">
                                                        <p>Driver License*</p>
                                                    </div>
                                                    <div class="col col-md-8">
                                                        <input type="text" class="form-control" placeholder="" name="driver_license" id="dlicense" value="<?php echo @$_SESSION['dln']; ?>" autocomplete="off">
                                                    </div>
                                                </div>
                                                
                                                <ul class="list-inline pull-right">
                                                    <li><button type"submit" class="btn btn-primary ">Save2</button></li>
                                                </ul>
                                            </form>
                                        </div>
                                        <!-- END PRODUCTS -->

                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <h1>Payment</h1>
                                    <form action method="get">
                                        <br>
                                        <div class="row form-sub">
                                            <div class="col col-md-4 form-sub-text">
                                                <p>Card type*</p>
                                            </div>
                                            <div class="col col-md-8 col-offset-2">
                                                <!--<select class="form-control" name="c" style = "width: 100% ; float: left;" value="<?php echo @$_SESSION['card_type'] ?>">
                                                    <option value="id" data-img-src="..\img\Visa.png">Visa card</option>
                                                    <option value="name">Debit</option>
                                                    <option value="lastname">Master card</option>
                                                </select>-->
                                                <input type="text" name="card_type"  class="form-control" value="<?php echo @$_SESSION['card_type'] ?>" placeholder="" autocomplete="off">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row form-sub">
                                            <div class="col col-md-4 form-sub-text">
                                                <p>Credit Card ID*</p>
                                            </div>
                                            <div class="col col-md-8 col-offset-2">
                                                <input type="text" name="card_id" class="form-control" value="<?php echo @$_SESSION['card_id'] ?>" placeholder="" autocomplete="off">
                                            </div>
                                        </div>
                                        <br>
                                        <ul class="list-inline pull-right">
                                        <!--<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                        <li><button type="button" class="btn btn-default next-step">Skip</button></li>-->
                                        <li><button type="submit" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                                    </ul>
                                    </form>
                                    
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <form action="dbFunction.php" >
                                        <div >
                                            <h4>Confirm</h4>
                                            
                                            <?php 
                                            echo '<p> Car : '.@$cBrand[1].' '.@$cModel[1];
                                                        if(@$cType[1] == 'n/a') echo ' '.@$cEngine[1].'</h4>';
                                                        else echo ' '.@$cType[1].'</p>';
                                            ?>
                                            <p>Pick-up Location : <?php echo $_SESSION['pick_up'] ?></p>
                                            <p>Drop-off Location : <?php echo $_SESSION['drop_off'] ?></p>
                                            <p>Start Date : <?php echo $_SESSION['start_date'] ?></p>
                                            <p>End Date : <?php echo $_SESSION['end_date'] ?></p>
                                            <p>Start Time : <?php echo $_SESSION['start_time'] ?></p>
                                            <p>End Time : <?php echo $_SESSION['end_time'] ?></p>
                                            <p>Card Type : <?php echo $_SESSION['card_type'] ?></p>
                                            <p>Card ID : <?php echo $_SESSION['card_id'] ?></p>
                                            
                                            <h4>Drivaer detail</h4>
                                            
                                            <p>Name : <?php echo $_SESSION['name'] ?></p>
                                            <p>Last Name : <?php echo $_SESSION['lastname'] ?></p>
                                            <p>Birth Day : <?php echo $_SESSION['birthday'] ?></p>
                                            <p>Email : <?php echo $_SESSION['email'] ?></p>
                                            <p>Phone number : <?php echo $_SESSION['phone'] ?></p>
                                            <p>Driver License Number : <?php echo $_SESSION['dln'] ?></p>
                                            <ul class="list-inline pull-right">
                                                <li><button type"submit" class="btn btn-primary "> Submit </button></li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </body>

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../js/content.js"></script>

    <?php
    if($secPage){
        echo
            "<script>
                // change tab1 to tab2
                $('#step1').removeClass('active');
                $('#step2').addClass('active');

                $('#tab1').removeClass('active');
                $('#tab1').addClass('disabled'); 
                $('#tab2').removeClass('disabled');
                $('#tab2').addClass('active');   
            </script>";
            $secPage = false;
    }
    if($thirdPage){
        echo
            "<script>
                // change tab1 to tab2
                $('#step1').removeClass('active');
                $('#step3').addClass('active');

                $('#tab1').removeClass('active');
                $('#tab1').addClass('disabled'); 
                $('#tab3').removeClass('disabled');
                $('#tab3').addClass('active'); 
                </script>";
            $thirdPage = false;
    }
    if($fouthPage){
        echo
            "<script>
                // change tab1 to tab2
                $('#step1').removeClass('active');
                $('#step4').addClass('active');

                $('#tab1').removeClass('active');
                $('#tab1').addClass('disabled'); 
                $('#tab4').removeClass('disabled');
                $('#tab4').addClass('active'); 
                </script>";
            $fouthPage = false;
    }
    ?>

        </body>

    </html>