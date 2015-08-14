<?php
function add_Quantri($tendn,$pass){
    $pass= md5($pass);
    global $db;
    $sql="select * from quantri where tendn='$tendn' and pass='$pass'";
    $result=$db->query($sql);
    $result=$result->fetchAll();
    return $result;
}
?>