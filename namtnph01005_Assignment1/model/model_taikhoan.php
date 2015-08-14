<?php
function add_taikhoan($user,$pass){
    global $db;
    $sql="select * from taikhoan where user='$user' and pass='$pass'";
    $result=$db->query($sql);
    return $result;
}
function taikhoan_Dangnhap($id){
    global $db;
    $sql="select * from quantri where user='$id'";
    $result=$db->query($sql);
    return $result;
}
?>