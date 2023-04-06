<?php
namespace Validators;

use Src\Validator\AbstractValidator;

class BirthdayValidator extends AbstractValidator
{
    public function rule(): bool
    {
        return preg_match("/[0-9\-]/", $this->value);
    }
}