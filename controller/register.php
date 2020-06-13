<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    
    // if(isset($_POST['login_user'])){
    //     $action = 'login';
    // }

    // if(isset($_PUT['action'])){
    //     $controller = 'edit';
    // }
    
    // if(isset($_DELETE['action'])){
    //     $controller = 'delete';
    // }

    switch($action){
        case '':
            require('views/register.php');
            break;
    }
?>