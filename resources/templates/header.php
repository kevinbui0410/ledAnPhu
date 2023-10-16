<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<!-- Bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link href="css/style.css" rel="stylesheet">
	
	<!-- Datatable JS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
	
	<title>Led An Phú</title>
</head>
<body>
	<div id="header">
		<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
		<div class="col-md-3 mb-2 mb-md-0">
			<a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
			<div class="h3" style="margin-left: 10px;">Led An Phú</div>
			</a>
		</div>

		<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
			<li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
			<li><a href="orders.php" class="nav-link px-2">Đơn Hàng</a></li>
			<li><a href="customers.php" class="nav-link px-2">Khách Hàng</a></li>
			<?php if (isset( $_SESSION["role"] ) &&  $_SESSION["role"]  == 1): ?>
				<li><a href="employees.php" class="nav-link px-2">Nhân Viên</a></li>
			<?php endif; ?>
		</ul>
		<div class="col-md-3 text-right">
				<a href='login.php'>
					<?php if (isset( $_SESSION["loggedin"] ) &&  $_SESSION["loggedin"]  === true) { 
												$hoten = $_SESSION['ho_ten'];
												echo  "<h5>$hoten</h5>"; 
										}
										else 
										  		echo "<button type='button' class='btn btn-outline-primary me-2'>Login</button></a>"; 
				?></a>
		</div>
		
		</header>
	</div>
