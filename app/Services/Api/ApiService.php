<?php

namespace App\Services\Api;

class ApiService
{


    public $url;
    public $token;
    public function __construct($url, $token)
    {

        $this->url = $url;
        $this->token = $token;
    }

    public function setUrl($url){

        $this->url=$url;

        return $this;
    }
    public function setToken($token){
        $this->token = $token;
        return $this;
    }


    public function getItem() {}
    public function getItems() {}
}
