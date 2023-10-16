<?php 
    // check session
    //require_once 'resources/library/global.php';
    require_once 'resources/library/auth.php';


    echo "<h3><small class='text-muted'>$title</small></h3>";
    echo "<div class='row'>$tableHeader</div>";
    

    //Script gọi ajax để fill data và xử lý trên data table 
  if ($tableName == "orderTable"){

        echo "<div class='row'><div class='col-6'><a href='orderDetails.php' class='me-2'><button type='submit' class='btn btn-primary'>Nhập mới</button></a>";
        echo "<a href='orderAssign.php'><button type='submit' class='btn btn-primary'>Giao thiết kế</button></a></div></div>";

        echo "
          <script>
              new DataTable('#$tableName', {
              ajax: 'resources/ajax/$ajaxPage',
              processing: true,
              serverSide: true,
              columnDefs: [{targets: 3,
                              render: function ( data, type, row ) {
                                return type === 'display' ? '<progress value=\"' + data + '\" max=\"5\"></progress>' : data;
                              }
                        }]
              
          });</script>
      ";
    }
    else echo "<script>
      new DataTable('#$tableName', {
      ajax: 'resources/ajax/$ajaxPage',
      processing: true,
      serverSide: true, 
    });
</script>
  ";
