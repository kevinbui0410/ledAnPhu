<?php
    
    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    require_once 'resources/library/auth.php';

    $id = isset($_GET["id"]) && $_GET["id"] != null ? $_GET["id"] : 0;

    $nhanVien = null;
    $error = "";

    if ($id != 0)
        $nhanVien = DB::queryFirstRow("SELECT * FROM nhan_vien WHERE id=$id");

    $danhSachPhong = DB::query("SELECT * FROM phong_ban");
    
    $danhSachChiNhanh = DB::query("SELECT * FROM chi_nhanh");


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if ($_POST['employeeName'] == '' || $_POST['employeeAddress'] == '' || $_POST['employeePhone'] == ''){
            $error = "Vui lòng nhập thông tin nhân viên";
        } else {
            $tenNhanVien = $_POST['employeeName'];
            $diaChi = $_POST['employeeAddress'];
            $dienThoai = $_POST['employeePhone'];
            $phong = $_POST['department'];
            $chiNhanh = $_POST['branch'];
            $idNhanVien = $_POST['id'];
            $datas = array('ho_ten'=>$tenNhanVien,'dia_chi'=>$diaChi,
                           'dien_thoai'=>$dienThoai,
                           'phong_id'=>$phong,'chi_nhanh_id'=>$chiNhanh);
            //$error = DB::insertOrReplace('INSERT','don_hang',$datas);
            try {
                if ($idNhanVien == 0){
                    DB::insert('nhan_vien',$datas);
                    $idNhanVien = DB::insertId();
                    DB::update('nhan_vien',['username' => "username$idNhanVien",'password' => md5('password'),'role' => $idNhanVien],"id=$idNhanVien");
                } else {
                    DB::update('nhan_vien',$datas,"id = $idNhanVien");
                }
                header("location: employees.php");
                exit;
            } catch (Exception $ex){
                $error = $ex;
            }
        }
    }


    $variables = array(
        'title' => "Chi tiết nhân viên",
        'nhanVien' => $nhanVien,
        'danhSachPhong' => $danhSachPhong,
        'danhSachChiNhanh' => $danhSachChiNhanh,
        'id' => $id,
        'error' => $error
    );

    renderLayoutWithContentFile("employeeDetails.php", $variables);    