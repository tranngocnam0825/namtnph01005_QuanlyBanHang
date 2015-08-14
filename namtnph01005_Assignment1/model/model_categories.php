<?php 
    function get_All_mucsanpham(){
        global $db;
        $query = "select * from mucsanpham";
        $result=$db->query($query);
        $result=$result->fetchAll();
        return $result;
    }
?>