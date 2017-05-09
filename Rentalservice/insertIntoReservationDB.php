<?php
    @session_start();
        $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
            or die(mysqli_connect_error());
    $customer_id = $_SESSION['id'];

    $sql = "INSERT INTO reservation ( pick_up_location_id,drop_off_location_id,customer_id ) VALUES ( '".$pick_up."','".$drop_off."','".$customer_id."' ) ";
    $result = mysqli_query($link, $sql);
    
    if(!$result) {
        echo mysqli_error($link);
    }
    else {
        echo "insert into reservation success";
    }
    @mysqli_close();
?>