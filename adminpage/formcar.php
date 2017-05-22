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
$link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 			or die(mysqli_connect_error());

//ถ้าเป็นการ Postback เพื่อส่งข้อมูลจากฟอร์มกลับเข้ามา
if(isset($_POST['id'])) {
	//นำข้อมูลจากตัวแปร $_POST ที่เหลือมาเรียงต่อเป็นสตริงเดียวกัน โดยคั่นด้วย ', '
	$values = implode("', '", $_POST);  //ลักษณะผลลัพธ์ เช่น a', 'b', 'c', 'd
	
	//ปิดหัวท้ายด้วย ' เพื่อให้ครบคู่ ลักษณะผลลัพธ์จะเป็น 'a', 'b', 'c', 'd'
	$values = "'" . $values . "'";
	
	//นำข้อมูลนั้นมาสร้างเป็น SQL ในแบบคำสั่ง REPALCE
	$sql = "REPLACE INTO car(id,category_id,brand,model,production_year,engine,engine_type,fuel,mileage,color,pic) VALUES($values)";
	$replace = mysqli_query($link, $sql);
	if(!$replace) {
		echo mysqli_error($link).$sql;
	}
	else {
		echo "<h3>ข้อมูลถูกบันทึกแล้ว</h3>";
		back();
	}
}

// ------------------------------------------------------------------
//ส่วนต่อไปนี้สำหรับการเชื่อมโยงมาจากเพจแสดงข้อมูล(index.php)
if(isset($_GET['action'])) {
	$action = $_GET['action'];
	
	//ถ้าเป็นเพิ่มข้อมูล ก็ไม่ต้องทำอะไร เพื่อให้ฟอร์มนั้นว่างเปล่าสำหรับรับข้อมูลใหม่
	if($action == "insert") {
		$h = "เพิ่มข้อมูล";
	}
	//ถ้าเป็นการลบ ก็นำค่า id ไปกำหนดเป็นเงื่อนไขการลบ
	else if($action == "delete") {
		$id = $_GET['id'];
		$delete = mysqli_query($link, "DELETE FROM car WHERE id = $id");
		if(!$delete) {
			echo mysqli_error($link);
		}
		else {
			echo "<h3>ข้อมูลถูกลบแล้ว</h3>";
		}
 		back();
	}
	//ถ้าเป็นการแก้ไขข้อมูล ต้องอ่านข้อมูลเดิมมาเติมลงในฟอร์ม
	else if($action == "update") {		
		$id = $_GET['id'];
		$h = "แก้ไขข้อมูล";
		$result = mysqli_query($link, "SELECT * FROM car WHERE id = $id");
		$data = mysqli_fetch_array($result);
	}
}
function back() {
	global $link;
 	mysqli_close($link);
	exit("<p><a href=\"index.php?content=list-car\">ย้อนกลับ</a></p></body></html>");
}	
mysqli_close($link);
?>
<form method="post">
	<div class="x_panel" style = "margin-top: 120px">
			<div class="x_title" style = "padding : 0 215px">
				<!--<h3><?php echo $h; ?></h3>-->
				<h2>Edit Profile </h2>
                <input name="id" value="<?php echo @$data['id']; ?>" hidden >
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
			
			<form class="form-horizontal form-label-left input_mask">
				<div class = "container" style = "padding : 0 200px; ">
					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback" style = "margin-bottom: 20px">
						<input type="text" class="form-control has-feedback-left" name="category_id" value="<?php echo @$data['category_id']; ?>">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback" style = "margin-bottom: 20px">
						<input type="text" class="form-control" name="brand" value="<?php echo @$data['brand']; ?>">
						<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback" style = "margin-bottom: 20px">
						<input type="text" class="form-control has-feedback-left" name="model" value="<?php echo @$data['model']; ?>">
						<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback" style = "margin-bottom: 20px">
						<input type="text" class="form-control"  name="production_year" value="<?php echo @$data['production_year']; ?>">
						<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
					</div>

					<div class="container" style = "margin-bottom: 20px">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Engine</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="engine" value="<?php echo @$data['engine']; ?>">
							</div>
					</div>
					
					<div class="container" style = "margin-bottom: 20px">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Engine_type</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="engine_type" value="<?php echo @$data['engine_type']; ?>">
						</div>
					</div>

					<div class="container" style = "margin-bottom: 20px">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Fuel</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="fuel" value="<?php echo @$data['fuel']; ?>">
						</div>
					</div>

					<div class="container" style = "margin-bottom: 20px">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Mileage</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="mileage" value="<?php echo @$data['mileage']; ?>">
						</div>
					</div>

					<div class="container" style = "margin-bottom: 20px">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Color</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="color" value="<?php echo @$data['color']; ?>">
						</div>
					</div>

					<div class="container" style = "margin-bottom: 20px">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Pic</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="pic" value="<?php echo @$data['pic']; ?>">
						</div>
					</div>
					<div class="container" style = "margin-bottom: 20px">
						<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
							&nbsp;&nbsp;<a href="index.php?content=list-car" type="button" class="btn btn-primary">Back</a>
							<button class="btn btn-primary" type="reset">Reset</button>
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
