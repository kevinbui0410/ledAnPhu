<h3><small class='text-muted'><?php echo $title ?></small></h3>
<div class="row">
    <form method="POST" class='needs-validation'>
        <?php 
            $employeeName = "";
            $employeeAddress = "";
            $employeePhone = "";
            $department = 0;
            $branch = 0;
            if ($nhanVien != null) {
                $employeeName = $nhanVien['ho_ten'];
                $employeeAddress = $nhanVien['dia_chi'];
                $employeePhone = $nhanVien['dien_thoai'];
                $department = $nhanVien['phong_id'];
                $branch = $nhanVien['chi_nhanh_id'];
            }
            if ($error != "") : 
                echo "
                <div class='alert alert-danger mb-3' role='alert'>
                    $error
                </div> 
                ";
            endif 
        ?>
        <input type='hidden' name='id'  value='<?php echo $id?>'/>
        <div class="form-group row p-2">
            <label for="employeeName" class="col-sm-2 col-form-label">Tên nhân viên</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="employeeName" value="<?php echo $employeeName; ?>" name='employeeName' aria-describedby="inputGroupPrepend" required>
                <div id="validationServerEmployeeNameFeedback" class="invalid-feedback">
                    Nhập tên nhân viên
                </div>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="employeeAddress" class="col-sm-2 col-form-label">Địa chỉ nhân viên</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="employeeAddress" value="<?php echo $employeeAddress; ?>" name='employeeAddress' aria-describedby="inputGroupPrepend" required>
                <div id="validationServerEmployeeAddressFeedback" class="invalid-feedback">
                    Nhập địa chỉ nhân viên
                </div>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="employeePhone" class="col-sm-2 col-form-label">Điện thoại nhân viên</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="employeePhone" value="<?php echo $employeePhone; ?>" name='employeePhone' aria-describedby="inputGroupPrepend" required>
                <div id="validationServerEmployeePhoneFeedback" class="invalid-feedback">
                    Nhập điện thoại nhân viên
                </div>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="employeeDepartment" class="col-sm-2 col-form-label">Phòng</label>
            <div class="col-sm-10">
                <select class="form-control" id='department' name='department'>
                    <?php
                        foreach ($danhSachPhong as $phong)
                        {
                            $selected = '';
                            $idPhong = $phong['id'];
                            $tenPhong = $phong['ten_phong_ban'];
                            if ($idPhong == $department)
                                $selected = 'selected';
                            echo "<option value=$idPhong $selected>$tenPhong</option>";
                        }
                    ?>    
                </select>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="employeeBranch" class="col-sm-2 col-form-label">Chi nhánh</label>
            <div class="col-sm-10">
                <select class="form-control" id='branch' name='branch'>
                    <?php
                        foreach ($danhSachChiNhanh as $chiNhanh)
                        {
                            $selected = '';
                            $idChiNhanh = $chiNhanh['id'];
                            $tenChiNhanh = $chiNhanh['ten_chi_nhanh'];
                            if ($idChiNhanh == $branch)
                                $selected = 'selected';
                            echo "<option value=$idChiNhanh $selected>$tenChiNhanh</option>";
                        }
                    ?>    
                </select>
            </div>
        </div>
        <div class='form-group row p-2'>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Nhập nhân viên</button>
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