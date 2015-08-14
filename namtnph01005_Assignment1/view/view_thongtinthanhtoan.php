<?php if (isset($_SESSION['dangnhap'])) {
    $dangnhap = $_SESSION['dangnhap'];
    $dgn = dangnhap_kh($dangnhap);
    ?>
<div class="thongtinx">
    <p> Xin Cảm ơn bạn </p>
    <p>Bạn : &nbsp;<?php echo $dgn['tenkh'] ?></p>
    <p>Email: &nbsp;<a href="#"><?php echo $dgn['email'] ?></a></p>
    <p>đã đặt mua hàng ở
        Website của chúng tôi thông 
        Hàng hóa của bạn sẽ được chuyển
        tới bạn trong thời gian sớm nhất</p>
    <p>Xin cảm ơn Bạn</p><br/>
    <p>Nếu có thắc mắc gì xin vui lòng liên hệ với chúng tôi qua</p>
    <p>SĐT:&nbsp; 01666060113</p>
    <p>Email: &nbsp; <a href="nguyenvn626@gmail.com">nguyenvn626@gmail.com</a></p>
</div>
<?php 
}
?>