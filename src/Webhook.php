<?php

namespace RPurinton;

use RPurinton\HTTPS;
use RPurinton\Validators\WebhookValidators;

class Webhook
{
    public static function post(string $url, array $body)
    {
        WebhookValidators::validateUrl($url);
        WebhookValidators::validateBody($body);
        return HTTPS::request([
            'url' => $url,
            'method' => 'POST',
            'headers' => ["Content-Type: application/json;"],
            'body' => json_encode($body)
        ]);
    }
}
