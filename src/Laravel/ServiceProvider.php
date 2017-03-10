<?php

namespace Tje3d\Telegram\Laravel;

use Illuminate\Support\ServiceProvider as Base;

class ServiceProvider extends Base
{
	protected $defer = true;

    public function boot()
    {
    	\App::singleton('telegram', function ($app) {
    		return new \Tje3d\Telegram(config('telegram.token', ''));
    	});

    	$this->publishes([
	        __DIR__.'/config/telegram.php' => config_path('telegram.php'),
	    ], 'telegram');
    }
}