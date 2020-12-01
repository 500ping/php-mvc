<?php
    class Admin extends Controller {
        function index() {
            $productModel = $this -> model("ProductModel");
            // echo $product -> getProducts();

            $products = $productModel -> getProducts();

            $this -> view("admin/index",[
                "title" => "List products",
                "products" => $products
            ]);
        }

        function add() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $productModel = $this -> model("ProductModel");

                $title = $_POST["title"];
                $description = $_POST["description"];
                $image = $_POST["image"];
                $status = $_POST["status"];

                // $image = "";

                if (isset($_FILES['image'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], './mvc/uploads/' . $_FILES['image']['name']);
                    $image = $_FILES['image']['name'];
                }

                $productModel -> addProduct($title, $description, $image, $status);

                header("Location: /mvc/admin/");
            } 

            $this -> view("admin/add",[
                "title" => "Add product",
            ]);
        }

        function edit($id) {
            $productModel = $this -> model("ProductModel");
            $productDetails =  $productModel -> getProduct($id);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = $_POST["id"];
                $title = $_POST["title"];
                $description = $_POST["description"];
                $image = $_POST["oldImage"];
                $status = $_POST["status"];

                if (!empty($_FILES['image']['name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], './mvc/uploads/' . $_FILES['image']['name']);
                    $image = $_FILES['image']['name'];
                }

                // echo $image;

                $productModel -> editProduct($id, $title, $description, $image, $status);

                header("Location: /mvc/admin/");
            } 

            $this -> view("admin/edit",[
                "title" => "Edit product",
                "product" => $productDetails
            ]);
        }

        function delete($id) {
            $productModel = $this -> model("ProductModel");
            $productModel -> delProduct($id);

            header("Location: /mvc/admin/");
        }
    }
?>