<?php

namespace Private\TodoController;
// require_once dirname(__FILE__). "/todoModel.php";

use Private\Models\User;

class TodoController {
    
private $usermodel;

        public function __construct(){
            $this->usermodel = new User();
        }

        // all users
        public function index(){
            $users = $this->usermodel->getAll();
            
            include_once '../view/index.php';
        }

}

?>