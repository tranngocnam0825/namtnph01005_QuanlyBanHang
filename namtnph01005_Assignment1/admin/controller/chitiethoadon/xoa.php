<?php
$id=$_GET['id'];
delete_chitiethoadon($id);
header('location:index.php?page=chitiethoadon');
?>