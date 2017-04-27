<?php

    session_start();
    if(@$_GET['action'] == 'logout') {
        session_destroy();
        header('Location: ?success');
        die();
    }
    if($_POST) {
        include "dbcon.php";
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT id, name FROM customer WHERE name = '$username' AND password = '$password'";

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
            $_SESSION['login'] = $username;
            header('Location: index.php');
            while ($data = mysqli_fetch_array($results)) {
                echo $data['name'];
            }
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
        
        <form action method="post">
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="login" value="login" />
        </form>
    </body>
</html>