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
	$sql = "REPLACE INTO customer(id,name,lastname,birthday,email,phone,dln) VALUES($values)";
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
		$delete = mysqli_query($link, "DELETE FROM customer WHERE id = $id");
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
		$result = mysqli_query($link, "SELECT * FROM reservation WHERE id = $id");
		$data = mysqli_fetch_array($result);
	}
}
function back() {
	global $link;
 	mysqli_close($link);
	exit("<p><a href=\"index.php\">ย้อนกลับ</a></p></body></html>");
}	
mysqli_close($link);
?>
<form method="post">
	<div class="x_panel" style = "margin-top: 120px">
			<div class="x_title" style = "padding : 0 215px">
				<!--<h3><?php echo $h; ?></h3>-->
				<h2>Return </h2>
				<input name="id" value="<?php echo @$data['id']; ?>" hidden>
				<!--<ul class="nav navbar-right panel_toolbox">
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
				</ul>-->
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
			
			<form class="form-horizontal form-label-left input_mask">
				<div class = "container" style = "padding : 0 200px; ">
					
					
					<div class="container" style = "margin-bottom: 20px">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Insert Mileage</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="dln" value="<?php echo @$data['mileage']; ?>">
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
