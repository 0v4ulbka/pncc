<?php
namespace Validators;

use Src\Validator\AbstractValidator;

class CyrillicValidator extends AbstractValidator
{

    protected string $message = 'В поле присутствуют латинские буквы';

    public function rule(): bool
    {
        return preg_match("/[А-Яа-я]/", $this->value);
    }
}