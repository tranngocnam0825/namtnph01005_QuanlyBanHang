<div class="title">
    <h3>Sản phẩm</h3>
</div>
<div class="content_khung">
    <table border="" bordercolor="#999" cellspacing="0" cellpadding="0" >
                    <tr>
                        <th width="120" height="30">Tên khách hàng</th>
                        <th width="150">Địa chỉ</th>
                        <th width="150">Email</th>
                        <th width="100">Số điện thoại</th>
                        <th width="150">Giới tính</th>
                        <th width="60">Mật khẩu</th>
                        <th width="35">Xóa</th>
                    </tr>
                    <?php
                    $product = get_Khachhang();
                    foreach ($product as $r) {
                        ?>
                        <tr>
                            <td><b><?php echo $r['tenkh'] ?></b></td>
                            <td><?php echo $r['diachi'] ?></td>
                            <td><?php echo $r['sodienthoai'] ?></td>
                            <td><?php echo $r['email'] ?></td>
                            <td><?php echo $r['gioitinh'] ?></td>
                            <td><?php echo $r['matkhau'] ?></td>
                            <td ><a href="index.php?page=xoakh&id=<?php echo $r['makh'] ?>"><input type="button" value="Xóa"class="nutnho"/></a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table><br>
    <a href="index.php?page=themkh"><input type="submit" value="Thêm khách hàng" class="nuttox"/></a><br><br>
