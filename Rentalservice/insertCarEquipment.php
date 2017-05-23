<?php
    @session_start();
        $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
            or die(mysqli_connect_error());
    $equipment_name = $_SESSION['equipment'];
    $carid = $_SESSION['car_id'];
    $start_date = $_SESSION['start_date'];
    $end_date = $_SESSION['end_date'];

    $sql = "INSERT INTO car_equipment  VALUES ( '',(SELECT id FROM equipment WHERE name LIKE '$equipment_name' ),'$carid','$start_date','$end_date' )";
    $result = mysqli_query($link, $sql);
    
    if(!$result) {
        echo $sql."\n";
        echo mysqli_error($link);
        die();
    }
    else {
         $last_eq = mysqli_insert_id($link);
    }
    @mysqli_close();
?>