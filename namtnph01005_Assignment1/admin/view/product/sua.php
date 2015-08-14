<div class="title">
    <h3 style="margin-bottom: 30px;">Sửa sản phẩm</h3>
</div>
<div class="content">

    <form action="" method="POST">
        <table border="0">
            <tr>
                <td><p>Mã sản phẩm :</p></td>
                <td><input type="text" name="masp" class="type"value="<?php echo $r['masp'] ?>"/></td>
            </tr>
            <tr>
                <td><p>Mã loại:</p></td>
                <td><input type="text" name="mamuc" class="type"value="<?php echo $r['mamucsp'] ?>"/></td>
            </tr>
            <tr>
                <td><p>Tên sản phẩm:</p></td>
                <td><input type="text" name="tensp" class="type"value="<?php echo $r['tensp'] ?>"/></td>
            </tr>
             <tr>
                <td><p>Hình ảnh :</p></td>
                <td><img src="../images/product/<?php echo $r['hinhanh'] ?>"/></td>
            </tr>
            <tr>
                <td></td>
                <td><p style="color: red" ><?php echo $r['hinhanh'] ?></p><td>
            </tr>
            <tr>
                <td></td>
                <td><input type="file" name="anh" class="type"value="<?php echo $r['hinhanh'] ?>"/></td>
                
            </tr>
            <tr>
                <td><p>Giá sản phẩm :</p></td>
                <td><input type="text" name="gia" class="type"value="<?php echo $r['gia'] ?>"/></td>
            </tr>
            
            
            <tr>
                <td><p>Giới thiệu :</p></td>
                <td></td>
            </tr>
            
        </table>
        <textarea name="gioithieu" class="ckeditor"><?php echo $r['gioithieu'] ?></textarea><br/>
        <input type="submit" name="sua" value="Sửa sảm phẩm" class="nuttox"/><br/><br/>
    </form>