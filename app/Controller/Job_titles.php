<?php

namespace Controller;

use Model\Job_titleBD;
use Model\User;
use Src\Request;
use Src\View;

class Job_titles
{
    public function job_titles():string
    {
        $job_titles = Job_titleBD::all();
        return (new View()) -> render('site.job_titles', ['job_titles'=>$job_titles]);
    }

    public function addjob(Request $request): string
    {
        if ($request->method === 'POST' && Job_titleBD::create($request->all())) {
            app()->route->redirect('/job_titles');
        }
        return new View('site.addjob');
    }

}