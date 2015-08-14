<?php
if (isset($_SESSION['dangnhap'])) {
    $dangnhap = $_SESSION['dangnhap'];
    $dgn = dangnhap_kh($dangnhap);
    ?>
<form action="" method="post" class="giohang">
        <div class="thongtin">
            <h2>Thông tin khách hàng</h2>
            <p><b>Họ tên: &nbsp;&nbsp;&nbsp;</b><i><?php echo $dgn['tenkh'] ?></i></p>
            <p><b>Địa chỉ: &nbsp;&nbsp;&nbsp;</b><i><?php echo $dgn['diachi'] ?></i></p>
            <p><b>Số điện thoại: &nbsp;&nbsp;&nbsp;</b><i><?php echo $dgn['sodienthoai'] ?></i></p>
            <p><b>Email: &nbsp;&nbsp;&nbsp;</b><i><?php echo $dgn['email'] ?></i></p>
            <p><b>Giới tính: &nbsp;&nbsp;&nbsp;</b><i><?php echo $dgn['gioitinh'] ?></i></p>
        </div>
        <?php
    }
    ?>
    <?php
    if ($_SESSION['giohang'] == NULL) {
        echo '<p class="gh">Giỏ hàng chưa có gì!</p></br></br></br></br>';
    } else {
        $cart = $_SESSION['giohang'];
        ?>
        <div class="sanpham">
            <table border="" bordercolor="#999" cellspacing="0" cellpadding="0" width="690" class="tablesp" style="margin-right:10px; margin-left: 10px; margin-bottom:20px" >
                <tr>
                    <th width='313' height="34">Tên sản phẩm</th>
                    <th width='127'>Hình ảnh</th>
                    <th width="65" >Số lượng</th>
                    <th width='122'>Giá</th>
                    <th width='100'>Tổng</th>
                </tr> 
                <?php
                $total_price = 0;
                foreach ($cart as $r) {
                    $product = get_Sanpham_Id($r['sanpham']);
                    $id = $product['masp'];
                    if (isset($_POST['capnhat'])) {
                        $_SESSION['giohang'][$id]['soluong'] = $_POST['soluong' . $id];
                    }
                    $total = $_SESSION['giohang'][$id]['soluong'] * $product['gia'];
                    $total_price = $total_price + $total;
                    ?>
                    <tr>
                        <td style="padding: 10px;"><?php echo $product['tensp'] ?></td>
                        <td><img src="images/product/<?php echo $product['hinhanh'] ?> "width="200" height="200"/></td>
                        <td  style="margin-left:5px; text-align: center; color: red; font-weight: bold"><?php
                            echo $r['soluong'];
                            ?></td>
                        <td>&nbsp;&nbsp;<?php echo number_format($product['gia'], 0) . '<i>&nbsp;&nbsp;vnđ  </i>' ?></td>
                        <td>&nbsp;&nbsp;<?php echo number_format($total, 0) . '<i>&nbsp;&nbsp;vnđ </i>' ?></td>
                    </tr>

                    <?php
                }
                ?>
                <tr>
                    <th height="29" colspan="3">Tổng cộng</th>
                    <th colspan="3"><?php echo number_format($total_price, 0) . '<i>&nbsp;&nbsp;vnđ</i>'; ?></th>
                </tr>
            </table>
            <a href="index.php?page=thongtin"><input type="button" name="xoatoanbo" value="Gửi thông tin"class="nutto"/></a>
        </div>
        <?php
    }
    ?>
    
</form>
