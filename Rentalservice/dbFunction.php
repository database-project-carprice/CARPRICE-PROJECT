<?php
    session_start();
    echo $_SESSION['pick_up']."\n";
    echo $_SESSION['drop_off']."\n";
    echo $_SESSION['start_date']."\n";
    echo $_SESSION['end_date']."\n";
    echo $_SESSION['start_time']."\n";
    echo $_SESSION['end_time']."\n";
    echo $_SESSION['card_type']."\n";
    echo $_SESSION['card_id']."\n";
    echo $_SESSION['name']."\n";
    echo $_SESSION['lastname']."\n";
    echo $_SESSION['birthday']."\n";
    echo $_SESSION['email']."\n";
    echo $_SESSION['phone']."\n";
    echo $_SESSION['dln']."\n";
    
    
    // include 'insertIntoRentalDB.php';
    // include 'insertIntoReservationDB.php';
    // include 'updateCustomerDB.php';

?>