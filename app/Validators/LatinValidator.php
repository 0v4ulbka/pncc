<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class LatinValidator extends AbstractValidator
{
    public function rule(): bool
    {
        if (empty($this->value)){
            return true;
        }
        return preg_match("/[A-Za-z0-9]/", $this->value);
    }
}