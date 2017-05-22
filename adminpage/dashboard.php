<?php 
    $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 			or die(mysqli_connect_error()."</body></html>");
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($link, $sql);
    $num_customer = mysqli_num_rows($result);

    $sql = "SELECT * FROM rental";
    $result = mysqli_query($link, $sql);
    $num_rental = mysqli_num_rows($result);
    
    $sql = "SELECT * FROM car";
    $result = mysqli_query($link, $sql);
    $num_car = mysqli_num_rows($result);

    date_default_timezone_set('Asia/Bangkok');
	

?>
<div class="right_col" role="main">
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-user-circle-o"></i></div>
                <div class="count"><?php echo $num_customer; ?></div>
                <h3>New Sign ups</h3>
                <p>Number of user today.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-calendar-check-o"></i></div>
                <div class="count"><?php echo $num_rental; ?></div>
                <h3>New rent today.</h3>
                <p>Many of process</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                <div class="count">47</div>
                <h3>New request </h3>
                <p>activate driver license</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-car"></i></div>
                <div class="count"><?php echo $num_car; ?></div>
                <h3>Car in stock</h3>
                <p>Manage stock</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-user-circle-o"></i></div>
               
                <div class="count"><?php echo explode('/',date('Y/m/d '))[2]; ?></div>
                
            </div>
        </div>
    </div>
</div>