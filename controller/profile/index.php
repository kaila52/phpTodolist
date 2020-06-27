<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }

    switch($action){
        case '':
            require('profile.php');
            break;
        case 'setting':
            require('views/profile/setting.php');
            break;
        case 'password':
            require('password.php');
            break;
        default:
            require('views/error.php');
            break;
    }
?>