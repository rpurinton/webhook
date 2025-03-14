#!/usr/bin/env php
<?php

use RPurinton\Webhook;

require __DIR__ . '/vendor/autoload.php';

$url = getenv('WEBHOOK_TEST_URL');
while(true) echo Webhook::post($url, ['content' => 'testWebhook Successful']);
