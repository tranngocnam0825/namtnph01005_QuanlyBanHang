<?php
if (isset($_POST['dangky'])) {
    $hoten = $_POST['hoten'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $gioitinh = $_POST['gioitinh'];
    $matkhau = md5($_POST['matkhau']);
    $nlmatkhau = md5($_POST['nlmatkhau']);

    if (!$hoten || !$diachi || !$sdt || !$email || !$gioitinh || !$matkhau || !$nlmatkhau) {
        ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px;">Vui lòng nhập đầy đủ thông tin</h5>
            <?php
            include 'view/view_dangky.php';
            include 'view/view_footer.php';
            exit;
        }
        if ($matkhau != $nlmatkhau) {
            ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px;">Mật khẩu không giống nhau vui lòng kiểm tra lại</h5>
            <?php
            include 'view/view_dangky.php';
            include 'view/view_footer.php';
            exit;
        }
        $get = check_hoten($hoten);
        if (!isset($get) > 0) {
            ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px;">Tên đăng ký này đã có người dùng</h5>
            <?php
            include 'view/view_dangky.php';
            include 'view/view_footer.php';
            exit;
        }
        if (!ereg("^[0-9]", $sdt)) {
            ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px;">Số điện thoại không hợp lệ</h5>
            <?php
            include 'view/view_dangky.php';
            include 'view/view_footer.php';
            exit;
        }

        if (!check_email($email)) {
            ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px;">Email không hợp lệ</h5>
            <?php
            include 'view/view_dangky.php';
            include 'view/view_footer.php';
            exit;
        }


        $addmember = insert_Khachhang($hoten, $diachi, $sdt, $email, $gioitinh, $matkhau);
        if ($addmember) {
            ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px;">Quá trình đăng ký thành công <a href="index.php">Về trang chủ</a></h5>
            <?php
        } else {
            ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px;">Có lỗi xảy ra trong quá trình đăng ký <a href="index.php?page=dangky">Thử lại</a></h5>
        <?php
    }
}
?>