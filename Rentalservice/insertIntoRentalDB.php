<?php
    $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 				or die(mysqli_connect_error());
    $sql = "INSERT INTO location ( city_id ) SELECT city.id FROM city WHERE city.name = '".$_SESSION['pick_up']."'";
    mysqli_query($link, $sql);
    $pick_up = mysqli_insert_id($link);
    $sql = "INSERT INTO location ( city_id ) SELECT city.id FROM city WHERE city.name = '".$_SESSION['drop_off']."'";
    mysqli_query($link, $sql);
    $drop_off = mysqli_insert_id($link);
    $customer_id = $_SESSION['id'];
    $car_id = $_SESSION['car_id'];
    $start_date = $_SESSION['start_date'];
    $end_date = $_SESSION['end_date'];

    $sql = "INSERT INTO rental ( customer_id,car_id,pick_up_location_id,drop_off_location_id,start_date,end_date ) VALUES ( '".$customer_id."','".$car_id."','".$pick_up."','".$drop_off."','".$start_date."','".$end_date."' ) ";
    $result = mysqli_query($link, $sql);
    if(!$result){
       echo mysqli_error($link);
    }else {
        echo "insert to rental sucess!";
    }
     @mysqli_close();
?>