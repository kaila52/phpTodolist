<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    
    switch($action){
        case '':
            require('views/index.php');
            break;
    }
?>