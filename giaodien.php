<!DOCTYPE html>
<html>
<head>
	<title>Điện hoa Đà Nẵng</title>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="handle/css/style.css">
 	<link rel="stylesheet" href="handle/css/bootstrap.min.css">
 	<!-- <script src="handle/js/jquery-3.2.1.min.js"></script> -->
</head>
<body>
	<div class="header">
		 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:  0; padding: 10px 20px;">
            <div class="navbar-header">
           		<a class="navbar-brand text-uppercase" href="#"><strong>Điện hoa đà nẵng</strong></a>
            </div>
            <div class="navbar-right">
            	<a href="#">
            		<span class="glyphicon glyphicon-user icon"></span>
            		<span class="admin-text"> Admin</spann>
            </div>
         </nav>
	</div>
	<div class="content">
		<div class="navbar-default sidebar">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav in">
					<li><a class="active" href="#"><strong> Danh mục sản phẩm </strong></a></li>
					<li><a href="#">Bó hoa tươi</a></li>
					<li><a href="#">Hộp hoa tươi</a></li>
					<li><a href="#">Lẵng hoa tươi</a></li>
					<li><a href="#">Hoa chúc mừng</a></li>
					<li><a href="#">Hoa chia buồn</a></li>
				</ul>
			</div>
			<div class="contact">
				<p><strong>Điện Hoa Đà Nẵng</strong></p>
				<p>SĐT: 0978678898</p>
				<p>ĐC: 60 Ngô Sỹ Liên, Liên chiểu, Đà Nẵng</p>
			</div>
		</div>
		<div class="main-content">
			<h2>Quản lý đơn hàng</h2>
		 	<div class="row">
		        <div class="col-sm-6 col-sm-offset-2">
		            <div id="imaginary_container"> 
		                <div class="input-group stylish-input-group">
		                    <input type="text" class="form-control"  placeholder="Tìm kiếm đơn hàng" >
		                    <span class="input-group-addon">
		                        <button type="submit" onclick="chiTiet1()">
		                            <span class="glyphicon glyphicon-search"></span>
		                        </button>  
		                    </span>
		                </div>
		            </div>
		        </div>
		        <div class="col-sm-4">
		        	<button class="add">Thêm đơn hàng</button>
		        </div>
			</div>
			<div class="table-content" id="result">
				<?php
					 include 'abc.php';
				?>
			</div>
		</div>
		
	</div>

	  	<script src="handle/js/jquery-3.2.1.min.js"></script>
		<script src="handle/js/bootstrap.min.js"></script>
		<script src="handle/js/func.js"></script>
</body>
</html>
