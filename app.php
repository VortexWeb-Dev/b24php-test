<?php

declare(strict_types=1);

use Bitrix24\SDK\Services\ServiceBuilderFactory;

require_once 'vendor/autoload.php';

$B24 = ServiceBuilderFactory::createServiceBuilderFromWebhook(
    'https://vortexwebclouds.bitrix24.in/rest/205/45kpxa6551bggkbq/'
);

$user = $B24->core->call('user.current')->getResponseData()->getResult();

echo '<h1>Hello ' . $user['NAME'] . " " . $user['LAST_NAME'] . '</h1>';