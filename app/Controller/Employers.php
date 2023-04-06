<?php
namespace Controller;

use Model\SubdivisionsBD;
use Model\JobTitleBD;
use Model\Employees;
use Src\Request;
use Src\View;

class Employers
{
    public function employers(Request $request): string
    {
        $jobs = JobTitleBD::all();
        $subs = SubdivisionsBD::all();
        $employers = Employees::all();
        if ($request->method === 'POST'){
            $ftitle = JobTitleBD::where('id', $request->job_title)->first();
            $fsub = SubdivisionsBD::where('id', $request->subdivision)->first();
            $employers = Employees::where('job_title', $ftitle->id)->where('subdivision', $fsub->id)->get();
            return (new View()) -> render('site.employers', [
                'employers'=>$employers,
                'jobs'=>$jobs,
                'subs'=>$subs]);
        }

        return (new View()) -> render('site.employers', [
            'employers'=>$employers,
            'jobs'=>$jobs,
            'subs'=>$subs]);
    }
    public function addEmployer(Request $request): string
    {
        $subdivisions=SubdivisionsBD::all();
        $job_titles=JobTitleBD::all();
        if ($request->method === 'POST' && Employees::create($request->all())) {
            app()->route->redirect('/employers');
        }
        return new View('site.addEmployer',['job_titles' => $job_titles,
            'subdivisions' => $subdivisions ]);
    }

    public function deleteEmployer(Request $request): string
    {
        if($request->method === 'POST' && Employees::where('id', $request->id)->delete()){
            app()->route->redirect('/employers');
        }
        return new View('site.delEmployer');
    }
    public function updemp(Request $request): string
    {
        $subdivisions=SubdivisionsBD::all();
        $job_titles=JobTitleBD::all();
        $employer = Employees::where('id', $request->id)->first();
        if($request->method === 'POST' && Employees::where('id', $request->id)->update(['surname' => $request->surname,
                'name' => $request->name,
                'patronymic' => $request->patronymic,
                'gender' => $request->gender,
                'birthday' => $request->birthday,
                'address' => $request->address,
                'job_title' => $request->job_title,
                'subdivision' => $request->subdivision])){

            app()->route->redirect('/employers');
        }
        return new View('site.updemp', ['employer'=>$employer,
            'job_titles' => $job_titles,
            'subdivisions' => $subdivisions]);
    }
}