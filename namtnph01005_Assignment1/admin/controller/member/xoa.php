<?php
$id=$_GET['id'];
delete_quantri($id);
header('location:index.php?page=quantri');
?>