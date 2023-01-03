# PusherStarterExample

This project is how to use pusher broadcast in laravel, easy just few steps

## Installation
```sh
composer require pusher/pusher-php-server
```

## .env
```sh
BROADCAST_DRIVER=pusher
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=
PUSHER_SCHEME=
PUSHER_APP_CLUSTER=ap1
```

## config/broadcasting.php
```sh
'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => 'ap1',
                'useTLS' => true
              ],
        ],
```

## Make event
```sh
php artisan make:event "ShowNotification"
```

## app/Events
```sh
class ShowNotification implements ShouldBroadcastNow
```
Dont forget to implement ShouldBroadcastNow

## Demo
```sh
Receive: http://localhost:8000
Sent Notification: http://localhost:8000/kirim
```

[Zuhrul Anam] (https://github.com/zuhrrl)