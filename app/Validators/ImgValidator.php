<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class ImgValidator extends AbstractValidator
{
    protected string $message = 'File extension must be .jpeg or jpg, or png';

    public function rule(): bool
    {
        if ( strrpos($this->value['name'], '.')!==false ) { // проверка на наличии в имени файла символа точки
            // вырезаем часть строки после последнего символа точки в имени файла
            $file_extension = substr($this->value['name'], strrpos($this->value['name'], '.') + 1);
        } else {
            // в случае отсутствия символа точки в имени файла возвращаем false
            $file_extension = false;
        }
        return in_array($file_extension, ['jpg', 'png', 'jpeg']);
    }
}