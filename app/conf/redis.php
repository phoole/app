<?php

/**
 * redis configurations
 */
return [
    'host' => 'localhost',
    'port' => 6379,
    'db' => 0,
    'auth' => '${ENV.REDIS_AUTH}',
];