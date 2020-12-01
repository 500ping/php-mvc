<?php
    class Home extends Controller {
        function index() {
            $productModel = $this -> model("ProductModel");
            // echo $product -> getProducts();

            $products = $productModel -> getProducts();

            $this -> view("index",[
                "title" => "List products",
                "products" => $products
            ]);
        }

        function show($id) {
            $productModel = $this -> model("ProductModel");
            $productDetails =  $productModel -> getProduct($id);

            $this -> view("product-detail",[
                "title" => "Details",
                "product" => $productDetails
            ]);
        }
    }
?>