#!/usr/bin/env php
<?php

use RPurinton\Webhook;

require __DIR__ . '/vendor/autoload.php';

$url = getenv('WEBHOOK_TEST_URL');
if(Webhook::post($url, ['content' => 'testWebhook Successful'])) echo "Success\n";
else echo("Failure :(...");
