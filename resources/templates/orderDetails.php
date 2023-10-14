
<h3><small class='text-muted'><?php echo $title ?></small></h3>
<div class="row">
    <form method="POST">
        <div class="form-group row p-2">
            <label for="orderName" class="col-sm-2 col-form-label">Tên đơn hàng</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="orderName" placeholder="Tên đơn hàng" name='orderName' aria-describedby="inputGroupPrepend" required>
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
                            
                            $idNhanVien = $nhanVien['id'];
                            $tenNhanVien = $nhanVien['ho_ten'];
                            echo "<option value=$idNhanVien>$tenNhanVien</option>";
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
                            
                            $idTrangThai = $trangThai['trang_thai'];
                            $dienGiai = $trangThai['dien_giai'];
                            echo "<option value=$idTrangThai>$dienGiai</option>";
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
                            
                            $idKhachHang = $khachHang['id'];
                            $tenKhachHang = $khachHang['ho_ten'];
                            echo "<option value=$idKhachHang>$tenKhachHang</option>";
                        }
                    ?>
                </select>
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
</script>