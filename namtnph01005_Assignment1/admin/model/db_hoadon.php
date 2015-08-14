<?php
 function get_Hoadon(){
     global $db;
     $sql="select * from hoadon";
     $result=$db->query($sql);
     $result=$result->fetchALL();
     return $result;
 }
 function get_hoadon_Id($id){
     global $db;
     $sql="select * from hoadon where id='$id'";
     $result=$db->query($sql);
     $result=$result->fetch();
     return $result;
 }
 function insert_hoadon($id,$mahd,$soluong,$masp){
     global $db;
     $sql="INSERT INTO hoadon(id,mahd, soluong,masp) VALUES ('$id','$mahd','$soluong','$masp')";
     $result=$db->exec($sql);
     return $result;
 }
 function update_hoadon($id,$mahd,$soluong,$masp){
     global $db;
     $sql="UPDATE hoadon SET id='$id',mahd='$mahd',soluong='$soluong',masp='$masp' WHERE id='$id'";
     $result=$db->exec($sql);
     return $result;
 }
 function delete_hoadon($id){
     global $db;
     $sql="DELETE FROM hoadon WHERE id='$id'";
     $result=$db->exec($sql);
     return $result;
 }
?>