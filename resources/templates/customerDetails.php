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
            <label for="customerName" class="col-sm-2 col-form-label">Tên khách hàng</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="customerName" placeholder="Tên khách hàng" name='customerName' aria-describedby="inputGroupPrepend" required>
                <div id="validationServerCustomerNameFeedback" class="invalid-feedback">
                    Nhập tên khách hàng
                </div>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="customerAddress" class="col-sm-2 col-form-label">Địa chỉ khách hàng</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="customerAddress" placeholder="Điạ chỉ khách hàng" name='customerAddress' aria-describedby="inputGroupPrepend" required>
                <div id="validationServerCustomerAddressFeedback" class="invalid-feedback">
                    Nhập địa chỉ khách hàng
                </div>
            </div>
        </div>
        <div class="form-group row p-2">
            <label for="customerPhone" class="col-sm-2 col-form-label">Điện thoại khách hàng</label>
            <div class="col-sm-10 has-validation">
                <input type="text" class="form-control" id="customerPhone" placeholder="Điện thoại khách hàng" name='customerPhone' aria-describedby="inputGroupPrepend" required>
                <div id="validationServerCustomerPhoneFeedback" class="invalid-feedback">
                    Nhập điện thoại khách hàng
                </div>
            </div>
        </div>
        
        <div class='form-group row p-2'>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Nhập khách hàng</button>
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