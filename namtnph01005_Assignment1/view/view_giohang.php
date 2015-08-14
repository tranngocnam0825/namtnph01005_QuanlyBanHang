
<form action="" method="post" >
    <div class="sanpham">
        <br/>
        <h2><a href="index.php">Tiếp tục mua hàng</a></h2>
        <br/>
        <?php
        if (!empty($_SESSION['giohang']) == 0) {
            echo '<p class="gh">Giỏ hàng chưa có gì!</p></br></br></br></br>';
        } else {
            $cart = $_SESSION['giohang'];
            ?>
            <table border="" bordercolor="#999" cellspacing="0" cellpadding="0" width="690" class="tablesp" style="margin-right:10px; margin-bottom:20px; margin-left: 10px;" >
                <tr>
                    <th width='217' height="34">Tên sản phẩm</th>
                    <th width='145'>Hình ảnh</th>
                    <th width="57" >Số lượng</th>
                    <th width='145'>Giá</th>
                    <th width='165'>Tổng</th>
                    <th width='68'>Xóa</th>
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
                        <td><img src="images/product/<?php echo $product['hinhanh'] ?>" width="200" height="200"/></td>
                        <td><input type="text" name="soluong<?php echo $id; ?>" value="<?php
                            if (isset($_POST['capnhat'])) {
                                echo $_POST['soluong' . $id];
                            } else {
                                echo $r['soluong'];
                            }
                            ?>" size="3" style="margin-left:5px; text-align: center; color: red; font-weight: bold"/></td>
                        <td>&nbsp;&nbsp;<?php echo number_format($product['gia'], 0) . '<i>&nbsp;&nbsp;vnđ  </i>' ?></td>
                        <td>&nbsp;&nbsp;<?php echo number_format($total, 0) . '<i>&nbsp;&nbsp;vnđ </i>' ?></td>
                        <td style="text-align:center"><a href="index.php?page=delcart&id=<?php echo $product['masp'] ?>"><input type="button" value="Xóa"class="nutnhox" /></a></td>
                    </tr>

                    <?php
                }
                ?>
                <tr>
                    <th height="29" colspan="3">Tổng cộng</th>
                    <th colspan="3"><?php echo number_format($total_price, 0) . '<i>&nbsp;&nbsp;vnđ</i>'; ?></th>
                </tr>
            </table>
            <?php
        }
        ?><div class="nut">
            
            <input type="submit" name="capnhat" value="Cập nhật" class="nutto"/>
            <a href="index.php?page=delcart">
                <input type="button" name="xoatoanbo" value="Xóa toàn bộ"class="nutto"/></a>
            <a href="index.php?page=thanhtoan">
                <input type="button" name="thanhtoan" value="Thanh toán"class="nutto"/></a>

        </div>

    </div>

</form>
