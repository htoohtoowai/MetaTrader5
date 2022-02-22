<?php
namespace Yehtoo\MetaTrader5;

use Yehtoo\MetaTrader5\Lib\MTWebAPI;

class MetaTrader extends MTWebAPI
{
    public function __construct()
    {
        $ip = config('mt5.server');
        $port = config('mt5.port');
        $login = config('mt5.login');
        $password = config('mt5.password');
        parent::__construct($ip, (int)$port, $login, $password, config('app.debug'));
    }
}
