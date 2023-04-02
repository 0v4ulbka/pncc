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
    public function addEmployer(Request $request): string
    {
        if ($request->method === 'POST' && Employees::create($request->all())) {
            app()->route->redirect('/employers');
        }
        return new View('site.addEmployer');
    }
}