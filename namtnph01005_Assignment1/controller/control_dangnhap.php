<?php

if (isset($_POST['submit'])) {
    $tendn = $_POST['tendangnhap'];
    $pass = $_POST['pass'];
    $dn = dangnhap_kh($tendn);
    if (!$tendn || !$pass) {
        echo "<p class='validate' style='font-size: 12px; font-weight: 300;'> Hãy điền vào đầy đủ thông tin</p>";
        exit;
    }
    if (!empty($dn) <= 0) {
        echo "<p class='validate'  style='font-size: 12px; font-weight: 300;'> Tên truy cập hoặc mật khẩu sai</p>";
        exit;
    }
    if ($pass != $dn['matkhau']) {
        echo "<p class='validate'  style='font-size: 12px; font-weight: 300;'> Tên truy cập hoặc mật khẩu sai</p>";
        exit;
    }
    $_SESSION['dangnhap'] = $_POST['tendangnhap'];
    header('location:index.php');
}
?>