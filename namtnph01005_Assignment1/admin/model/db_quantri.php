<?php
function add_Quantri($tendn,$pass){
    global $db;
    $pass =md5($pass);
    $sql="select * from quantri where tendn='$tendn' and pass='$pass'";
    $result=$db->query($sql);
    $result=$result->fetchAll();
    return $result;
}
function dangnhap($id){
    global $db;
    $sql="select * from quantri where tendn='$id'";
    $result=$db->query($sql);
    $result=$result->fetch();
    return $result;
}
function get_member(){
    global $db;
    $sql="select * from quantri";
    $result=$db->query($sql);
    $result=$result->fetchALL();
    return $result;
}
 function get_quantri_Id($id){
     global $db;
     $sql="select * from quantri where maqt='$id'";
     $result=$db->query($sql);
     $result=$result->fetch();
     return $result;
 }
 function insert_quantri($maqt,$tendn,$pass){
     global $db;
     $sql="INSERT INTO quantri(maqt, tendn,pass) VALUES ('$maqt','$tendn','$pass')";
     $result=$db->exec($sql);
     return $result;
 }
 function update_quantri($maqt,$tendn,$pass){
     global $db;
     $sql="UPDATE quantri SET maqt='$maqt',tendn='$tendn',pass='$pass' WHERE maqt='$maqt'";
     $result=$db->exec($sql);
     return $result;
 }
 function delete_quantri($id){
     global $db;
     $sql="DELETE FROM quantri WHERE maqt='$id'";
     $result=$db->exec($sql);
     return $result;
 }
?>
?>
