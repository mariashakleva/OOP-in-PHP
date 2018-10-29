<?php

interface Provider {
    public function getAuthorizationUrl();
}

function login(Provider $provider){
    $provider->authorize();
}

abstract class AbstractProvider{
    protected function related(){

    }
}

class FacebookProvider implements Provider{
    protected function getAuthorizationUrl(){
        return '';
    }
}

