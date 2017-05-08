<?php
    @session_start();
    $insert = 0;
    if(@$_POST['slocated'] != NULL ) {
        $slocated = $_POST['slocated'];
        $insert++;
    }
    else $slocated = "Defult Location";
    if(@$_POST['elocated'] != NULL ) {
        $elocated = $_POST['elocated'];
        $insert++;
    }
    else $elocated = "Defult Location";
    if(@$_POST['sdate'] != NULL ) {
        $sdate = $_POST['sdate'];
        $insert++;
    }
    else $sdate = "Defult Date";
    if(@$_POST['edate'] != NULL ) {
        $edate = $_POST['edate'];
        $insert++;
    }
    else $edate = "Defult Date";
    if(@$_POST['stime'] != NULL ) {
        $stime = $_POST['stime'];
        $insert++;
    }
    else $stime = "Defult Time";
    if(@$_POST['etime'] != NULL ) {
        $etime = $_POST['etime'];
        $insert++;
    }
    else $etime = "Defult Time";

    
    // if($insert == 6){
    //      $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 	// 			or die(mysqli_connect_error()."</body></html>");

    //     // $values = implode("', '", $_POST);
    //     // $values = "NULL,'" . $values . "'";
    //     //insert into location pickup , dropoff
    //     $sql = "INSERT INTO location ( city_id ) SELECT city.id FROM city WHERE city.name = '".$_POST['slocated']."'";
    //     mysqli_query($link, $sql);
    //     $pick_up = mysqli_insert_id($link);
    //     $sql = "INSERT INTO location ( city_id ) SELECT city.id FROM city WHERE city.name = '".$_POST['elocated']."'";
    //     mysqli_query($link, $sql);
    //     $drop_off = mysqli_insert_id($link);
    //     $customer_id = $_SESSION['id'];

    //     $sql = "INSERT INTO reservation ( pick_up_location_id,drop_off_location_id,customer_id ) VALUES ( '".$pick_up."','".$drop_off."','".$customer_id."' ) ";
    //     $result = mysqli_query($link, $sql);
        
        
        
    //     if(!$insertslo) {
	// 	    echo mysqli_error($link)."Start location error.";
	//     }
	//     else {
	// 	    header("Location: regis.php?regis=success");
    //         mysqli_close();
    //         die();
	//     }
    // }

?>