<!doctype html>
<html>
<body>

<?php
$link = @mysqli_connect("localhost", "root", "", "Car_Rental_System")
 			or die(mysqli_connect_error()."</body></html>");

//กรณีเลือก checkbox แล้วโพสต์กลับขึ้นมา

if(@$_POST) {
	$id = implode(", ", $_POST['id']);
	$sql  = "DELETE FROM customer WHERE id IN($id)";
	    @mysqli_query($link, $sql);
    }

$sql = "SELECT * FROM customer";
$result = mysqli_query($link, $sql);

//อ่านข้อมูลใน result set มาแสดงในแบบตาราง
// echo '<form method="post">';
// echo "<table>";
// echo '<caption>
//  			<button>ลบแถวที่เลือก</button>
//  			<a href="form.php?action=insert">เพิ่มข้อมูล</a></caption>';

//ส่วนหัวตาราง(ชื่อฟิลด์)
// echo "<tr>"; 
$num_fields = mysqli_num_fields($result);
// echo "<th>&nbsp;</th>";
// echo "<th>action</th>";
// for($i = 0; $i < $num_fields; $i++) {
// 	$f = mysqli_fetch_field_direct($result, $i);
// 	echo "<th>".$f->name."</th>";
// }
// echo "</tr>";

while($data = mysqli_fetch_array($result)) {
	// echo  "<tr>";
	// echo '<td><input type="checkbox" name="id[]" value="'.$data['id'].'"></td>';
	// echo "<td>
	// 			<a href=\"form.php?action=update&id={$data['id']}\">แก้ไข</a> |
	// 			<a href=\"form.php?action=delete&id={$data['id']}\">ลบ</a>
	// 		</td>";
			
	//คอลัมน์ต่อๆไปเป็นข้อมูล
	echo '<tr class="even pointer">
            <td class="a-center ">
                <input type="checkbox" class="flat"  name="id[]" value="'.$data['id'].'">
            ';
			
	for($i = 0; $i < $num_fields; $i++) {
		echo "<td>".$data[$i]."</td>";
	}
	echo '
				
			</td>
			
        </tr>';
	// echo "</tr>";
}

// echo "</table>";
// echo "</form>";
mysqli_close($link);
?>
</body>
</html>