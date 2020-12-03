<?php
    class App {
        // http://localhost/mvc/home/test/a/b/c
        protected $controller = "home";
        protected $action = "index";
        protected $params = [];

        function __construct() {
            // Array ( [0] => home [1] => test [2] => a [3] => b [4] => c )
            $arr = $this -> UrlProcess();
            // print_r($arr);
            
            // controller
            if (isset($arr[0])) {
                if (file_exists("./mvc/controllers/".$arr[0].".php")) {
                    $this -> controller = $arr[0];
                    unset($arr[0]);
                }
            } else {
                header("Location: /mvc/home/");
            }

            require_once "./mvc/controllers/".$this -> controller.".php";
            $this -> controller = new $this -> controller;

            // action
            if (isset($arr[1])) {
                if (method_exists($this -> controller, $arr[1])) {
                    $this -> action = $arr[1];
                }
                unset($arr[1]);
            }

            // params
            $this -> params = $arr ? array_values($arr) : [];

            // print_r($this -> controller."<br>");
            // print_r($this -> action."<br>");
            // print_r($this -> params);

            call_user_func_array([$this -> controller, $this -> action], $this -> params);
        }

        function UrlProcess() {
            // home/test/a/b/c
            if (isset($_GET["url"])) {
                return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }
    }
?>