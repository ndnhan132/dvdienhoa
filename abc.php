<?php
session_start();
?>

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
						 // echo "<td><button onclick='chiTiet($mh)'>chi tiết</button></td>";
						 echo '<td><button onclick="chiTiet()">ZZZ</button></td>';
			 			echo "</tr>";
			 		}

			    echo "</tbody>";
			  echo "</table>";
			}else{
				echo "NO";
			}
	 ?>

	 <script type="text/javascript">
	 	function chiTiet() {
	 		// <?php
	 		// $conn= mysqli_connect("localhost", "root", "");
	 		// if(!$conn){
	 		// 	die("kntb" . mysqli_connect_error());
	 		// }
	 		// mysqli_query($conn, "SET NAMES UTF8");
		 	// mysqli_select_db($conn, "dienhoa");
		 	// $query="SELECT * from donhang where madh='$madh'";
	 		// $result= mysqli_query($conn, $query);

	 		// $_SESSION["rs"]=$result;


	 		// ?>


	 		var xmlhttp;
                if (window.XMLHttpRequest)
                {
                    xmlhttp = new XMLHttpRequest();
                }
                 xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("result").innerHTML = xmlhttp.responseText;
                    }
                };
                 
                xmlhttp.open("GET", "test.php"?param="+mh, true);
                xmlhttp.send();
	 	}
	 </script>