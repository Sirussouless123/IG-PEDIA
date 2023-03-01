<?php

require 'controllers/AuthController.php';
$auth = new AuthController;


define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


if (empty($_GET['page'])) {
    require 'views/test.php';
} else {

    $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
   

    switch ($url[0]) {
        case 'test':
            $auth->connect();
            break;

        default:
            # code...
            break;
    }
}
