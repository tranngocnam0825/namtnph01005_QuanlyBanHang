<?php
$id=$_GET['id'];
delete_hoadon($id);
header('location:index.php?page=hoadon');
?>