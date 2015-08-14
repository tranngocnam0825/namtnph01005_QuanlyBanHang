<div class="title">
    <h3>Quản trị</h3>
</div>
<div class="content_khung">
    <table border="" bordercolor="#999" cellspacing="0" cellpadding="0" >
        <tr>
            <th width="100" height="30">ID</th>
            <th width="200">user</th>
            <th width="200">Password</th>
            <th width="35">Sửa</th>
            <th width="35">Xóa</th>
        </tr>
        <?php
        $product = get_member();
        foreach ($product as $r) {
            ?>
            <tr>
                <td><p style="margin-bottom: -2px;"><?php echo $r['maqt'] ?></p></td>
                <td><p style="margin-bottom: -2px;"><?php echo $r['tendn'] ?></p></td>
                <td><p style="margin-bottom: -2px;"><?php echo $r['pass'] ?></p></td>
                <td ><a href="index.php?page=suaqt&id=<?php echo $r['maqt'] ?>"><input type="button" value="Sửa"class="nutnho"/></a></td>
                <td ><a href="index.php?page=xoaqt&id=<?php echo $r['maqt'] ?>"><input type="button" value="Xóa"class="nutnho"/></a></td>
            </tr>
            <?php
        }
        ?>
    </table><br>

    <a href="index.php?page=themqt"><input type="submit" value="Thêm Quản trị" class="nuttox"/></a><br><br>
