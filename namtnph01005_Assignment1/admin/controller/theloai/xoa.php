<?php
$id=$_GET['id'];
delete_MucSanPham($id);
header('location:index.php?page=loaisanpham');
?>