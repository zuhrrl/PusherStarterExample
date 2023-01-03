env Config

BROADCAST_DRIVER=pusher


broadcasting.php

'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => 'ap1',
                'useTLS' => true
            ]
],


event() config

class ShowNotification implements ShouldBroadcastNow

Dont forget use implements ShouldBroadcastNow
