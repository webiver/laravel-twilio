<?php

use Illuminate\Support\Facades\Route;
use Webiver\LaravelTwilio\Twilio;

Route::get('twilio', function () {
    dd(Twilio::sms());
});
