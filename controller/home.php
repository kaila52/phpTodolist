<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    
    switch($action){
        case '':
            require('views/home.php');
            break;
        default:
            require('views/error.php');
            break;
    }
?>