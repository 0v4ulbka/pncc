<?php

namespace Controller;

use Model\JobTitleBD;
use Src\Request;
use Src\View;

class JobTitles
{
    public function job_titles():string
    {
        $job_titles = JobTitleBD::all();
        return (new View()) -> render('site.jobTitles', ['job_titles'=>$job_titles]);
    }

    public function addjob(Request $request): string
    {
        if ($request->method === 'POST' && JobTitleBD::create($request->all())) {
            app()->route->redirect('/job_titles');
        }
        return new View('site.addJob');
    }

    public function deljob(Request $request): string
    {
        if($request->method === 'POST' && JobTitleBD::where('id', $request->id)->delete()){
            app()->route->redirect('/job_titles');
        }
        return new View('site.delJob');
    }

}