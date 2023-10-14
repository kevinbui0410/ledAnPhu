<?php
    
    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    /* 
        Quản lý khách hàng
        Thêm xóa sửa khách
        Chỉ có quản lý mới có thể truy cập chức năng này
        Nhân viên kinh doanh chỉ thấy được danh sách khách hàng mà nhân viên đó phụ trách
    */

    //Load data
    // Định nghĩa header của table data
    $tableHeader = "<div >
                        <!-- Table -->
                        <table id='customerTable' class='display'>
                            <thead>
                            <tr>
                                <th>Họ tên</th>
                                <th>Địa chỉ</th>
                                <th>Điện thoại</th>
                                
                            </tr>
                            </thead>
                            
                        </table>
                        </div>";
    $tableData = array("ho_ten","dia_chi","dien_thoai");

    // Must pass in variables (as an array) to use in template 
	$variables = array(
        'title' => "Quản lý khách hàng",
		'tableData' => $tableData,
        'tableHeader' => $tableHeader,
        'tableName' => "customerTable",
        'ajaxPage' => 'customer.php'
	);
	
	renderLayoutWithContentFile("page_list.php", $variables);