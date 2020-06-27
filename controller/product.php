<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = 'shoes';
    }
    $res = $db->getProduct('*',$action);
    
    if(!isset($res)){
        header('location: index.php');
    }
    require('views/product.php');
?>