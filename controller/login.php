<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    
    if(isset($_POST['login_user'])){
        $action = 'login';
    }

    switch($action){
        case '':
            require('views/login.php');
            break;
        case 'login':
            $username = mysqli_real_escape_string($db->conn, $_POST['username']);
            $password = mysqli_real_escape_string($db->conn, $_POST['password']);

            if (empty($username)) {
                echo '<script>alert("Vui lòng điền tài khoản")</script>';
                return require('views/login.php');
            }
            if (empty($password)) {
                echo '<script>alert("Vui lòng điền mật khẩu")</script>';
                return require('views/login.php');
            }

            $res = $db->findUser('*','(username = "'.$username.'" AND password = "'.$password.'")OR(email = "'.$username.'" AND password = "'.$password.'")');
            
            if ($res) {
                $res =  $db->checkroler($username);
                $_SESSION['id'] = $res[0][0];
                $_SESSION['username'] = $res[0][1];
                $_SESSION['email'] = $res[0][3];
                $_SESSION['role'] = $res[0][4];
                switch($res[0][4]){
                    case 'manager':
                        header('location: index.php?controller=index');
                        break;
                    case 'writer':
                        break;
                    case 'guest':
                        header('location: index.php?controller=password');
                        break;
                    default:
                        header('location: index.php');
                }
                // header('location: index.php?controller=index');
            } else {
                echo '<script>alert("Sai tài khoản hoặc mật khẩu")</script>';
            }
            break;
        default:
            require('views/login.php');
            break;
    }
?>
