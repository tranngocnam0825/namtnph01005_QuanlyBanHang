<?php
if (isset($_POST['ok'])) {
    $mqt=$_POST['maqt'];
    $tendn = $_POST['tendn'];
    $pass = md5($_POST['pass']);
    $insert = insert_quantri($mqt,$tendn,$pass);
    header('location:index.php?page=quantri');
}
?>