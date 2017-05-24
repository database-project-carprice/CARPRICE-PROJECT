<?php
    @session_start();
        $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
            or die(mysqli_connect_error());
    $customer_id = $_SESSION['id'];

    $sql = "INSERT INTO reservation ( rental_id,customer_id,start_date,end_date,card_type,card_id,status ) VALUES ( '".$last_id."','".$customer_id."','".$_SESSION['start_date']."','".$_SESSION['end_date']."','".$_SESSION['card_type']."','".$_SESSION['card_id']."','waiting' ) ";
    $result = mysqli_query($link, $sql);
    
    if(!$result) {
        echo $sql."\n";
        echo mysqli_error($link);
        die();
    }
    else {
        echo "insert into reservation success";
    }
    @mysqli_close();
?>