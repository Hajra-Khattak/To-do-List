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
        // public function index(){
        //     $users = $this->usermodel->getAll();         
        //     include_once '../view/index.php';
        // }

        public function index(){
            $users = $this->usermodel->getAll();
            echo $users;
            include_once '../views/user/show.php'. $users;
        }
    
        public function create() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
    
                if ($this->validateInput($name, $email, $password)) {
                    $this->usermodel->create($name, $email, $password);
                    header("Location: /user/index");
                }
            }
            include_once "../views/user/create.php";
        }
    
        private function validateInput($name, $email, $password) {
            if (empty($name) || empty($email) || empty($password)) {
                echo "All fields are required.";
                return false;
            }
    
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format.";
                return false;
            }
    
            return true;
        }

}

?>