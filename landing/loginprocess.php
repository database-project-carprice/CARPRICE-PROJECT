<?php

    session_start();
     
    
    if($_POST) {
        include "dbcon.php";
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT username , name ,lastname FROM customer WHERE username = '$username' AND password = '$password'";

        $results = mysqli_query($link,$sql);
        $num_row = mysqli_num_rows($results);

        if($num_row == 1) {
            while ($data = mysqli_fetch_array($results)) {
                $_SESSION['name'] = $data['name'];
                $_SESSION['lastname'] = $data['lastname'];
            }
            header("Location: index.php");
            die();
        }
        else {
            header("Location: login.php?login=fail");
            session_destroy();
        }
    }
    // if(!empty($_SESSION['login'])) {
    //         echo 'login as '.$_SESSION['login'].'<a href="?action=logout">[logout]</a>';
    //         die();
    // }
?>