<?php

require_once dirname(__FILE__). "/todoModel.php";

class TodoController extends TodoModel{
    
    public function addTodo($todo){

        return $this->addToDoDB($todo);
    }
}

?>