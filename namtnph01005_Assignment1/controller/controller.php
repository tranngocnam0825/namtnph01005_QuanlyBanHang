<?php
session_start();
include 'model/model.php';
include 'view/view_header.php';
$category = get_All_mucsanpham();
include 'view/view_categories.php';
if (isset($_GET['page'])) 
{
    $page = $_GET['page'];
    if ($page == 'product') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $products = get_All_sanpham($id);
        }
        include 'view/view_product.php';
    }
    if ($page == 'dangnhap') {
        include 'view/view_dangnhap.php';
        include 'controller/control_dangnhap.php';
    }
    if ($page == 'search') {
        include 'controller/control_search.php';
    }
    if ($page == 'chitiet') {
        include 'view/view_chitiet.php';
           }
    if ($page == 'addcart') {
        include 'controller/control_addcart.php';
    }
    // Page = Cart
    if ($page == 'cart') {
        include 'view/view_giohang.php';
    }
    // Page = Del Cart
    if ($page == 'delcart') {
        include 'controller/control_delcart.php';
    }
     if ($page == 'thanhtoan') {
        include 'view/view_thanhtoan.php';
    }
    if ($page == 'thongtin') {
        include 'view/view_thongtinthanhtoan.php';
    }
    if ($page == 'dangky') {
        include 'controller/control_dangky.php';
        include 'view/view_dangky.php';
        
    }
     
    if ($page == 'dangxuat') {
        include 'controller/control_dangxuat.php';
    }
} else {
    include 'view/view_home.php';
}
include 'view/view_footer.php';
?>