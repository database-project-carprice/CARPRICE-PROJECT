<!doctype html>
<html>
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
		$result = mysqli_query($link, "SELECT * FROM customer WHERE id = $id");
		$data = mysqli_fetch_array($result);
	}
}
function back() {
	global $link;
 	mysqli_close($link);
	exit("<p><a href=\"index.php?content=list-user\">ย้อนกลับ</a></p></body></html>");
}
mysqli_close($link);
?>
<h3><?php echo $h; ?></h3>
<form method="post">

        <input type="text" name="id" value="<?php echo @$data['id']; ?>" hidden><br>
		
		<label>Name</label>
        <input type="text" name="name" value="<?php echo @$data['name']; ?>"><br>

        <label>Last name</label>
        <input type="text" name="lastname" value="<?php echo @$data['lastname']; ?>"><br>

        <label>Birthday</label>
       	<input type="date" name="birthday" value="<?php echo @$data['birthday']; ?>"> <br>
	
 		<label>Email</label>
      	<input type="text" name="email" value="<?php echo @$data['email']; ?>"><br>
        
		<label>Phone number</label>
       	<input type="text" name="phone" value="<?php echo @$data['phone']; ?>"> <br>

		<label>Driver license</label>
		<input type="text" name="dln" value="<?php echo @$data['dln']; ?>"><br>

        
       <label>&nbsp;</label><button>Send</button>
       
       &nbsp;&nbsp;<a href="index.php?content=list-user">Back</a>
</form>

</body>
</html>
