<?php

namespace Tje3d\Telegram\Laravel;

use Illuminate\Support\ServiceProvider;
use Tje3d\Telegram\Bot;

class TelegramServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('telegram_bot', function ($app) {
            return new Bot(config('telegram.token', null));
        });

        $this->publishes([
            __DIR__ . '/Config.php' => config_path('telegram.php'),
        ], 'telegram');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Bot::class];
    }
}
