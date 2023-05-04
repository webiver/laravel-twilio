<?php
namespace Webiver\LaravelTwilio;
use Illuminate\Support\Facades\Facade;

class Twilio extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Twilio';
    }
}
