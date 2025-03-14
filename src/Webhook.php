<?php

namespace RPurinton;

use RPurinton\HTTPS;
use RPurinton\Validators\WebhookValidators;

class Webhook
{
    public static function post(string $url, array $body): bool
    {
        WebhookValidators::validateUrl($url);
        WebhookValidators::validateBody($body);
        $result = json_decode(HTTPS::request([
            'url' => $url,
            'method' => 'POST',
            'headers' => ["Content-Type: application/json;"],
            'body' => json_encode($body)
        ]), true);
        if (isset($result['retry_after'])) {
            usleep($result['retry_after'] * 1000000);
            return self::post($url, $body);
        }
        return true;
    }
}
