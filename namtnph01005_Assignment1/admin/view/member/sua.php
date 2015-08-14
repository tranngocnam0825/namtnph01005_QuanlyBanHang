<div class="title">
    <h3 style="margin-bottom: 30px;">Thêm mục sản phẩm</h3>
</div>
<div class="content">
    <form action="" method="POST">
        <table border="0">
            <tr>
                <td><p>Mã quản trị :</p></td>
                <td><input type="text" name="maqt" class="type" value="<?php echo $r['maqt'] ?>"/></td>
            </tr>
            <tr>
                <td><p>Tên đăng nhập :</p></td>
                <td><input type="text" name="tendn" class="type" value="<?php echo $r['tendn'] ?>"/></td>
            </tr>
            <tr>
                <td><p>Password :</p></td>
                <td><input type="text" name="pass" class="type" value="<?php echo $r['pass'] ?>"/></td>
            </tr>
        </table>
        <input type="submit" name="ok" value="Sửa Quản trị" class="nuttox"/><br/><br/>
    </form>