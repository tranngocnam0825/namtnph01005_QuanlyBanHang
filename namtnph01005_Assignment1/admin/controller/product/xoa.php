<?php
$id=$_GET['id'];
delete_SanPham($id);
header('location:index.php');
?>