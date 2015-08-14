<?php 
    function get_sp(){
        global $db;
        $query = "select * from sanpham";
        $result=$db->query($query);
        $result=$result->fetchAll();
        return $result;
    }
    function get_All_sanpham($mamucsp){
        global $db;
        $query = "select * from sanpham where mamucsp='$mamucsp'";
        $result=$db->query($query);
        $result=$result->fetchAll();
        return $result;
    }
    function get_SanPham_Id($id){
        global $db;
        $query = "select * from sanpham where masp='$id'";
        $result=$db->query($query);
        $result=$result->fetch();
        return $result;  
    }
    function search_Product($tesp){
        global $db;
        $query = "select * from sanpham where tensp Like '%$tesp%'";
        $result=$db->query($query);
        return $result;  
    }
    
?>