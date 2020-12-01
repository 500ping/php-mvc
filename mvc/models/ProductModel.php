<?php
    class ProductModel extends Database {
        public function getProducts() {
            $query = "select * from products";
            return mysqli_query($this->conn, $query);
        }

        public function getProduct($id) {
            $query = "select * from products where id = ".(int)$id;
            return mysqli_query($this->conn, $query);
        }

        public function addProduct($title, $description, $image, $status) {
            $date = date('Y-m-d H:i:s');

            $query = "insert into products (title, description, image, status, create_at) 
            values ('$title', '$description', '$image', '$status', '$date')";

            mysqli_query($this->conn, $query);
            // if (mysqli_query($this->conn, $query)) {
            //     echo "success.";
            // } else {
            //     echo mysqli_error($this->conn);
            // }
        }

        public function editProduct($id, $title, $description, $image, $status) {
            $date = date('Y-m-d H:i:s');

            $query = "update products set title = '$title', description = '$description', image = '$image', 
            status = '$status', update_at = '$date' where id = '$id'";

            mysqli_query($this->conn, $query);
        }

        public function delProduct($id) {
            $query = "delete from products where id = ".(int)$id;
            mysqli_query($this->conn, $query);
        }
    }
?>