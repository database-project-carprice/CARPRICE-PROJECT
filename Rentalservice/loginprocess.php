<?php

    session_start();
     
    
    if($_POST) {
        $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 				or die(mysqli_connect_error()."</body></html>");

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";

        $results = mysqli_query($link,$sql);
        $num_row = mysqli_num_rows($results);

        if($num_row == 1) {
            while ($data = mysqli_fetch_array($results)) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['lastname'] = $data['lastname'];
                $_SESSION['birthday'] = $data['birthday'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['phone'] = $data['phone'];
                $_SESSION['dln'] = $data['dln'];
            }
            header("Location: index.php");
            die();
        }
        else {
            header("Location: login.php?login=fail");
            session_destroy();
        }
    }
    mysqli_close();
    // if(!empty($_SESSION['login'])) {
    //         echo 'login as '.$_SESSION['login'].'<a href="?action=logout">[logout]</a>';
    //         die();
    // }
?>