<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = 'shoes';
    }
    $res = $db->getProduct('*',$action);
    require('views/product.php');
?>