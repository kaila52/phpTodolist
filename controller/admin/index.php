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
            require('views/admin/index.php');
            break;
        case 'customer':
            require('customer.php');
            break;
    }
?>