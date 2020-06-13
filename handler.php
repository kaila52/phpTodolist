<?php
class Person
{
    private $first_name;
    private $last_name;
    private $age;
    private $name;
    private $password;

    public function __construct($name, $password, $first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->name = $name;
        $this->password = $password;
    }


    public function login($username, $password)
    {
        global $conn;
        $this->name = $username;
        $this->password = $password;

        if (isset($_POST['login_user'])) {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            if (empty($username)) {
                array_push($errors, "Vui lòng nhập tài khoản");
            }
            if (empty($password)) {
                array_push($errors, "Vui lòng nhập mật khẩu");
            }

            if (count($errors) == 0) {
                $query = "SELECT * FROM logins WHERE username='$username' AND password='$password'";
                $results = mysqli_query($conn, $query);
                if (mysqli_num_rows($results) == 1) {
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "Bạn đã đăng nhập";
                    header('location: profile.php');
                } else {
                    array_push($errors, "Sai tài khoản hoặc mật khẩu");
                }
            }
        }
    }

    public function register($email, $password, $first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }
}
