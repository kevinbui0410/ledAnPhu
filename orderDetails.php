<?php
    
    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    $trangThaiDonHang = DB::query("SELECT * FROM trang_thai_don_hang");

    $danhSachNhanVien = DB::query("SELECT * FROM nhan_vien");

    $danhSachKhachHang = DB::query("SELECT * FROM khach_hang");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //var_dump($_POST);
    }

    //var_dump($trangThaiDonHang);

    $variables = array(
        'title' => "Chi tiết đơn hàng",
		'trangThaiDonHang' => $trangThaiDonHang,
        'danhSachNhanVien' => $danhSachNhanVien,
        'danhSachKhachHang' => $danhSachKhachHang,
	);

    renderLayoutWithContentFile("orderDetails.php", $variables);
?>