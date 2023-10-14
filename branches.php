<?php

    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    /* 
        Quản lý chi nhánh
        Thêm xóa sửa chi nhánh
        Chỉ có quản lý mới có thể truy cập chức năng này
    */

    //Load data
    // Định nghĩa header của table data
    $tableHeader = "<div >
                        <!-- Table -->
                        <table id='branchTable' class='display'>
                            <thead>
                            <tr>
                                <th>Tên chi nhánh</th>
                                <th>Địa chỉ</th>
                                <th>Điện thoại</th>
                                <th>Quản lý</th>
                            </tr>
                            </thead>
                            
                        </table>
                        </div>";
    $tableData = array("ten_chi_nhanh","dia_chi","dien_thoai","quan_ly");

    // Must pass in variables (as an array) to use in template 
	$variables = array(
        'title' => "Quản lý chi nhánh",
		'tableData' => $tableData,
        'tableHeader' => $tableHeader,
        'tableName' => "branchTable",
        'ajaxPage' => 'branch.php'
	);
	
	renderLayoutWithContentFile("page_list.php", $variables);