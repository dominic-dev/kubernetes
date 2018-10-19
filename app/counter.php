<?php

use Predis\Autoloader;
use Predis\Client;

require "predis/autoload.php";
Autoloader::register();

try {
    $redis = new Client(array(
        "scheme" => "tcp",
        "host" => "redis",
        "port" => 6379
    ));
}
catch (Exception $e) {
	die($e->getMessage());
}

$i = $redis->get('counter') ?? 0;
$redis->set('counter', $i);
echo 'Counter: ' . $i;
