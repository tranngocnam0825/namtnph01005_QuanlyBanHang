<div class="title">
    <h3>Sản phẩm</h3>
</div>
<div class="content">
    <table border="" bordercolor="#999" cellspacing="0" cellpadding="0" width="900" style="margin-left: 10px;" >
                    <tr>
                        <th width="150" height="30">Tên sản phẩm</th>
                        <th width="120">Hình ảnh</th>
                        <th width="300">Giới thiệu</th>
                        <th width="101">Giá</th>
                        <th width="44">Xem</th>
                        <th width="40">Sửa</th>
                        <th width="42">Xóa</th>
                    </tr>
                    <?php
                    $product = get_Sanpham();
                    foreach ($product as $r) {
                        ?>
                        <tr><td><b><?php echo $r['tensp'] ?></b></td>
                            <td><img src="../images/product/<?php echo $r['hinhanh'] ?>" width="100" height="100"/></td>
                            <td class="gioithieu"><?php echo $r['gioithieu'] ?></td>
                            <td><b><?php echo number_format($r['gia'], 0) . '<i>&nbsp;&nbsp;vnđ</i>' ?></b></td>
                            <td ><a href="index.php?page=xemsp&id=<?php echo $r['masp'] ?>"> Xem </a></td>
                            <td ><a href="index.php?page=suasp&id=<?php echo $r['masp'] ?>"> Sua </a></td>
                            <td ><a href="index.php?page=xoasp&id=<?php echo $r['masp'] ?>"> Xoa </a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table><br>
    <a href="index.php?page=themsp"><input type="submit" value="Thêm sản phẩm" class="nuttox"/></a><br><br>
