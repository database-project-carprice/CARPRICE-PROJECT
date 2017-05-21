<?php
    @session_start();
        $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
            or die(mysqli_connect_error());
    $customer_id = $_SESSION['id'];

    $sql = "INSERT INTO reservation ( rental_id,pick_up_location_id,drop_off_location_id,customer_id,card_type,card_id ) VALUES ( '".$last_id."','".$pick_up."','".$drop_off."','".$customer_id."','".$_SESSION['card_type']."','".$_SESSION['card_id']."' ) ";
    $result = mysqli_query($link, $sql);
    
    if(!$result) {
        echo mysqli_error($link);
    }
    else {
        echo "insert into reservation success";
    }
    @mysqli_close();
?>