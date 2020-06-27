<?php
    if(isset($_GET['param'])){
        $action = $_GET['param'];
    }else{
        $action = '';
    }

    if(isset($_POST['id'])){
        echo '<script>alert('.$_POST['id'].')</script>';
    }

    switch($action){
        case '':
            $user = $db->findAllUser();
            require('views/admin/customer.php');
            break;
        case 'deleteUser':
            echo '<script>console.log('.$_DELETE['submit'].')</script>';
            // header("Refresh:0");
            break;
        default:
            require('views/error.php');
            break;
    }
?>