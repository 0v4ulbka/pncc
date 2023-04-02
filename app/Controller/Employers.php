<?php
namespace Controller;

use Model\Employees;
use Src\Request;
use Src\View;

class Employers
{
    public function employers(): string
    {
        $employers = Employees::all();
        return (new View()) -> render('site.employers', ['employers'=>$employers]);
    }
}