<?php
namespace Controller;

use Model\SubdivisionsBD;
use Model\Job_titleBD;
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
        $subdivisions=SubdivisionsBD::all();
        $job_titles=Job_titleBD::all();
        if ($request->method === 'POST' && Employees::create($request->all())) {
            app()->route->redirect('/employers');
        }
        return new View('site.addEmployer',['job_titles' => $job_titles, 'subdivisions' => $subdivisions ]);
    }

}