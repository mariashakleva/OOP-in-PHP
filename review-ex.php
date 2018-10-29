<?php

require 'vendor/autoload.php';

$registration = new Acme\RegisterUser;
$authController = new Acme\AuthController($registration);

$authController->register();