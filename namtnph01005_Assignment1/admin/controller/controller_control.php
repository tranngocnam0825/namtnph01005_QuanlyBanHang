<?php
session_start();
include 'model/model_model.php';
include 'view/view_header.php';
if (!isset($_SESSION['login'])) {
    include 'controller/control_dangnhap.php';
    include 'view/view_dangnhap.php';
} else {
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == 'sanpham') {
            include 'view/view_home.php';
        }
        if ($page == 'themsp') {
            include 'view/product/them.php';
            include 'controller/product/them.php';
        }
        if ($page == 'suasp') {
            include 'controller/product/sua.php';
            include 'view/product/sua.php';
        }
        if ($page == 'xoasp') {
            include 'controller/product/xoa.php';
        }
        if ($page == 'quantri') {
            include 'view/member/member.php';
        }
        if ($page == 'loaisanpham') {
            include 'view/theloai/theloai.php';
        }
        if ($page == 'khachhang') {
            include 'view/khachhang/khachhang.php';
        }
        if ($page == 'hoadon') {
            include 'view/hoadon/hoadon.php';
        }
        if ($page == 'chitiethoadon') {
            include 'view/chitiethoadon/chitiethoadon.php';
        }
        if ($page == 'themmucsp') {
            include 'controller/theloai/them.php';
            include 'view/theloai/them.php';
        }
        if ($page == 'themqt') {
            include 'controller/member/them.php';
            include 'view/member/them.php';
        }
        if ($page == 'themkh') {
            include 'controller/khachhang/them.php';
            include 'view/khachhang/them.php';
        }
        if ($page == 'xoacthd') {
            include 'controller/chitiethoadon/xoa.php';
        }
        if ($page == 'xoahd') {
            include 'controller/hoadon/xoa.php';
        }
        if ($page == 'xoamucsp') {
            include 'controller/theloai/xoa.php';
        }
        if ($page == 'xoaqt') {
            include 'controller/member/xoa.php';
        }
        if ($page == 'xoakh') {
            include 'controller/khachhang/xoa.php';
        }
        if ($page == 'suamucsp') {
            include 'controller/theloai/sua.php';
            include 'view/theloai/sua.php';
        }
        if ($page == 'suaqt') {
            include 'controller/member/sua.php';
            include 'view/member/sua.php';
        }
        if ($page == 'logout') {
            include 'controller/logout.php';
        }
        if ($page == 'xemsp') {
            include 'controller/product/xem.php';
            include 'view/product/xem.php';
        }
    } else {
        include 'view/view_home.php';
    }
}
include 'view/view_footer.php';
?>
