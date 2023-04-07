<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class EmailValidator extends AbstractValidator
{
    public function rule(): bool
    {
        return str_contains($this->value, '@');
    }
}