<?php
    $link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 				or die(mysqli_connect_error());
                 
    $sql = "UPDATE customer SET name = '".$_SESSION['name']."' , lastname = '".$_SESSION['lastname']."' , birthday = '".$_SESSION['birthday']."' , email = '".$_SESSION['email']."' , phone = '".$_SESSION['phone']."' , dln = '".$_SESSION['dln']."'  WHERE customer.id = '".$_SESSION['id']."'";
    $result = mysqli_query($link, $sql);

    if(!$result){
       echo mysqli_error($link);
    }else {
        echo "update to customer sucess!";
    }
     @mysqli_close();
?>