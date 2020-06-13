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
    case 'login':
        require('controller/login.php');
        break;
    case 'register':
        require('controller/register.php');
        break;
    case 'password':
        require('controller/password.php');
        break;
    case 'register':
        require('controller/register.php');
        break;
    case 'product':
        require('controller/admin/product.php');
        break;
    default :
    require('controller/error.php');
        break;
}
// $controller = "login";
// $action = 'index';


// if (isset($_GET["url"])) {
//     $arr =  explode("/", trim($_GET['url']));
// }

// if (!isset($arr[0])) {
//     $arr[0] = $controller;
// }


// // check file có tồn tại hay k
// if (file_exists('controller/' . $arr[0] . '.php')) {
//     $controller = $arr[0];
// } else {
//     $controller = 'err';
// }

// switch ($controller) {
//     case 'err':
//         require('controller/error.php');
//         break;
//     default:
//         require('controller/' . $controller . '.php');
// }


?>