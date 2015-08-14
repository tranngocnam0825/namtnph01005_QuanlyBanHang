<?php
$id = $_GET['id'];
$r = get_Sanpham_Id($id);
$hinhanh = $r['hinhanh'];
if (isset($_POST['gioithieu'])) {
    $id = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $gioithieu = $_POST['gioithieu'];
    $hinhanh = $_POST['anh'];
    $mamuc = $_POST['mamuc'];
    $update = update_SanPham($id, $tensp, $gia, $gioithieu, $hinhanh, $mamuc);
    if ($update) {
        header('location:index.php');
    } else {
        ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px; margin-bottom: 20px;">Sủa thất bại liểm tra lại</h5>
        <?php
    }
}
?>