<?php

namespace Tje3d\Telegram\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use Tje3d\Telegram\Bot as BaseBot;

class Bot extends Facade
{
	/**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'telegram_bot';
    }
}
