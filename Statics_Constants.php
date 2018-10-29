<?php

class Math{
    public static function add(...$nums){
        return array_sum($nums);
    }
}

// echo Math::add(1,2,3);

class Person{
    // shared variable
    // public static $age = 1;
    public $age = 1;

    //age is a shared variable that's why we can't access it $this->$age
    // public function haveBirthday(){
    //     static::$age++;
    // }

    public function haveBirthday(){
        $this->age++;
    }

    public function age(){
        return $this->age;
    }
}

$joe = new Person;
$joe->haveBirthday();

echo $joe->age();

$jane = new Person;
$jane->haveBirthday();

echo $jane->age();

class BankAccount {
   const TAX = .09;
}

echo BankAccount::TAX;