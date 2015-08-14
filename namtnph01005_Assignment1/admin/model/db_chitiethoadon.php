<?php
 function get_chitiethoadon(){
     global $db;
     $sql="select * from chitiethoadon";
     $result=$db->query($sql);
     $result=$result->fetchALL();
     return $result;
 }
 function get_chitiethoadon_Id($id){
     global $db;
     $sql="select * from chitiethoadon where makh='$id'";
     $result=$db->query($sql);
     $result=$result->fetch();
     return $result;
 }
 function insert_chitiethoadon($kh,$mahd){
     global $db;
     $sql="INSERT INTO chitiethoadon(makh, mahd) VALUES ('$kh','$makh')";
     $result=$db->exec($sql);
     return $result;
 }
 function update_chitiethoadon($kh,$mahd){
     global $db;
     $sql="UPDATE chitiethoadon SET makh='$kh',mahd='$mahd' WHERE makh='$id'";
     $result=$db->exec($sql);
     return $result;
 }
 function delete_chitiethoadon($id){
     global $db;
     $sql="DELETE FROM chitiethoadon WHERE makh='$id'";
     $result=$db->exec($sql);
     return $result;
 }
?>