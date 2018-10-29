<?php

namespace Acme;

use Acme\Users\Person;

class Business{

protected $staff;

public function __construct(Staff $staff){
    $this->staff = $staff;
}

public function hire(Person $person){
    //$this->staff is equal to an instance of Staff
    $this->staff->add($person);
}

public function getStaffMembers(){
    return $this->staff->members();
}

}