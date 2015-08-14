
    <?php 
$id=$_GET['id'];
$r= get_Mucsanpham_Id($id);
if (isset($_POST['ok'])) {
    $mamucsp=$_POST['mamucsp'];
    $tenmucsp = $_POST['tenmucsp'];
    $update = update_MucSanPham($mamucsp,$tenmucsp);
    if ($update) {
        header('location:index.php?page=loaisanpham');
    } else {
       ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px; margin-bottom: 20px;">Sủa thất bại liểm tra lại</h5>
        <?php
    }
}
?>

