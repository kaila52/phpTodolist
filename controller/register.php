<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    
    if(isset($_POST['register'])){
        $action = 'register';
    }

    // if(isset($_PUT['action'])){
    //     $controller = 'edit';
    // }
    
    // if(isset($_DELETE['action'])){
    //     $controller = 'delete';
    // }

    switch($action){
        case '':
            require('views/register.php');
            break;
        case 'register':
			$firstname = mysqli_real_escape_string($db->conn, $_POST['firstname']);
			$lastname = mysqli_real_escape_string($db->conn, $_POST['lastname']);
			$username = mysqli_real_escape_string($db->conn, $_POST['username']);
			$email = mysqli_real_escape_string($db->conn, $_POST['email']);
			$password = mysqli_real_escape_string($db->conn, $_POST['password']);
			$confim = mysqli_real_escape_string($db->conn, $_POST['confim']);
	
            if (empty($firstname)) {
                echo '<script>alert("Vui lòng điền tên")</script>';
                return require('views/register.php');
            }
			if (empty($lastname)) {
                echo '<script>alert("Vui lòng điền tên")</script>';
                return require('views/register.php');
            }
			if (empty($username)) {
                echo '<script>alert("Vui lòng điền tên")</script>';
                return require('views/register.php');
            }
            if (empty($email)) {
                echo '<script>alert("Vui lòng điền email")</script>';
                return require('views/register.php');
            }
			   if (empty($password)) {
                echo '<script>alert("Vui lòng điền mật khẩu")</script>';
                return require('views/register.php');
            }
			   if (empty($confim)) {
                echo '<script>alert("Vui lòng xác thực lại mật khẩu")</script>';
                return require('views/register.php');
            }
			if($password != $confim){
				echo '<script>alert("Vui lòng xác thực lại mật khẩu")</script>';
                return require('views/register.php');
				};
            $res = $db->findUser('username,email','(username= "'.$username.'")OR(email = "'.$email.'")');
		
			if(empty($res)){
				$db->addUser($username, $password, $email,$firstname,$lastname);
				 $res = $db->findUser('id,username,email,roler,firstname,lastname,picture','(username = "'.$username.'" AND password = "'.$password.'")OR(email = "'.$username.'" AND password = "'.$password.'")');
				$_SESSION['id'] = $res[0];
                $_SESSION['username'] = $res[1];
                $_SESSION['email'] = $res[2];
                $_SESSION['roler'] = $res[3];
				$_SESSION['firstname'] = $res[4];
				$_SESSION['lastname'] = $res[5];
				$_SESSION['picture'] = $res[6];
				
				return header('location: index.php');;
			}else{
				echo '<script>alert("tài khoản hoặc email đã tồn tại")</script>';
                return require('views/register.php');
				
				}
          
            break;
			
			    }
?>