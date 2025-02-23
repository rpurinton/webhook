<?php

namespace RPurinton\Validators;

use RPurinton\Exceptions\WebhookValidationException;

class WebhookValidators
{
    public static function validateUrl(string $url): bool
    {
        return true;
    }

    public static function validateBody(array $url): bool
    {
        return true;
    }
}
