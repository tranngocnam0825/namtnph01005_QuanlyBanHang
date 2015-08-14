<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>NamPH01005</title>
        <link href="admin/style/lib.css" rel="stylesheet" type="text/css"/>
        <link href="admin/style/view_css.css" rel="stylesheet" type="text/css"/>
        <link href="style/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <article>
            <header>
                <div class="banner">
                    <img src="images/Banner.jpg" alt="Bồn Nước Tân Á" width="1240" height="280"/>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>                       
                        <li><a href="index.php?page=cart">Giỏ hàng</a></li>
			<li><a href="index.php?page=dangnhap">Đăng Nhập</a></li>
                        <li><a href="index.php?page=dangky">Đăng ký</a></li>
                        <p class="dn">
                            <b>
                            <?php
                            if (!isset($_SESSION['dangnhap'])) {
                                echo '<li><a href="index.php?page=dangnhap">Đăng nhập</a></li>';
                            } else {
                                if (isset($_SESSION['dangnhap'])) {
                                echo '<b>' . "xin chào:    " .$_SESSION['dangnhap']
                                        . "    <a href='index.php?page=dangxuat' class='nutto'style='padding:5px;'>Logout</a>" . '</b>';
                                }
                            }
                            ?></b>
                        </p>
                    </ul>
                </nav>
            </header>
            <!--  END header
            Kết thúc header
            -->
            <section>
                <div class="content">
