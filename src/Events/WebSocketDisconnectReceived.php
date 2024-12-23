<?php

namespace Laravel\Octane\Events;

use Illuminate\Foundation\Application;
use Swoole\WebSocket\Server;

class WebSocketDisconnectReceived
{
    public function __construct(
        public Application $app,
        public Application $sandbox,
        public Server $server,
        public int $fd
    ) {
    }
}
