<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    
    if(isset($_POST['login'])){
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
            $res = $db->findUser('id,username,email,roler,firstname,lastname,picture','(username = "'.$username.'" AND password = "'.$password.'")OR(email = "'.$username.'" AND password = "'.$password.'")');
            

            if ($res) { 
                $_SESSION['id'] = $res['id'];
                $_SESSION['username'] = $res['username'];
                $_SESSION['email'] = $res['email'];
                $_SESSION['roler'] = $res['roler'];
				$_SESSION['firstname'] = $res['firstname'];
				$_SESSION['lastname'] = $res['lastname'];
                $_SESSION['profile'] = $res['picture'];

                echo print_r($res['roler']);
                switch($res['roler']){
                    case 'manager':
                        header('location: index.php?controller=admin');
                        break;
                    case 'guest':
                        header('location: index.php?controller=profile');
                        break;
                    default:
                        header('location: index.php');
                }
            } else {
                echo '<script>alert("Sai tài khoản hoặc mật khẩu")</script>';
            }
            break;
        default:
            require('views/error.php');
            break;
    }
?>
