<?php

// use Private\TodoController\TodoController;
use Private\TodoController\TodoController;


$userController = new TodoController();

if ($_SERVER['REQUEST_URI'] === '/user/index') {
    $userController->index();
}



