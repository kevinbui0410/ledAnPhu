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
                        <table id='orderTable' class='display'>
                            <thead>
                            <tr>
                                <th>Đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Nội dung</th>
                                <th>Trạng thái</th>
								<th>Ngày nhận</th>
                            </tr>
                            </thead>
                            
                        </table>
                        </div>";
    $tableData = array("ten_don_hang","ten_khach_hang","noi_dung",'trang_thai','ngay_nhan');

    // Must pass in variables (as an array) to use in template 
	$variables = array(
        'title' => "Quản lý đơn hàng",
		'tableData' => $tableData,
        'tableHeader' => $tableHeader,
        'tableName' => "orderTable",
        'ajaxPage' => 'order.php'
	);
	
	renderLayoutWithContentFile("page_list.php", $variables);


    ?>
