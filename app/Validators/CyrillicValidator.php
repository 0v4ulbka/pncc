<?php
namespace Validators;

use Src\Validator\AbstractValidator;

class CyrillicValidator extends AbstractValidator
{

    protected string $message = 'В поле присутствуют латинские буквы';

    public function rule(): bool
    {
        if(empty($this->value)){
            return true;
        }
        return preg_match("/[А-Яа-я0-9]/", $this->value);
    }
}