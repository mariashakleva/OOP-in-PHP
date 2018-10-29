<?php

namespace Acme;

class AuthController implements ResposneToUserRegistration{

    protected $registration;

    public function __construct(RegisterUser $registration){
        $this->registration = $registration;
    }

    //when the register method is triggered we refer to a Registration Service and pass data, $this = $listener to check if the user registered successfully
    public function register(){
        $this->registration->execute([], $this);
    }

    public function userRegisteredSuccessfully(){
        var_dump('Created successfully, redirect somewhere.');
    }

    public function userRegisteredFailed(){
        var_dump('Created unsuccessfully, redirect back to form.');
    }

}