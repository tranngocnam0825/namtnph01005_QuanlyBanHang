<?php
 function get_Khachhang(){
     global $db;
     $sql="select * from khachhang";
     $result=$db->query($sql);
     $result=$result->fetchALL();
     return $result;
 }
 function get_Khachhang_Id($id){
     global $db;
     $sql="select * from khachhang where makh='$id'";
     $result=$db->query($sql);
     $result=$result->fetch();
     return $result;
 }
 function insert_KhachHang($hoten, $diachi, $sdt, $email, $gioitinh) {
    global $db;
    $sql = "insert into  khachhang(tenkh,diachi,sodienthoai,email,gioitinh) values ('$hoten','$diachi','$sdt','$email','$gioitinh')";
    $result = $db->exec($sql);
    return $result;
 }
 function update_KhachHang($id,$tenkh,$diachi,$sodienthoai,$email,$matkhau){
     global $db;
     $sql="UPDATE khachhang SET makh='$id',tenkh='$tenkh',diachi='$diachi',sodienthoai='$sodienthoai',email='$email',matkhau='$matkhau' WHERE makh='$id'";
     $result=$db->exec($sql);
     return $result;
 }
 function delete_Khachhang($id){
     global $db;
     $sql="DELETE FROM khachhang WHERE makh='$id'";
     $result=$db->exec($sql);
     return $result;
 }
?>