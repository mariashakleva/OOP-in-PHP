<?php

interface Animal{
    //any concrete implementation must contain a method communicate
    public function communicate();
}

class Dog implements Animal{
    public function communicate(){
        return 'bark';
    }
}

class Cat implements Animal{
    public function communicate(){
        return 'meow';
    }
}



interface Logger{
    public function execute($message);
}

class LogToFile implements Logger{
    public function execute($message){
        var_dump('log the msg to a file: ' . $message);
    }
}

class LogToDatabase implements Logger{
    public function execute($message){
        var_dump('log the msg to a database');
    }
}

class UserController{

    protected $logger;

    public function __construct(Logger $logger){
        $this->logger = $logger;
    }
    public function show(){
        $user = 'JohnDoe';

        $this->logger->execute($user);
    }
}

$controller = new UserController(new LogToDatabase);

$controller->show();

// examples for interfaces

// interface CastsToJson{
//     public function toJson();
// }

// class User implements CastsToJson{}
// class Collestion implements CastsToJson{}


// interface Repository{
//     public function save();
// }

// class MongoRepository implements Repository{
//     public function save(){

//     }
// }

// class FileRepository implements Repository{
//     public function save(){
        
//     }
// }


// interface CanBeFiltered{
//     public function filter();
// }

// class Favorited implements CanBeFilteres{
//     public function filter(){

//     }
// }

// class Unwatched implements CanBeFilteres{
//     public function filter(){

//     }
// }

// class Difficulty implements CanBeFilteres{
//     public function filter(){

//     }
// }


interface CV{
    public function listDate($date);
}

class WorkExperience implements CV{
    public $date;
    public function listDate($date){
        $this->date = $date;
        var_dump('I worked in Apple ' . $date);
    }
}

class Education implements CV{
    public $date;
    public function listDate($date){
        $this->date = $date;
        var_dump('I visited NYC from ' . $date);
    }
}

class BioDate{
    public $cv;
    public function __construct(CV $cv){
        $this->cv = $cv;
    }

    public function updateDate(){
        $newDate = date("Y");
        $this->cv->listDate($newDate);
    }
}

$biodate = new BioDate(new Education);
$biodate->updateDate();