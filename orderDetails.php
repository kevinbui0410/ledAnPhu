<?php
    
    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    require_once 'resources/library/auth.php';

    $trangThaiDonHang = DB::query("SELECT * FROM trang_thai_don_hang");

    $danhSachNhanVien = DB::query("SELECT * FROM nhan_vien");

    $danhSachKhachHang = DB::query("SELECT * FROM khach_hang");

    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if ($_POST['orderName'] == ''){
            $error = "Vui lòng nhập tên đơn hàng";
        } else {
            $trangThai = $_POST['status'];
            $tenDonHang = $_POST['orderName'];
            $nhanVien = $_POST['employee'];
            $khachHang = $_POST['customer'];
            $noiDung = $_POST['content'];
            $ngayNhan = date('Y-m-d', strtotime(str_replace('-', '/', $_POST['inputDate'])));
            $datas = array('trang_thai'=>$trangThai,'khach_hang'=>$khachHang,
                           'ten_don_hang'=>$tenDonHang,
                           'noi_dung'=>$noiDung,'ngay_nhan'=>$ngayNhan);
            //$error = DB::insertOrReplace('INSERT','don_hang',$datas);
            DB::insert('don_hang',$datas);
            $idDonHang = DB::insertId();
            DB::insert('don_hang_nhan_vien',array('don_hang'=>$idDonHang,'nhan_vien'=>$nhanVien));
            header("location: orders.php");
            exit;
        }
    }

    //var_dump($trangThaiDonHang);

    $variables = array(
        'title' => "Chi tiết đơn hàng",
		'trangThaiDonHang' => $trangThaiDonHang,
        'danhSachNhanVien' => $danhSachNhanVien,
        'danhSachKhachHang' => $danhSachKhachHang,
        'error' => $error
	);

    renderLayoutWithContentFile("orderDetails.php", $variables);
?>