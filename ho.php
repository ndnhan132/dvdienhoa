<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="handle/css/style.css">
 	<link rel="stylesheet" href="handle/css/bootstrap.min.css">
 	<!-- <script src="handle/js/jquery-3.2.1.min.js"></script> -->
</head>
<body>
<?php
	$conn=mysqli_connect("localhost", "root","");
	if (!$conn) {
    	die("Kết nối thất bại: " . mysqli_connect_error());
	}
?>

	<div class="header">
		<?php
			include("hd.php");
		?>
	</div>
	<div class="content">
		<div class="l-content">
			<?php
				include("lf.php");
			?>
		</div>
		<div class="c-content">
			<div class="menu">
				<?php
					include("menu.php");
				?>
			</div>
			<div class="show">
				<?php 
					mysqli_query($conn,"SET NAMES UTF8");
					mysqli_select_db($conn,"dienhoa");
					$query= "SELECT madh, masp, nguoidat FROM donhang";
					$result= mysqli_query($conn, $query);

					if(mysqli_num_rows($result)>0){
						while ($row= mysqli_fetch_assoc($result)){
							# code...
							echo "madh: " .$row["madh"]. "  masp: ".$row["masp"]. " nguoidat ". $row["nguoidat"] ."<br>";
						}
					}else{
						echo "0 result";
					}
				 ?>
			</div>
		</div>
		<div class="r-content">
			<?php
				include("ri.php");
			?>
		</div>
	</div>
</body>
</html>
