<?php

declare(strict_types=1);

namespace PixelOpen\CloudflareTurnstileBundle\Validator;

use Symfony\Component\Validator\Constraint;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
final class CloudflareTurnstile extends Constraint
{
    /**
     * @var string
     */
    public $message = 'invalid_turnstile';
}
