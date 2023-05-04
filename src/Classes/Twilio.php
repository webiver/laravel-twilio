<?php

namespace Webiver\LaravelTwilio\Classes;
use Twilio\Rest\Client;

class Twilio {

    private $sid;
    private $token;
    public function __construct()
    {
        $this->sid = env('TWILIO_ACCOUNT_SID');
        $this->token = env('TWILIO_AUTH_TOKEN');
    }

    public function getSid(){
        return $this->sid;
    }

    public function getToken(){
        return $this->token;
    }

    public function sms(){
        $twilio = new Client($this->sid, $this->token);
        return $twilio;
    }
}
