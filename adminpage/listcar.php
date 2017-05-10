<?php
$link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 			or die(mysqli_connect_error()."</body></html>");
if(@$_POST) {
	$id = implode(", ", $_POST['id']);
	$sql  = "DELETE FROM customer WHERE id IN($id)";
	    @mysqli_query($link, $sql);
    }

if(@$_GET['c']&&@$_GET['q']){
	$sql = "SELECT id,name,lastname,birthday,email,phone,dln FROM customer WHERE ".$_GET['c']." LIKE '%".$_GET['q']."%'";
}
else {
	$sql = "SELECT id,name,lastname,birthday,email,phone,dln FROM customer";
}

$result = mysqli_query($link, $sql);
$num_fields = mysqli_num_fields($result);

mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin page</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../css/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../css/adminpage.css" rel="stylesheet">
</head>


<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="clearfix"></div>
            <!---->
            <h1>Car</h1>
            <form  method="get">
                <div >
                        <select name="c">
                            <option value="id">ID</option>
                            <option value="name">Name</option>
                            <option value="lastname">Lastname</option>
                            <option value="birthday">Birthday</option>
                            <option value="email">Email</option>
                            <option value="phone">Phone number</option>
                            <option value="dln">Driver license</option>
                        </select>
                    <input type="text" name="q" autocomplete="off"><br>
                    <button type="submit" > Search</button>
                </div>
            </form>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php if(@$_GET['c'] && @$_GET['q']){ echo $_GET['c'].": ".$_GET['q']; }
                                    else echo "All customer"; ?> </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <!--<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->

                        <div class="table-responsive">
                            <form method="post">
                                <button id="tmp">Delete this selected</button>
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title">ID </th>
                                        <th class="column-title">Name </th>
                                        <th class="column-title">Lastname </th>
                                        <th class="column-title">Birthday </th>
                                        <th class="column-title">Email </th>
                                        <th class="column-title">Phone number </th>
                                        <th class="column-title">Driver License Number</th>
                                        <th class="column-title">Action</th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php 
                                            while($data = mysqli_fetch_array($result)) {
                                                echo '<tr class="even pointer">
                                                        <td class="a-center ">
                                                            <input type="checkbox" class="flat"  name="id[]" value="'.$data['id'].'">
                                                        ';
                                                        
                                                for($i = 0; $i < $num_fields; $i++) {
                                                    echo "<td>".$data[$i]."
                                                    
                                                    ";
                                                }
                                                echo '
                                                                
                                                            </td>
                                                            <td>
                                                            <a href="form.php?action=update&id='.$data['id'].'">แก้ไข</a>
                                                            </td>
                                                        </td>
                                                        
                                                    </tr>';
                                            }
                                        ?>
                                </tbody>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php @mysqli_close($link); ?>