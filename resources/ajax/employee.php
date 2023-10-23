<?php
// Load file config
require_once(realpath(dirname(__FILE__) . "/../config.php"));
require_once(LIBRARY_PATH . "/db.class.php");
require_once(LIBRARY_PATH . "/ssp.class.php");


/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = "nhan_vien";
 
// Table's primary key
$primaryKey = 'id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'ho_ten', 'dt' => 0 ),
    array( 'db' => 'dia_chi',   'dt' => 1 ),
    array( 'db' => 'dien_thoai',   'dt' => 2 ),
    array( 'db' => 'phong_id',     'dt' => 3 ),
    array( 'db' => 'chi_nhanh_id',     'dt' => 4 ),
    array( 'db' => 'id',     'dt' => 5 ),
    
);
 
// SQL server connection information
$sql_details = array(
    'user' => $config["db"]["db1"]["username"],
    'pass' => $config["db"]["db1"]["password"],
    'db'   => $config["db"]["db1"]["dbname"],
    'host' => $config["db"]["db1"]["host"]
    // ,'charset' => 'utf8' // Depending on your PHP and MySQL config, you may need this
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
//require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
