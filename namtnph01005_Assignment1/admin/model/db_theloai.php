<?php
 function get_Mucsanpham(){
     global $db;
     $sql="select * from mucsanpham";
     $result=$db->query($sql);
     $result=$result->fetchALL();
     return $result;
 }
 function get_Mucsanpham_Id($id){
     global $db;
     $sql="select * from mucsanpham where mamucsp='$id'";
     $result=$db->query($sql);
     $result=$result->fetch();
     return $result;
 }
 function insert_MucSanPham($mamuc,$tenmuc){
     global $db;
     $sql="INSERT INTO mucsanpham(mamucsp, tenmucsp) VALUES ('$mamuc','$tenmuc')";
     $result=$db->exec($sql);
     return $result;
 }
 function update_MucSanPham($mamuc,$tenmuc){
     global $db;
     $sql="UPDATE mucsanpham SET mamucsp='$mamuc',tenmucsp='$tenmuc' WHERE mamucsp='$mamuc'";
     $result=$db->exec($sql);
     return $result;
 }
 function delete_MucSanPham($id){
     global $db;
     $sql="DELETE FROM mucsanpham WHERE mamucsp='$id'";
     $result=$db->exec($sql);
     return $result;
 }
?>