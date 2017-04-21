<?php

    session_start();
    if($_POST) {
        include "dbcon.php";
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT id, name FROM customer WHERE name = '$username' AND password = '$password'";

        $results = mysqli_query($link,$sql);
        $num_row = mysqli_num_rows($results);

        if($num_row == 1) {
            echo 'success';
        }

        else {
            echo 'failed';
        }
        die();
    }
?>
    <!doctype html>
    <html>
    <body>
        
        <form action method="post">
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" value="Login!" />
        </form>
    </body>
</html>