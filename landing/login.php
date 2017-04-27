<?php

    session_start();
     if(@$_GET['action'] == 'logout') {
        session_destroy();
        header('Location: login.php');
        die();
    }
    
    if($_POST) {
        include "dbcon.php";
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT id, name ,lastname FROM customer WHERE name = '$username' AND password = '$password'";

        $results = mysqli_query($link,$sql);
        $num_row = mysqli_num_rows($results);

        // if($num_row == 1) {
        //     echo 'success';
        //     $_SESSION['login'] = $username;
        // }

        // else {
        //     echo 'failed';
        // }
        // die();

        if($num_row == 1) {
            while ($data = mysqli_fetch_array($results)) {
                $_SESSION['name'] = $data['name'];
                $_SESSION['lastname'] = $data['lastname'];
            }
            header("Location: index.php");
            die();
        }
    }
    if(!empty($_SESSION['login'])) {
            echo 'login as '.$_SESSION['login'].'<a href="?action=logout">[logout]</a>';
            die();
    }
?>
    <!doctype html>
    <html>
    <body>
        
        <form href="?action=login" action method="post">
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="login" value="Login!"  />
        </form>
    </body>
</html>