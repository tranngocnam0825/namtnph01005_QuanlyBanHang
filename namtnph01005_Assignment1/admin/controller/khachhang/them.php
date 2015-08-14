<?php
if (isset($_POST['ok'])) {
    $tenkh=$_POST['tenkh'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $gioitinh = $_POST['gioitinh'];
    $matkhau = md5($_POST['matkhau']);
    $insert = insert_KhachHang($tenkh,$diachi,$email,$sdt,$gioitinh,$matkhau);
    header('location:index.php?page=khachhang');
}
?>