# Laravel Twilio #
A laravel package that helps you integrate twilio into your laravel app easily.

# Installation #
Require the package in the composer file:
```
    "require": {
        ....
        "webiver/laravel-twilio": "dev-master"
    },
```
then run composer imstall.
# Register the provider #
Register the package service provider in **config/app.php** file:
```
Webiver\LaravelTwilio\LaravelTwilioServiceProvider::class,
```
# Add Environment Variables #
Now we have to add three lines in **.env** file
```
TWILIO_ACCOUNT_SID=
TWILIO_AUTH_TOKEN=
TWILIO_SMS_PHONE_NUMBER=
TWILIO_WHATSAPP_PHONE_NUMBER=
```
**TWILIO_ACCOUNT_SID** and **token** are credentails that you can get from your twilio account.

**TWILIO_SMS_PHONE_NUMBER** refers to the sms phone sender number that will be registered with twillio.

**TWILIO_WHATSAPP_PHONE_NUMBER** refers to the whatsapp phone sender number that will be registered with twillio.

add these values and run: 
```
php artisan config:clear
```
