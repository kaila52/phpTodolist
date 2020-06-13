<?php
    if(isset($_GET['param'])){
        $action = $_GET['param'];
    }else{
        $action = '';
    }

    switch($action){
        case '':
            require('views/admin/customer.php');
            break;
    }
?>