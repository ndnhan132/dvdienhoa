<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	 	$conn= mysqli_connect("localhost", "root", "");
	 	if(!$conn){
	 		die("kntb" . mysqli_connect_error());
	 	}
	 ?>

	 <?php 
	 	mysqli_query($conn, "SET NAMES UTF8");
	 	mysqli_select_db($conn, "dienhoa");

	 	/*$query= "INSERT INTO `donhang`(`madh`, `masp`, `nguoidat`, `sdtnguoidat`, `nguoinhan`, `sdtnguoinhan`, `diachinhan`, `thoigian`, `dongia`) VALUES ('insert1', 'SP01', 'insert1', 'insert1', 'insert1', 'insert1', 'insert1', '2018-05-18 14:00:00', 'insert1')";

	 	if (mysqli_multi_query($conn, $query)) {
		    echo "New records created successfully";
		} else {
		    echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}
		$result= mysqli_query($conn, $query);
*/

		/*$query="DELETE FROM donhang where madh='insert1'";
		if (mysqli_query($conn, $query)) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . mysqli_error($conn);
		}*/

/*		$query= "UPDATE donhang SET nguoidat='TOIDATHANG' where madh= 'dh08'";
		if (mysqli_query($conn, $query)) {
		    echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}*/




	 	 $query= " SELECT * FROM donhang";

	 	// $query="SELECT * from donhang where sdtnguoinhan like '%2%'";
	 		$result= mysqli_query($conn, $query);
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


</body>
</html>
