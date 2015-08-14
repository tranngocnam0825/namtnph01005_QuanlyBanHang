<?php
if (isset($_POST['submit'])) {
    $tendn =$_POST['tendangnhap'];
    $pass =md5($_POST['pass']);
    if (!$tendn || !$pass) {
        ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px;">Vui lòng nhập đầy đủ thông tin</h5>
            <?php
            include 'view/view_dangnhap.php';
            include 'view/view_footer.php';
            exit;
        }
        $array = array();
        $array = add_Quantri($_POST['tendangnhap'], $_POST['pass']);
        if (!empty($array[0]) > 0) {
            $_SESSION['login'] = $_POST['tendangnhap'];
            header('location:index.php');
        } else {
            ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px;">Tên đăng nhập hoặc mật khẩu sai</h5>
        <?php
    }
}
?>