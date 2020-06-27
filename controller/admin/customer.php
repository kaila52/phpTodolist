<?php
    if(isset($_GET['param'])){
        $action = $_GET['param'];
    }else{
        $action = '';
    }

    if(isset($_POST['update'])){
        $action = 'updateUser';
        echo 'console.log('.$_POST['id'].')';
        echo 'alert('.$_POST['id'].')';
        
    }

    if(isset($_POST['delete'])){
        $action = 'deleteUser';
    }

    switch($action){
        case '':
            $user = $db->findAllUser();
            require('views/admin/customer.php');
            break;
        case 'deleteUser':
            $db->deleteUser($_POST['delete']);
            echo "success";
            break;
        case 'updateUser':
            echo '<script>console.log("sssssssss")</script>';
            // header("Refresh:0");
            break;
        default:
            require('views/error.php');
            break;
    }
?>