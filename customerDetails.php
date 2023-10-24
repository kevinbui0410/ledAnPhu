<?php
    
    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    require_once 'resources/library/auth.php';

    $id = isset($_GET["id"]) ? $_GET["id"] : 0;

    $khachHang = null;

    $error = "";

    if ($id != 0)
        $khachHang = DB::queryFirstRow("SELECT * FROM khach_hang WHERE id=$id");

    /*
    $danhSachPhong = DB::query("SELECT * FROM phong_ban");
    
    $danhSachChiNhanh = DB::query("SELECT * FROM chi_nhanh");
    */

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if ($_POST['customerName'] == '' || $_POST['customerAddress'] == '' || $_POST['customerPhone'] == ''){
            $error = "Vui lòng nhập thông tin khách hàng";
        } else {
            $tenKhachHang = $_POST['customerName'];
            $diaChi = $_POST['customerAddress'];
            $dienThoai = $_POST['customerPhone'];
            $idKhachHang = $_POST['id'];
            /*$phong = $_POST['department'];
            $chiNhanh = $_POST['branch'];*/
            $datas = array('ho_ten'=>$tenKhachHang,'dia_chi'=>$diaChi,
                           'dien_thoai'=>$dienThoai);
            //$error = DB::insertOrReplace('INSERT','don_hang',$datas);
            try {
                if ($idKhachHang == 0){
                    DB::insert('khach_hang',$datas);
                    $idKhachHang = DB::insertId();
                    DB::insert('khach_hang_nhan_vien',array('khach_hang'=>$idKhachHang,'nhan_vien'=>$_SESSION["role"]));
                } else {
                    DB::update('khach_hang',$datas,"id=$idKhachHang");
                }
                //DB::update('nhan_vien',['username' => "username$idNhanVien",'password' => md5('password'),'role' => $idNhanVien],"id=$idNhanVien");
                header("location: customers.php");
                exit;
            } catch (Exception $ex){
                $error = $ex;
            }
        }
    }


    $variables = array(
        'title' => "Chi tiết khách hàng",
        'khachHang' => $khachHang,
        'id' => $id,
        'error' => $error
    );

    renderLayoutWithContentFile("customerDetails.php", $variables); 