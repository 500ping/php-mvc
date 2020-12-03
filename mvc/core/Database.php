<?php
    class Database {
        public $conn;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "12345";
        protected $dbname = "trainning";

        function __construct() {
            $this -> conn =  mysqli_connect($this->servername, $this->username, $this->password);
            mysqli_select_db($this->conn, $this->dbname);

            if (!mysqli_select_db($this->conn, $this->dbname)) {
                $sql1 = "create database IF NOT EXISTS trainning";
                mysqli_query($this->conn, $sql1);

                mysqli_select_db($this->conn, $this->dbname);

                $sql2 = "CREATE TABLE products (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    title varchar(50),
                    description varchar(255),
                    image varchar(255),
                    status int,
                    create_at datetime,
                    update_at datetime
                )";

                $sql3 = "insert into products (title, description, image, status, create_at) values ('test1', 'ahihi!', '107507096_281995369776823_2440536306683297256_n.jpg.png', 1, now())";
                mysqli_query($this->conn, $sql2);
                mysqli_query($this->conn, $sql3);
            }

            mysqli_query($this->conn, "SET ANEMS 'utf8'");
        }
    }
?>