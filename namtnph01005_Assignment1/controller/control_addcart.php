<?php
    $id = $_GET['idgh'];
    if( isset($_SESSION['giohang'][$id]) )
    {
        $_SESSION['giohang'][$id]['soluong'] += 1;
    } else {
        $_SESSION['giohang'][$id]['sanpham'] = $id;
        $_SESSION['giohang'][$id]['soluong'] = 1;
    }
    header("Location: index.php?page=cart");
?>