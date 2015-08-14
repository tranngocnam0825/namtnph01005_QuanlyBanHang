<?php
if (isset($_POST['ok'])) {
    $mamucsp=$_POST['mamucsp'];
    $tenmucsp = $_POST['tenmucsp'];
    $insert = insert_MucSanPham($mamucsp,$tenmucsp);
    header('location:index.php?page=loaisanpham');
}
?>