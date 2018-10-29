<?php

class person{
    private $name;
    private $age;

    public function __construct($name){
        $this->name = $name;
    }

    public function getAge($age){
        return $this->age * 365;
    }

    public function setAge($age){

        if($age < 18){
            throw new Exception('Person is not old enough');
        }
        $this->age = $age;
    }
}

$john = new Person('John Doe');
$john->setAge(30);


// var_dump($john->getAge(30));

class Mother{
    public function getEyeCount(){
        return 2;
    }
}

class Child extends Mother{

}

(new Child)->getEyeCount();

