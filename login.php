<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="handle/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background: url(img/login_bg.jpg);
			background-size: cover;
		}
		.login-form{
			padding: 20px;
			background: #fff;
			border-radius: 10px;
		}
		.heading{
			text-align: center; 
			margin: 60px auto; 
			color: #521b20;
			font-size: 48px;
		}

	</style>
</head>
<body>
	<h1 class="heading font-weight-bold text-uppercase">
		HỆ THỐNG ĐIỆN HOA ĐÀ NẴNG
	</h1>
	<div class="col-sm-4 col-sm-offset-4">
		<div class="login-form">
			<h2 style="text-align: center;" class="text-uppercase"> Đăng nhập </h2>		
			<form name="form1" action="" method="post">
				<!-- <table border="0" align="center" >
					<tr>
						<td>User: </td><td><input style="padding: 10px; " type="text" name="username" size="50"></td>
					</tr>
					<tr>
						<td>Password: </td><td><input style="padding: 10px;" type="password" name="password" size="50"></td>
					</tr>
					<tr align=center>
						<td colspan="2">
							<input class="btn btn-primary"  type="submit" value="OK" onclick="Validate()">
							<input class="btn btn-secondary" type="reset" value="Reset">
						</td>
					</tr>
				</table> -->
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username">
					<small class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				<button type="submit" class="btn btn-primary" onclick="Validate()">OK</button>
				<button type="reset" class="btn btn-secondary">Reset</button>
			</form>		
		</div>
	</div>
	<script>
		function Validate() {
			if(document.form1.username.value == "" || document.form1.password.value == "") {
				alert("Vui lòng nhập thông tin");
				document.form1.action = "";
			} else {
				document.form1.action = "xulidangnhap.php";
			}
		}
	</script>
</body>
</html>
