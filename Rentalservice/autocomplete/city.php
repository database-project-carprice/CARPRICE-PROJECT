<?php
	
	$link = mysqli_connect("localhost", "root", "", "Car_Rental_System");
	$sql = "SELECT *  FROM city ";
	
	$result = mysqli_query($link, $sql);
	if(mysqli_num_rows($result) > 0) {
		//อ่านข้อมูลผลลัพธ์มาสร้างเป็นอาร์เรย์ของ PHP
		$a = array();
		while($data = mysqli_fetch_array($result)) {
			array_push($a, $data[1]);
		}
		//แปลงอาร์เรย์ของ PHP เป็น JSON แล้วส่งกลับ
		echo json_encode($a); 
	}	
	mysqli_close($link);
?>