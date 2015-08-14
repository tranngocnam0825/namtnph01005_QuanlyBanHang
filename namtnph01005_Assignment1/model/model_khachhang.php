<?php
function insert_KhachHang($hoten, $diachi, $sdt, $email, $gioitinh, $matkhau) {
    global $db;
    $sql = "insert into  khachhang(tenkh,diachi,sodienthoai,email,gioitinh,matkhau) values ('$hoten','$diachi','$sdt','$email','$gioitinh','$matkhau')";
    $result = $db->exec($sql);
    return $result;
}
function check_email($email) {
    if (strlen($email) == 0)
        return false;
    if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
        return true;
    return false;
}

function check_hoten($hoten){
    global $db;
    $sql="select * from khachhang where tenkh='$hoten'";
    $result=$db->query($sql);
    return $result;
}
function check_email_trung($email){
    global $db;
    $sql="select * from khachhang where email='$email'";
    $result=$db->query($sql);
    return $result;
}
function dangnhap_kh($tendn){
    global $db;
    $sql = "SELECT * FROM khachhang WHERE tenkh='$tendn'";
    $result = $db->query($sql);
    $result =$result->fetch();
    return $result;
}

?>