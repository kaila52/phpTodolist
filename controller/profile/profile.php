<?php
    if(isset($_GET['param'])){
        $param = $_GET['param'];
    }else{
        $param = '';
    }
    
    if(isset($_PUT["submit"])){
        $param = 'image';
    }

    switch($param){
        case '':
            require('views/profile/profile.php');
            break;
        case 'image':
            $name = $_FILES["image"]["name"];
            $number = mt_rand();
            $_SESSION['profile'] = $number.$name;
            $profile = $_SESSION['profile'];
            move_uploaded_file($_FILES["image"]["tmp_name"],"pucblic/images/user/$profile");
            $db->updatePicture($_SESSION['id'],$_SESSION['profile']);
            require('views/profile/profile.php');
            break;
        default:
            
    }
?>