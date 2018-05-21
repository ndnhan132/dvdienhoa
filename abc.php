<?php
		$conn= mysqli_connect("localhost", "root", "");
	 	if(!$conn){
	 		die("kntb" . mysqli_connect_error());
	 	}

		mysqli_query($conn, "SET NAMES UTF8");
	 	mysqli_select_db($conn, "dienhoa");


		$query="SELECT * from donhang where sdtnguoinhan like '%0%'";
	 	$result= mysqli_query($conn, $query);
	 	if(mysqli_num_rows($result)>0){
			  echo "<table class='table table-bordered'>";
			    echo "<thead>";
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
			    echo "</thead>";
			   echo "<tbody>";
					$i=1;
			      while ($row= mysqli_fetch_assoc($result)) {
			 			echo "<tr>";
			 			echo '<td id="js-madh-'.$i . '">' . $row["madh"] . "</td>";
			 			echo "<td>" . $row["masp"] . "</td>";
			 			echo "<td>" . $row["nguoidat"] . "</td>";
			 			echo "<td>" . $row["sdtnguoidat"] . "</td>";
			 			echo "<td>" . $row["nguoinhan"] . "</td>";
			 			echo "<td>" . $row["sdtnguoinhan"] . "</td>";
			 			echo "<td>" . $row["diachinhan"] . "</td>";
			 			echo "<td>" . $row["thoigian"] . "</td>";
						echo "<td>" . $row["dongia"] . "</td>";
						//  echo '<td><input type="button" onclick="chiTiet1();" value="aaa"></td>';
						 //echo "<td><button onclick='chiTiet1($abc)'>...</button></td>"; 
						//  echo "<td>". var_dump("$abc") ."</td>";
						echo "<td><input type='button' onclick='chiTiet($i)' value='x'></td>";
						echo "</tr>";
						$i++;
			 		}

			    echo "</tbody>";
			  echo "</table>";
			}else{
				echo "NO";
			}
?>

<script src="handle/js/jquery-3.2.1.min.js"></script>
		<script src="handle/js/bootstrap.min.js"></script>
		<script src="handle/js/func.js"></script>