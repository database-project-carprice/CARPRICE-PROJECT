<!doctype html>
<html>
<meta charset="utf-8">

<body>
<?php
$link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 			or die(mysqli_connect_error()."</body></html>");
 
if($_POST) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	$msg = nl2br($msg);
	$type = @$_POST['msg_type'];
	
	$sql = @"INSERT INTO comment VALUES(
				'', '$name', '$email', '$msg', '$msg_type', NOW())";
	mysqli_query($link, $sql);
}
?>
<fieldset><legend>Comment</legend>
<form method="post">
	<input type="text" name="name" placeholder="name" required>
    <input type="email" name="email" placeholder="email"><br>
	<textarea name="msg" placeholder="message"></textarea><br>
    <select name="type">
    	<option value="c">comment</option>
    	<option value="q">contract</option>
    </select>
    <button>send</button>
</form>
</fieldset><br>
<?php
include "datetime-ago.php";  //รายละเอียดอยู่ในบทที่ 5
//อ่านข้อมูลจากตาราง โดยเลือกเอา 30 แถวแรก(เรียงจากวันเวลาล่าสุด)
$sql = "SELECT * FROM comment
			ORDER BY date_posted DESC
			LIMIT 30";

$rs = mysqli_query($link, $sql);
if(@mysqli_num_rows($rs) == 0) {
	echo "<h3>ยังไม่มีข้อความ</h3>";
}
else {
	echo '<div id="msg-container">';
	$first = true;
	while($gb = mysqli_fetch_array($rs)) {
		//ถ้าไม่ใช่ข้อความแรก ให้แสดงเส้นคั่นไว้ด้านบน
		if(!$first) {
			echo "<hr>";
		}
		echo "<span class=\"name\">
		 			<b>{$gb['name']}</b>";
					
		if(!empty($gb['email'])) {
					echo "[{$gb['email']}]";
		}
		echo "</span>";
				
		$ago = datetime_ago($gb['date_posted']);
		echo "<span class=\"ago\">$ago</span>
		 		<br class=\"clear\">";
				
		echo "<span class=\"msg\">{$gb['message']}</span>";
		$first = false;
	}
	echo '</div>';
}
mysqli_close($link);
?>
</body>
</html>