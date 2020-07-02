<?php
    if(isset($_GET['param'])){
        $param = $_GET['param'];
    }else{
        $param = '';
    }
    
    if(isset($_POST["updatePasswd"])){
        $param = 'update';
    }

    switch($param){
        case '':
            require('views/profile/password.php');
            break;
        case 'update':
            $oldpasswd = $_POST["oldpasswd"];
            $newpasswd = $_POST["newpasswd"];
            $cfpasswd = $_POST["cfpasswd"];
            $db -> editPassUser($_SESSION['id'],$oldpasswd,$newpasswd);
            echo "<script>alert()</script>";
            break;
        default:
            require('views/profile/password.php');
    }
?>