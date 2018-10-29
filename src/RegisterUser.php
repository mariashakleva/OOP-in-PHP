<?php

namespace Acme;

class RegisterUser{

    public function execute(array $data, ResposneToUserRegistration $listener){

        var_dump('Registering the user');

        $listener->userRegisteredFailed();

    }

}