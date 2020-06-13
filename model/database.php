<?php
    class Database
    {
        private $hostname = 'localhost';
        private $name = 'root';
        private $passwd = '';
        private $dbname = 'test';

        public $conn = NULL;
        public $result = NULL;

        public function conn(){
            return $this->conn;
        }
// connect database
        public function connnect()
        {
            $this->conn = new mysqli($this->hostname, $this->name, $this->passwd, $this->dbname);
            if (!$this->conn) {
                echo 'connect db fail !!!';
                exit();
            } else {
                mysqli_set_charset($this->conn, 'utf8');
            }
            return $this->conn;
        }
//query database
        public function execute($sql)
        {
            $this->result = $this->conn->query($sql);

            return $this->result;
        }

        public function getData()
        {
            if ($this->result) {
                $data = mysqli_fetch_array($this->result);
            } else {
                $data = 0;
            }
            return $data;
        }

        public function getAllData()
        {
            if (!$this->result) {
                $data = 0;
            } else {
                while ($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
// sevice user
        public function findUser($query, $requirement)
        {
            $this->execute('select ' . $query . ' from users where ' . $requirement);
            return $this->getData();
        }

        public function findAllUser()
        {
            $this->execute('select * from users');
            return $this->getAllData();
        }

        public function addUser($username, $passwd, $email)
        {
            $sql = "INSERT INTO users VALUES (null,'$username', '$passwd', '$email')";
            return $this->execute($sql);
        }

        public function editUser($id, $username, $passwd, $email)
        {
            $sql = "UPDATE users SET username = '$username', password= '$passwd', email= '$email' WHERE id = '$id'";
            return $this->execute($sql);
        }

        public function deleteUser()
        {
        }

//sevice product
        public function getProduct(){
            $this->execute('select * from users');
            return $this->getData();
        }
        public function addProduct(){
            
        }
        public function editProduct(){

        }
        public function deleteProduct(){

        }
        
    }
?>