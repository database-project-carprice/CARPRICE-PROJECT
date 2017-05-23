<!doctype html>
<html>
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
<body>
<?php
session_start();
$link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 			or die(mysqli_connect_error());

//ถ้าเป็นการ Postback เพื่อส่งข้อมูลจากฟอร์มกลับเข้ามา
if(isset($_POST['id'])) {
	
	$id = $_POST['id'];
	@$mileage = $_POST['mileage'];
	//นำข้อมูลนั้นมาสร้างเป็น SQL ในแบบคำสั่ง REPALCE
	$sql = "UPDATE car SET mileage = $mileage WHERE id = $id";
	$replace = mysqli_query($link, $sql);
	if(!$replace) {
		echo mysqli_error($link).$sql;
		die();
	}
	else {
		echo "<h3>Success</h3>";
		back();
	}
}

if(isset($_GET['id'])) {		
	$id = $_GET['id'];
	$_SESSION['ren_id'] = $id;
	
	$h = "แก้ไขข้อมูล";
	$result = mysqli_query($link, "SELECT id,mileage FROM car
										WHERE  car.id = (SELECT rental.car_id FROM rental WHERE rental.id = (SELECT rental_id FROM reservation WHERE reservation.id = $id))");
	$data = mysqli_fetch_array($result);
}
function back() {
	global $link;
 	mysqli_close($link);
	exit("<p><a href=\"index.php?action=offline&id=".$_SESSION['ren_id']."\">back</a></p></body></html>");
}	
mysqli_close($link);
?>
<form method="post">
	<div class="x_panel" style = "margin-top: 120px">
			<div class="x_title" style = "padding : 0 215px">
				<!--<h3><?php echo $h; ?></h3>-->
				<h2>Return </h2>
				<input name="id" value="<?php echo @$data['id']; ?>" hidden>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
			
			<form class="form-horizontal form-label-left input_mask">
				<div class = "container" style = "padding : 0 200px; ">
					
					
					<div class="container" style = "margin-bottom: 20px">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Insert Mileage</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="mileage" value="<?php echo @$data['mileage']; ?>">
						</div>
					</div>

					<div class="container" style = "margin-bottom: 20px">
						<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
							&nbsp;&nbsp;<a href="index.php" type="button" class="btn btn-primary">Back</a>
							
							<label>&nbsp;</label><button type="submit" class="btn btn-primary">Send</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</form>

</body>
</html>
