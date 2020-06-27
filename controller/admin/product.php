<?php
    if(isset($_GET['param'])){
        $param = $_GET['param'];
    }else{
        $param = 'directory';
    }
    


    switch($param){
        case 'directory':
            require('views/admin/directory.php');
            break;
        case 'detail':
            require('views/admin/detail.php');
            break;
        default:
            require('views/error.php');
            break;
    }
?>