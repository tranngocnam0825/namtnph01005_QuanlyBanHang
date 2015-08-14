<div class="title">
    <h3>Thể loại sản phẩm</h3>
</div>
<div class="content_khung">
    <table border="" bordercolor="#999" cellspacing="0" cellpadding="0" >
        <tr>
            <th width="50" height="30">ID</th>
            <th width="300">Mã hóa đơn</th>
            <th width="300">Số lượng</th>
            <th width="300">Mã sản phẩm</th>
            <th width="40">Xóa</th>
        </tr>
        <?php
        $product = get_Hoadon();
        foreach ($product as $r) {
            ?>
            <tr>
                <td><p style="margin-bottom: -2px;"><?php echo $r['id'] ?></p></td>
                <td><p style="margin-bottom: -2px;"><?php echo $r['mahd'] ?></p></td>
                <td><p style="margin-bottom: -2px;"><?php echo $r['soluong'] ?></p></td>
                <td><p style="margin-bottom: -2px;"><?php echo $r['masp'] ?></p></td>
                <td ><a href="index.php?page=xoahd&id=<?php echo $r['id'] ?>"><input type="button" value="Xóa"class="nutnho"/></a></td>
            </tr>
            <?php
        }
        ?>
    </table><br>
