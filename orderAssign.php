<?php

    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    $trangThaiDonHang = DB::query("SELECT * FROM trang_thai_don_hang");

    $danhSachNhanVien = DB::query("SELECT * FROM nhan_vien");

    $danhSachKhachHang = DB::query("SELECT * FROM khach_hang");

    $error = "";

    $variables = array(
        'title' => "Giao việc",
		'trangThaiDonHang' => $trangThaiDonHang,
        'danhSachNhanVien' => $danhSachNhanVien,
        'danhSachKhachHang' => $danhSachKhachHang,
        'error' => $error
	);

    renderLayoutWithContentFile("orderAssign.php", $variables);