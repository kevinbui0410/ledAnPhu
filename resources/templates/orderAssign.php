<h3><small class='text-muted'><?php echo $title ?></small></h3>
<div class="row">
    <p><small class='text-muted'>Vui lòng lựa chọn nhân viên và click nút giao việc</small></p>
</div>
<form method="POST">
    <div class="row">
        <div class="col-sm-3"><button type='submit' class='btn btn-primary'>Giao Thiết Kế</button></div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                
                <th scope="col">Tên Đơn Hàng</th>
                <th scope="col">Nội Dung Đơn Hàng</th>
                <th scope="col">Ngày Nhận</th>
                <th scope="col">Giao Thiết Kế</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $listNhanVien = "<select name='employee[]'>";
                    foreach($danhSachNhanVien as $nhanVien):
                        $idNhanVien = $nhanVien["id"];
                        $tenNhanVien = $nhanVien["ho_ten"];
                        $listNhanVien .= "<option value='$idNhanVien'>$tenNhanVien</option>";
                    endforeach;
                    $listNhanVien .= "</select>";
                    foreach ($danhSachDonHang as $donHang):
                        $idDonHang = $donHang['id'];
                        $tenDonHang = $donHang['ten_don_hang'];
                        $noiDung = $donHang['noi_dung'];
                        $ngayNhan = date_format(date_create($donHang['ngay_nhan']),'d-m-Y');
                        
                        echo "<tr scopr='row'><td><input type='hidden' name='id_don_hang[]' value='$idDonHang'/>$tenDonHang</td>
                                            <td>$noiDung</td>
                                            <td>$ngayNhan</td>
                                            <td>$listNhanVien</td></tr>";
                    endforeach;
                ?>
            </tbody>
        </table>

    </div>
    <div class="row">
        <div class="col-sm-3"><button type='submit' class='btn btn-primary'>Giao Thiết Kế</button></div>
    </div>
</form>