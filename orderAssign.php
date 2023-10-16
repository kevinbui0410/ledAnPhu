<?php

    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    $trangThaiDonHang = DB::query("SELECT * FROM trang_thai_don_hang");

    $danhSachNhanVien = DB::query("SELECT * FROM nhan_vien WHERE phong_id=2");

    $danhSachKhachHang = DB::query("SELECT * FROM khach_hang");

    $danhSachDonHang = DB::query("SELECT * FROM don_hang WHERE trang_thai=0 ORDER BY ngay_nhan");

    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $idS = $_POST["id_don_hang"];
        $employees = $_POST['employee'];
        for ($i = 0; $i < count($idS); $i++){
            DB::update('don_hang', ['trang_thai' => 1], "id=%s", $idS[$i]);
            DB::INSERT('don_hang_nhan_vien',array('don_hang'=>$idS[$i],'nhan_vien'=>$employees[$i]));
        }
    }

    $variables = array(
        'title' => "Giao việc",
		'trangThaiDonHang' => $trangThaiDonHang,
        'danhSachNhanVien' => $danhSachNhanVien,
        'danhSachKhachHang' => $danhSachKhachHang,
        'danhSachDonHang' => $danhSachDonHang,
        'error' => $error
	);

    renderLayoutWithContentFile("orderAssign.php", $variables);