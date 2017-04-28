<?php
    include "dbcon.php";

    

    if($_POST) {
        $values = implode("', '", $_POST);
        $values = "NULL,'" . $values . "'";
        $sql = "REPLACE INTO customer VALUES($values)";
        $replace = mysqli_query($link, $sql);
        
        if(!$replace) {
		    echo mysqli_error($link);
        
	    }
	    else {
		    header("Location: regis.php?regis=success");
            die();
	    }
    }
?>