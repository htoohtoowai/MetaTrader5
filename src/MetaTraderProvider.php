<?php
namespace Yehtoo\MetaTrader5;

use Illuminate\Support\ServiceProvider;

class MetaTraderProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/mt5.php' => config_path('mt5.php'),
        ]);
    }
}
