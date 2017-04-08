<?php

namespace Tje3d\Telegram\Laravel;

use Illuminate\Support\ServiceProvider;
use Tje3d\Telegram\Bot;

class TelegramServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

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
            __DIR__ . '/config.php' => config_path('telegram.php'),
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
