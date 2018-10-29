<?php

abstract class Shape{
    protected $color;

    public function __constructor($color){
        $this->color = $color;
    }

    abstract public function getArea();
}

class Square extends Shape{
    protected $length = 4;

    public function getArea(){
        return pow($this->length, 2);
    } 
}

class Triangle extends Shape {

    protected $base = 4;
    protected $height = 7;

    public function getArea(){
        return .5 * $this->base * $this->height;
    }
}

class Circle extends Shape{
    protected $radius = 5;

    public function getArea(){
        return M_PI * pow($this->radius, 2);
    }

}

//you can't instantiate an object only with new, that's why you wrap it() or put it in a variable
echo (new Circle)->getArea();

class Mailer{
    public function send($to, $from, $body){

    }
}

class UserMailer extends Mailer{
    public function sendWelcomeEmail(User $user){
        return $this->send($user->email);
    }
}

