<?php

    session_start();
    $slocated = $_POST['slocated'];
    $elocated = $_POST['elocated'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $stime = $_POST['stime'];
    $etime = $_POST['etime'];
    
    
    echo "slocated = ".$slocated."elocated = ".$elocated."sdate = ".$sdate."edate = ".$edate."stime = ".$stime."etime = ".$etime;
?>

<