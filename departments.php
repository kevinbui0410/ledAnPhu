<?php

    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    /* 
        Quản lý phòng ban
        Thêm xóa sửa phòng ban
        Chỉ có quản lý mới có thể truy cập chức năng này
    */

    //Load data
    // Định nghĩa header của table data
    $tableHeader = "<div >
                        <!-- Table -->
                        <table id='departmentTable' class='display'>
                            <thead>
                            <tr>
                                <th>Tên phòng ban</th>
                                <th>Điện thoại</th>
                                <th>Quản lý</th>
                            </tr>
                            </thead>
                            
                        </table>
                        </div>";
    $tableData = array("ten_phong_ban","dien_thoai","ten_quan_ly");

    // Must pass in variables (as an array) to use in template 
	$variables = array(
        'title' => "Quản lý phòng ban",
		'tableData' => $tableData,
        'tableHeader' => $tableHeader,
        'tableName' => "departmentTable",
        'ajaxPage' => 'department.php'
	);
	
	renderLayoutWithContentFile("page_list.php", $variables);