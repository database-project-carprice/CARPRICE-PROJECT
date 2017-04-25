<!doctype html>
<html>
<head>
<meta charset="utf-8">


</head>

<body>
<?php
if($_POST) {
 	$link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 				or die(mysqli_connect_error()."</body></html>");
				
	$title = $_POST['title'];
	$content = $_POST['content'];
	$url = $_POST['url'];
	
	$sql = "INSERT INTO sitesearch VALUES('', '$title', '$url', '$content')";
	$r = mysqli_query($link, $sql);
	if($r) {
		echo "<h3>เพิ่ม URL ลงในฐานข้อมูลแล้ว</h3>";
	}
	mysqli_close($link);
}
?>
<form method="post">
  <div id="top">เพิ่ม URL สำหรับการสืบค้น</div>
	<input type="text" name="title" placeholder="ชื่อเพจ (Title)" required>  <br>
    <textarea name="content" placeholder="สรุปเนื้อหา ให้ครอบคลุมคำสำคัญทั้งหมดในเพจ"></textarea><br>
    <input type="text" name="url" placeholder="url ของเพจ...ต้องขึ้นต้นด้วย http:// หรือ https://" required>   <br>
<div id="bottom">
	<button id="back" type="button" onclick="location='index.php'">ย้อนกลับ</button>
	<button id="submit">ส่งข้อมูล</button><br class="clear">
</div>
</form>
</body>
</html>