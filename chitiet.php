<?php
session_start();
?>

<?php
	$result= $_SESSION["rs"];
	if(mysqli_num_rows($result)>0){

	 		echo "<table style='Width=800px; background:#fff;'>";
	 		echo "<tr>";
	 		echo "<th>madh</th>";
	 		echo "<th>masp</th>";
	 		echo "<th>nguoidat</th>";
	 		echo "<th>sdt nguoi dat</th>";
	 		echo "<th>nguooi nhan</th>";
	 		echo "<th>sdt  nguoi nhan</th>";
	 		echo "<th>dia chi nhan</th>";
	 		echo "<th>thoi gian</th>";
	 		echo "<th>don gia</th>";
	 		echo "<th>...</th>";
	 		echo "</tr>";
	 		while ($row= mysqli_fetch_assoc($result)) {
	 			# code...
	 			echo "<tr>";
	 			echo "<td>" . $row["madh"] . "</td>";
	 			echo "<td>" . $row["masp"] . "</td>";
	 			echo "<td>" . $row["nguoidat"] . "</td>";
	 			echo "<td>" . $row["sdtnguoidat"] . "</td>";
	 			echo "<td>" . $row["nguoinhan"] . "</td>";
	 			echo "<td>" . $row["sdtnguoinhan"] . "</td>";
	 			echo "<td>" . $row["diachinhan"] . "</td>";
	 			echo "<td>" . $row["thoigian"] . "</td>";
	 			echo "<td>" . $row["dongia"] . "</td>";
	 			echo "<td><a href='#'>chi tiết</a></td>";
	 			echo "</tr>";
	 		}

	 		echo "</table>";

	 	}else{
	 		echo "NO";
	 	}
?>