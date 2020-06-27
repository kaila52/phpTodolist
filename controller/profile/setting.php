<?php
    if(isset($_GET['param'])){
        $param = $_GET['param'];
    }else{
        $param = '';
    }
    
    if(isset($_PUT["submit"])){
        $param = 'account';
    }

    switch($param){
        case '':
            require('views/profile/setting.php');
            break;
        case 'account':
            $lastname = $_PUT["lastname"];
            $firstname = $_PUT["firstname"];
            $email = $_PUT["email"];
            echo "$lastname $firstname $email";
            break;
        default:
            
    }
?>