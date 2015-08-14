<?php
 function get_Sanpham(){
     global $db;
     $sql="select * from sanpham";
     $result=$db->query($sql);
     $result=$result->fetchALL();
     return $result;
 }
 function get_Sanpham_Id($id){
     global $db;
     $sql="select * from sanpham where masp='$id'";
     $result=$db->query($sql);
     $result=$result->fetch();
     return $result;
 }
 function insert_SanPham($id,$tensp,$gia,$gioithieu,$hinhanh,$mamuc){
     global $db;
     $sql="INSERT INTO sanpham(masp,tensp, gia, gioithieu, hinhanh, mamucsp) VALUES ('$id','$tensp','$gia','$gioithieu','$hinhanh','$mamuc')";
     $result=$db->exec($sql);
     return $result;
 }
 function update_SanPham($id,$tensp,$gia,$gioithieu,$hinhanh,$mamuc){
     global $db;
     $sql="UPDATE sanpham SET masp='$id',tensp='$tensp',gia='$gia',gioithieu='$gioithieu',hinhanh='$hinhanh',mamucsp='$mamuc' WHERE masp='$id'";
     $result=$db->exec($sql);
     return $result;
 }
 function delete_SanPham($id){
     global $db;
     $sql="DELETE FROM sanpham WHERE masp='$id'";
     $result=$db->exec($sql);
     return $result;
 }
?>