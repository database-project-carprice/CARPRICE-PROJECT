<?php

    if($_POST) {
        $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 				or die(mysqli_connect_error()."</body></html>");

        $user = $_POST['username'];
        $pass = $_POST['password'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dln = $_POST['dln'];
        $sql = "REPLACE INTO customer(username,password,name,lastname,birthday,email,phone,dln) VALUES('$user','$pass','$name','$lastname','$birthday','$email','$phone','$dln')";
        $replace = mysqli_query($link, $sql);
        
        if(!$replace) {
		    echo mysqli_error($link);
            echo $sql;
	    }
	    else {
		    header("Location: regis.php?regis=success");
            mysqli_close();
            die();
	    }
    }
    
?>