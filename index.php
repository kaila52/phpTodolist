<?php
session_start();
require "model/database.php";
$db = new Database;
$db->connnect();

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller = '';
}

switch($controller){
    case '':
        require('controller/index.php');
        break;
    case 'index':
        require('controller/index.php');
        break;
    case 'product':
        require('controller/product.php');
        break;
    case 'contact':
        require('controller/contact.php');
        break;
    case 'login':
        require('controller/login.php');
        break;
    case 'register':
        require('controller/register.php');
        break;
    case 'password':
        require('controller/password.php');
        break;
    case 'profile':
        require('controller/profile/index.php');
        break;
    case 'admin':
        require('controller/admin/index.php');
        break;
    case 'logout':
        session_destroy();
        header('location: index.php');
        break;
    default :
    require('controller/error.php');
        break;
}
