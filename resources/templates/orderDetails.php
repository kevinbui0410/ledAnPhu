
<h3><small class='text-muted'><?php echo $title ?></small></h3>
<div class="row">
    <form method="POST">
        <?php 
            $orderName = '';
            $employee = 0;
            $customer = 0;
            $status = 0;
            $content = '';
            $inputDate = 0;
            if ($donHang != null){
                $orderName = $donHang['ten_don_hang'];
                $employee = $donHang['nhan_vien'];
                $customer = $donHang['khach_hang'];
                $status = $donHang['trang_thai'];
                $content = $donHang['noi_dung'];
                $inputDate = strtotime(str_replace('-', '/', $donHang['ngay_nhan']));//date('Y-m-d', strtotime(str_replace('-', '/', $donHang['ngay_nhan'])));
                //echo $inputDate;
            }

            if ($error != "") : 
                echo "
                <div class='alert alert-danger mb-3' role='alert'>
                    $error
                </div> 
                ";
            endif 
        ?>
        <input type='hidden' name='id' value='<?php echo $id?>'>
        <div class="form-group row p-2">
            <label for="orderName" class="col-sm-2 col-form-label">Tên đơn hàng</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="orderName" name='orderName' aria-describedby="inputGroupPrepend" required value='<?php echo "$orderName"; ?>'>
                <div id="validationServerOrderNameFeedback" class="invalid-feedback">
                    Nhập tên đơn hàng
                </div>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="employee" class="col-sm-2 col-form-label">Nhân viên kinh doanh</label>
            <div class="col-sm-10">
                <select class="form-control" id='employee' name='employee'>
                    <?php
                        
                        foreach ($danhSachNhanVien as $nhanVien)
                        {
                            $selected = '';    
                            $idNhanVien = $nhanVien['id'];
                            $tenNhanVien = $nhanVien['ho_ten'];
                            if ($idNhanVien == $nhanVien)
                                $selected = "selected";
                            
                            echo "<option value=$idNhanVien $selected>$tenNhanVien</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="orderStatus" class="col-sm-2 col-form-label">Trạng thái đơn hàng</label>
            <div class="col-sm-10">
                <select class="form-control" id='status' name='status'>
                    <?php
                        
                        foreach ($trangThaiDonHang as $trangThai)
                        {
                            $selected = '';    
                            $idTrangThai = $trangThai['trang_thai'];
                            $dienGiai = $trangThai['dien_giai'];
                            if ($idTrangThai == $status)
                                $selected = "selected";
                            echo "<option value=$idTrangThai $selected>$dienGiai</option>";
                        }
                    ?>    
                </select>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="customer" class="col-sm-2 col-form-label">Khách hàng</label>
            <div class="col-sm-10">
                <select class="form-control" id='customer' name='customer'>
                    <?php
                        
                        foreach ($danhSachKhachHang as $khachHang)
                        {
                            $selected = '';    
                            $idKhachHang = $khachHang['id'];
                            $tenKhachHang = $khachHang['ho_ten'];
                            if ($idKhachHang == $customer)
                                $selected = "selected";
                            echo "<option value=$idKhachHang $selected>$tenKhachHang</option>";
                        }
                    ?>
                </select>
            </div>
        </div> 
        <div class="form-group row p-2">
            <label for="content" class="col-sm-2 col-form-label">Nội dung</label>
            <div class="col-sm-10 has-validation has-validation">
                <textarea class='form-control' id='content' name='content' aria-describedby="inputGroupPrepend" required>
                    <?php echo $content?>
                </textarea>
            </div>
            <div id="validationServerOrderNameFeedback" class="invalid-feedback">
                    Nhập nội dung đơn hàng
                </div>
        </div>
        <div class="form-group row p-2">
            <label for="inputDate" class="col-sm-2 col-form-label">Ngày nhận</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputDate" name="inputDate"  type="text" />
            </div>
        </div>
        <div class='form-group row p-2'>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Nhập đơn hàng</button>
            </div>
        </div>
    </form>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()

    // khởi tạo datepicker cho field ngây nhận đơn hàng

    $(document).ready(function(){
      //'use strict'
      var date_input=$('input[name="inputDate"]'); 
      var container=$('form').length>0 ? $('form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
        //defaultDate: new Date(),
        autoclose: true
      };
      date_input.datepicker(options);
      date_input.datepicker('setDate', new Date(<?php echo $inputDate == 0 ? "" : $inputDate * 1000; ?>));
    })
</script>