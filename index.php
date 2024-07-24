<?php
include "./config/DBConnect.php";
session_start();

$path = explode("?", $_SERVER["REQUEST_URI"]);
$resource = explode("/", $path[0]);

$page = "";

// API 통신이 아닐 때
if ($resource[1] != "api") {
    switch ($resource[1]) {
        case "":
            $page = "./pages/index.php";
            break;
        default:
            $page = "./pages/error.php";
            break;
    }

    include $page;

} else {
    switch ($resource[2]) {
        case "login":
            $page = "./controller/login.php";
            break;
        default:
            $page = "./pages/error.php";
            break;
    }
    include $page;
}