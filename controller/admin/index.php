<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }

    if($_SESSION['roler'] == 'manager'){
        
    }else{
        header('location: index.php');
    }
    
    switch($action){
        case '':
            require('views/admin/dashboard.php');
            break;
        case 'dashboard':
            require('views/admin/dashboard.php');
            break;
        case 'customer':
            require('customer.php');
            break;
    }
