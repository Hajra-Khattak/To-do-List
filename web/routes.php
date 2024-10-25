<?php

// use Private\TodoController\TodoController;
use Private\TodoController\TodoController;
use Private\Models\User;

require_once "../private/todoController.php";


$userController = new TodoController();

$requestUrl = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];


if ($_SERVER['REQUEST_URI'] === '/view/user/show') {
    $userController->index();
}

// if ($requestMethod === 'GET') {

// if ($requestUrl === '/') {
//     $userController->index();
// }


// }


