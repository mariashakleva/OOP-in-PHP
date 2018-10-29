<?php

namespace Acme;

use Acme\Users\Person;

class Staff{
    protected $members = [];

    // if you default it to an array(or any value) it means it's not obligatory, so staff can be initiated without passing members to it
    public function __construct($members = []){
        $this->members = $members;
    }

    public function add(Person $person){
        $this->members[] = $person;
    }

    public function members(){
        return $this->members;
    }
}