<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        unset($_SESSION['giohang'][$id]);
        header('location:index.php?page=cart');
    }  else {
        unset($_SESSION['giohang']) ;  
        header('location:index.php');
}
?>
