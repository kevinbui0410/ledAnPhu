<?php 
    // check session
    //require_once 'resources/library/global.php';
    require_once 'resources/library/auth.php';


    echo "<h3><small class='text-muted'>$title</small></h3>";
    echo "<div class='row'>$tableHeader</div>";
    echo "<script>
      new DataTable('#$tableName', {
      ajax: 'resources/ajax/$ajaxPage',
      processing: true,
      serverSide: true,
      columnDefs: [
        { targets: 0,
            render: function ( data, type, row ) {
                //console.log(row);    
                return type === 'display' ? '<a href=\"customerDetails.php?id='+ row[3] + '\">' + data + '</a>' : data;
            }
        }] 
    });</script> ";

    if ($_SESSION['role'] == 1)
    {
        echo "<div class='row'><div class='col-6'><a href='customerDetails.php' class='me-2'><button type='submit' class='btn btn-primary'>Nhập mới</button></a></div></div>";
    }