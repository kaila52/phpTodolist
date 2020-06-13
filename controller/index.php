<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    
    if(isset($_POST['login_user'])){
        $action = 'login';
    }

    if(isset($_PUT['action'])){
        $controller = 'edit';
    }
    
    if(isset($_DELETE['action'])){
        $controller = 'delete';
    }

    switch($action){
        case '':
            require('views/index.php');
            break;
        case 'login':
            break;
        case 'edit':
            require('views/login.php');
            break;
        case 'delete':
            require('views/login.php');
            break;
        default:
            require('views/index.php');
            break;
    }
?>