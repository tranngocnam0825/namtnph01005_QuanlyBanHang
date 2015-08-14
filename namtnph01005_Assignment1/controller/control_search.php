<?php 
if (isset($_POST['btnsearch'])) {
    $keyword = $_POST['keyword'];
    $search = search_Product($keyword);
foreach ($search as $r){
    include 'view/view_search.php';
}
}
?>