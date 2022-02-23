# MetaTrader5

This is Laravel 6.x package wrapper library for Metatrader 5 Web API
- [Official MT5 Web Api Documentation](https://support.metaquotes.net/en/docs/mt5/api/webapi).

This package require composer 2.0

## Documentation

### Installing 
To install the package, in terminal:
```
composer require yehtoo/metatrader5
```

### Configure
If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php
```
Yehtoo\MetaTrader5\MetaTraderProvider::class,

```

#### Copy the package config to your local config with the publish command:

```bash
php artisan vendor:publish --provider="Yehtoo\MetaTrader5\MetaTraderProvider"
```

and then you can configure connection information to MT5 with this ``.env`` value

```dotenv
MT5_SERVER_IP=
MT5_SERVER_PORT=
MT5_SERVER_WEB_LOGIN=
MT5_SERVER_WEB_PASSWORD=
```