#!/usr/bin/env php
<?php

use RPurinton\Webhook;

require __DIR__ . '/vendor/autoload.php';

$url = getenv('LOG_FILE');
echo Webhook::post($url, ['content' => 'testWebhook Successful']);
