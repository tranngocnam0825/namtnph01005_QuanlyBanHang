<div class="title">
    <h3>Thể loại sản phẩm</h3>
</div>
<div class="content_khung">
    <table border="" bordercolor="#999" cellspacing="0" cellpadding="0" >
        <tr>
            <th width="50" height="30">Mã mục</th>
            <th width="300">Tên mục</th>
            <th width="40">Sửa</th>
            <th width="40">Xóa</th>
        </tr>
        <?php
        $product = get_Mucsanpham();
        foreach ($product as $r) {
            ?>
            <tr>
                <td><p style="margin-bottom: -2px;"><?php echo $r['mamucsp'] ?></p></td>
                <td><p style="margin-bottom: -2px;"><?php echo $r['tenmucsp'] ?></p></td>
                <td ><a href="index.php?page=suamucsp&id=<?php echo $r['mamucsp'] ?>"><input type="button" value="Sửa"class="nutnho"/></a></td>
                <td ><a href="index.php?page=xoamucsp&id=<?php echo $r['mamucsp'] ?>"><input type="button" value="Xóa"class="nutnho"/></a></td>
            </tr>
            <?php
        }
        ?>
    </table><br>

    <a href="index.php?page=themmucsp"><input type="submit" value="Thêm thể loại" class="nuttox"/></a><br><br>
