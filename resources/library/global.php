<?php
if(!session_id()) session_start();
// Định nghĩa các biến session dùng chung cho toàn bộ site
if ($_SESSION !== null)
{
    $LOGGED = isset($_SESSION["loggedin"]) ? $_SESSION["loggedin"] : false;
    $USERNAME = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
    $ROLE = isset($_SESSION["role"]) ? $_SESSION["role"] : null;
    $HOTEN = isset($_SESSION["ho_ten"]) ? $_SESSION["ho_ten"] : null;
    $DIACHI = isset($_SESSION["dia_chi"]) ? $_SESSION["dia_chi"] : null;
    $DIENTHOAI = isset($_SESSION["dien_thoai"]) ? $_SESSION["dien_thoai"] : null;
}