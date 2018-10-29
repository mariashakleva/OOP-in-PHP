<?php 

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$jeff = new Person('Jeffrey');
$staff = new Staff([$jeff]);

$laracast = new Business($staff);

$laracast->hire((new Person('Jane Doe')));

var_dump($laracast->getStaffMembers());
