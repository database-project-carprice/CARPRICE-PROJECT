<?php

    if($_POST) {
        $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 				or die(mysqli_connect_error()."</body></html>");

        $values = implode("', '", $_POST);
        $values = "NULL,'" . $values . "'";
        $sql = "REPLACE INTO customer VALUES($values)";
        $replace = mysqli_query($link, $sql);
        
        if(!$replace) {
		    echo mysqli_error($link);
	    }
	    else {
		    header("Location: regis.php?regis=success");
            mysqli_close();
            die();
	    }
    }
    
?>