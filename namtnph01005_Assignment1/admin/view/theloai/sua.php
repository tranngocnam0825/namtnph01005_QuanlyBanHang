
<div class="title">
    <h3 style="margin-bottom: 30px;">Thêm mục sản phẩm</h3>
</div>
<div class="content">
    <form action="" method="POST" >
        <table border="0">
            <tr>
                <td><p>Mã mục sản phẩm :</p></td>
                <td><input type="text" name="mamucsp" class="type" value="<?php echo $r['mamucsp'] ?>"/></td>
            </tr>
            <tr>
                <td><p>Tên mục sản phẩm :</p></td>
                <td><input type="text" name="tenmucsp" class="type"value="<?php echo $r['tenmucsp'] ?>"/></td>
            </tr>
        </table>
        <input type="submit" name="ok" value="Sửa mục" class="nuttox"/><br/><br/>
    </form>