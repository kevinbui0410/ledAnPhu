<?php

    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    /* 
        Quản lý nhân viên
        Thêm xóa sửa nhân viên
        Chỉ có quản lý mới có thể truy cập chức năng này
    */

    //Load data
    // Định nghĩa header của table data
    $tableHeader = "<div >
                        <!-- Table -->
                        <table id='employeeTable' class='display'>
                            <thead>
                            <tr>
                                <th>Họ tên</th>
                                <th>Địa chỉ</th>
                                <th>Điện thoại</th>
                                <th>Phòng</th>
                                <th>Chi nhánh</th>
                            </tr>
                            </thead>
                            
                        </table>
                        </div>";
    $tableData = array("ho_ten","dia_chi","dien_thoai","phong_id","chi_nhanh_id");

    // Must pass in variables (as an array) to use in template 
	$variables = array(
        'title' => "Quản lý nhân viên",
		'tableData' => $tableData,
        'tableHeader' => $tableHeader,
        'tableName' => "employeeTable",
        'ajaxPage' => 'employee.php'
	);
	
	renderLayoutWithContentFile("page_list.php", $variables);