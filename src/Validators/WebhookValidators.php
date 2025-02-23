<?php

namespace RPurinton\Validators;

use RPurinton\Exceptions\WebhookValidationException;

class WebhookValidators
{
    public static function validateUrl(string $url): bool
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new WebhookValidationException('Invalid URL');
        }
        return true;
    }

    public static function validateBody(array $body): bool
    {
        if (empty($body)) {
            throw new WebhookValidationException('Empty body');
        }
        return true;
    }
}
