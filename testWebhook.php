#!/usr/bin/env php
<?php

use RPurinton\Webhook;

require __DIR__ . '/vendor/autoload.php';

$url = getenv('TESTWEBHOOK_URL');
echo Webhook::post($url,['content' => 'testWebhook Successful']);
