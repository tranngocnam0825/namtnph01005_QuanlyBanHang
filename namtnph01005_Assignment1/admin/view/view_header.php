<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tran Ngoc Nam</title>
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <link rel="stylesheet" type="text/css" href="style/lib.css"/>
        <link rel="stylesheet" type="text/css" href="style/view_css.css"/>
        <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
        <link href="ckeditor/sample.css" rel="stylesheet" type="text/css"/>
        <script src="ckeditor/sample.js" type="text/javascript"></script>
        
    </head>
    <body>
        <article>
            <header>
                <div class="banner" style="margin-top: -30px; background: #06C">
                    <div class="login" >
                        <?php
                        if (isset($_SESSION['login'])) {
                            echo "xin chào:    " . $_SESSION['login'];?>
                        <a href="index.php?page=logout" >Logout</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li style="padding-left: 25px;"><a href="index.php?page=sanpham">Sản Phẩm</a></li>
                        <li><a href="index.php?page=quantri">Quản trị</a></li>
                        <li><a href="index.php?page=loaisanpham">Loại sản phẩm</a></li>
                        <li><a href="index.php?page=khachhang">Khách hàng</a></li>
                        <li><a href="index.php?page=hoadon">Hóa đơn</a></li>
                        <li><a href="index.php?page=chitiethoadon">Chi tiết hóa đơn</a></li>

                    </ul>
                </nav>
            </header>
            <!--  END header
            Kết thúc header
            -->
            <section>
