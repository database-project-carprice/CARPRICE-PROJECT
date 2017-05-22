<?php
   if(@$_POST['name']){
    $link = mysqli_connect("localhost", "root", "", "Car_Rental_System");
    $sql = "INSERT INTO `comment` (`name`) VALUES ('".$_POST['name']."')";
    mysqli_query($link, $sql);
    mysqli_close($link);
    echo $_POST['name'];
    }
?>