<?php
if (isset($_POST['ok'])) {
    $id=$_POST['masp'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $gioithieu = $_POST['gioithieu'];
    $hinhanh = $_POST['anh'];
    $mamuc = $_POST['mamuc'];
    $insert = insert_SanPham($id,$tensp, $gia, $gioithieu, $hinhanh, $mamuc);
    header('location:index.php');
}
?>