<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="handle/css/style.css">
 	<link rel="stylesheet" href="handle/css/bootstrap.min.css">
 	<style>
 

		#popup {
			display: none;
		  background-color: #ffffff;
		  border-style: solid;
		  height: auto;
		  width: 400px;
		}
		.order-info{
			padding: 10px;
			margin: 20px;
		}

 	</style>
</head>
<body>
	
			<div role="main" class="col-md-3 col-md-offset-4">
			 <form>
			  <h1 class="text-center">Chi tiết đơn hàng</h1>
	          <hr>
	          <div class="order-info">
	          	  <span class="boldAndPad">Mã đơn hàng: </span><span>ĐH001</span> <br>
		          <span class="boldAndPad">Mã sản phẩm: </span><span>SP01</span> <br>
		          <span class="boldAndPad">Người đặt: </span><span>Lê Việt Hà</span> <br>
		          <span class="boldAndPad">SĐt người đặt: </span><span>0978565545</span> <br>
		          <span class="boldAndPad">Người nhận: </span><span>Đào thúy Nga</span> <br>
		          <span class="boldAndPad">SĐt người nhận: </span><span>0987667123</span> <br>
		          <span class="boldAndPad">Địa chỉ nhận: </span><span>60 Ngô Sỹ Liên</span> <br>
		          <span class="boldAndPad">Thời gian: </span><span>10:00:00 20/05/2018</span> <br>
		          <span class="boldAndPad">Đơn giá: </span><span>100 000 vnđ</span> <br>
	          </div>
	          <div>
	            <center>
	              <button id="btnChange" class="btn btn-success">Thay đổi thông tin</button>
	              <button id="btnDelete" class="btn btn-success">Xóa</button>
	              <button id="btnCancel" class="btn btn-success">Trở về</button>
	            <center/>
	          </div>
			 </form>
	        </div>
	      <div id="popup">
	        <h4>Xác nhận xóa</h4>
	        <hr>
	        <center>
	          <span>Bạn có chắc chắn xóa thông tin chuyến bay này không?<br>Nhấn xóa để tiếp tục, nhấn hủy để hủy yêu cầu.</span>
	          <hr>
	          <button class="btn btn-success" id="btnDeleteConfirm">Xóa</button>
	          <button class="btn btn-success" id="btnDeleteCancel">Hủy</button>
	        </center>
	      </div>
	    </div>
		</div>
		
	</div>	
	
</body>
</html>
