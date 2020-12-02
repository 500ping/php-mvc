<?php
    class Home extends Controller {
        function index() {
            $productModel = $this -> model("ProductModel");
            // echo $product -> getProducts();

            $products = $productModel -> getProducts();

            $this -> view("layout",[
                "title" => "List products",
                "products" => $products,
                "page" => "index"
            ]);
        }

        function show($id) {
            $productModel = $this -> model("ProductModel");
            $productDetails =  $productModel -> getProduct($id);

            $this -> view("layout",[
                "title" => "Details",
                "product" => $productDetails,
                "page" => "product-detail"
            ]);
        }
    }
?>