<?php

class Task{
    public $description;
    public $title;
    public $completed = false;

    public function __construct($description, $title){
        $this->description = $description;
        $this->title = $title;
    }

    public function complete(){
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'Trough Laracast Course');

$task->complete();

var_dump($task->completed);
var_dump($task);