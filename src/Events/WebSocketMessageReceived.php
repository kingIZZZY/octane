<?php

namespace Laravel\Octane\Events;

use Illuminate\Foundation\Application;
use Swoole\WebSocket\Server;

class WebSocketMessageReceived
{
    public function __construct(
        public Application $app,
        public Application $sandbox,
        public Server $server,
        public Frame $frame
    ) {
    }
}
