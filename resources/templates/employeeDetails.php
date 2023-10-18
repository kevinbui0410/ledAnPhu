<h3><small class='text-muted'><?php echo $title ?></small></h3>
<div class="row">
    <form method="POST" class='needs-validation'>
        <?php 
        if ($error != "") : 
            echo "
            <div class='alert alert-danger mb-3' role='alert'>
                $error
            </div> 
            ";
        endif ?>
        <div class="form-group row p-2">
            <label for="employeeName" class="col-sm-2 col-form-label">Tên nhân viên</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="employeeName" placeholder="Tên nhân viên" name='employeeName' aria-describedby="inputGroupPrepend" required>
                <div id="validationServerEmployeeNameFeedback" class="invalid-feedback">
                    Nhập tên nhân viên
                </div>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="employeeAddress" class="col-sm-2 col-form-label">Địa chỉ nhân viên</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="employeeAddress" placeholder="Điạ chỉ nhân viên" name='employeeAddress' aria-describedby="inputGroupPrepend" required>
                <div id="validationServerEmployeeAddressFeedback" class="invalid-feedback">
                    Nhập địa chỉ nhân viên
                </div>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="employeePhone" class="col-sm-2 col-form-label">Điện thoại nhân viên</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="employeePhone" placeholder="Điện thoại nhân viên" name='employeePhone' aria-describedby="inputGroupPrepend" required>
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
                            
                            $idPhong = $phong['id'];
                            $tenPhong = $phong['ten_phong_ban'];
                            echo "<option value=$idPhong>$tenPhong</option>";
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
                            
                            $idChiNhanh = $chiNhanh['id'];
                            $tenChiNhanh = $chiNhanh['ten_chi_nhanh'];
                            echo "<option value=$idChiNhanh>$tenChiNhanh</option>";
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