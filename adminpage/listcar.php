<?php
$link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 			or die(mysqli_connect_error()."</body></html>");
if(@$_POST) {
	$id = implode(", ", $_POST['id']);
	$sql  = "DELETE FROM car WHERE id IN($id)";
	    @mysqli_query($link, $sql);
    }

if(@$_GET['c']&&@$_GET['q']){
	$sql = "SELECT car.id ,category.name , car.brand , car.model , car.production_year , 
                    car.engine , car.engine_type ,car.fuel , car.mileage , car.color , car.pic 
            FROM `car`
                LEFT JOIN category ON car.category_id = category.id WHERE ";
   if(@$_GET['c'] == "category") $sql = $sql.$_GET['c'].".name LIKE '%".$_GET['q']."%'";
   else $sql = $sql."car.".$_GET['c']." LIKE '%".$_GET['q']."%'";
}
else {
	$sql = "SELECT car.id ,category.name , car.brand , car.model , car.production_year , 
                    car.engine , car.engine_type ,car.fuel , car.mileage , car.color , car.pic 
            FROM `car`
                LEFT JOIN category ON car.category_id = category.id";
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
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">   
            <form  method="get">
            <h3> Search </h3>
                <div class = "col-md-6">
                    <div class = "col-md-4 align-self-start">
                        <select class="form-control" name="c" style = "width: 150px ; float: left;">
                            <option value="id">ID</option>
                            <option value="category">category</option>
                            <option value="brand">brand</option>
                            <option value="model">model</option>
                            <option value="production_year">production_year</option>
                            <option value="engine">engine</option>
                            <option value="engine_type">engine_type</option>
                            <option value="fuel">fuel</option>
                            <option value="mileage">mileage</option>
                            <option value="color">color</option>
                            <option value="pic">pic</option>
                        </select>
                        <input type="text" name="content" value="list-car" hidden >
                    </div>
                    <div class = "col-md-4 align-self-start">
                        <input type="text" class="form-control" name="q" autocomplete="off" style = "float:left;"><br>
                    </div>
                    <div class = "col-md-4 <align-self-start></align-self-start>">
                        <input type="submit" class="btn btn-info" value="Search">
                    </div>
                </div>
            </form>
            </div>
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php if(@$_GET['c'] && @$_GET['q']){ echo $_GET['c'].": ".$_GET['q']; }
                                    else echo "All car"; ?> </h2>
                        <ul class="nav navbar-right panel_toolbox">
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <!--<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->

                        <div class="table-responsive">
                            <form method="post">
                                <button id="tmp" class="btn btn-danger">Delete this selected</button>
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title">ID </th>
                                        <th class="column-title">category </th>
                                        <th class="column-title">brand </th>
                                        <th class="column-title">model </th>
                                        <th class="column-title">production_year </th>
                                        <th class="column-title">engine </th>
                                        <th class="column-title">engine_type</th>
                                        <th class="column-title">fuel</th>
                                        <th class="column-title">mileage</th>
                                        <th class="column-title">color</th>
                                        <th class="column-title">pic</th>
                                        <th class="column-title">Action</th>
                                        <th class="bulk-actions" colspan="7">
                                        <option value="id">ID</option>
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
                                                            <a href="formcar.php?action=update&id='.$data['id'].'">edit</a>
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