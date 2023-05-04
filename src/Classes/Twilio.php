<?php

namespace Webiver\LaravelTwilio\Classes;
use Twilio\Rest\Client;

class Twilio {

    private $sid;
    private $token;
    private $smsPhone;
    private $whatsappPhone;
    private $twilio;
    public function __construct()
    {
        $this->sid = env('TWILIO_ACCOUNT_SID');
        $this->token = env('TWILIO_AUTH_TOKEN');
        $this->smsPhone = env('TWILIO_SMS_PHONE_NUMBER');
        $this->whatsappPhone = env('TWILIO_WHATSAPP_PHONE_NUMBER');
        $this->twilio = new Client($this->sid, $this->token);
    }

    public function getSid(){
        return $this->sid;
    }

    public function getToken(){
        return $this->token;
    }

    public function sms($toPhone,$message){
        $message = $this->twilio->messages
        ->create($toPhone,
            [
                "from" => $this->smsPhone,
                "body" => $message
            ]
        );
        return $message;
    }


    public function whatsapp($toPhone,$message){
        $message = $this->twilio->messages
        ->create("whatsapp:".$toPhone,
            [
                "from" => "whatsapp:".$this->whatsappPhone,
                "body" => $message
            ]
        );
        return $message;
    }
}
