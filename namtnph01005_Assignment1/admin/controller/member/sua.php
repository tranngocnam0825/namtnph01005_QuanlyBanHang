<?php
$id = $_GET['id'];
$r = get_quantri_Id($id);
if (isset($_POST['ok'])) {
    $maqt = $_POST['maqt'];
    $tendn = $_POST['tendn'];
    $pass = $_POST['pass'];
    $update = update_quantri($maqt, $tendn, $pass);
    if ($update) {
        header('location:index.php?page=quantri');
    } else {
        ?>
        <h5 class="validate_dangky" style=" margin: inherit; margin-top: 20px;
            margin-left: 20px; margin-bottom: 20px;">Sủa thất bại liểm tra lại</h5>
        <?php
    }
}
?>