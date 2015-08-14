<?php
$id=$_GET['id'];
delete_Khachhang($id);
header('location:index.php?page=khachhang');
?>