<?php
namespace Controller;

use Model\SubdivisionsBD;
use Model\Job_titleBD;
use Model\Employees;
use Src\Request;
use Src\View;

class Employers
{
    public function employers(Request $request): string
    {
        $job_titles = [];
        $subdivisions = [];
        $yearNow = date('Y-m-d');
        $jobs = Job_titleBD::all();
        $subs = SubdivisionsBD::all();
        $employers = Employees::all();
        foreach ($employers as $employer){
            $job_titles[] = Job_titleBD::where('id', $employer->job_title)->first();
            $subdivisions[] = SubdivisionsBD::where('id', $employer->subdivision)->first();
            $birthday = Employees::where('birthday', $employer->birthday)->first();
            $ages[] = (int)$yearNow - (int)$birthday['birthday'];
        }

        if ($request->method === 'POST'){
            $job_titles = null;
            $subdivisions = null;
            $ages = null;
            $ftitle = Job_titleBD::where('id', $request->job_title)->first();
            $fsub = SubdivisionsBD::where('id', $request->subdivision)->first();
            $employers = Employees::where('job_title', $ftitle->id)->where('subdivision', $fsub->id)->get();
            foreach ($employers as $employer){
                $job_titles[] = Job_titleBD::where('id', $employer->job_title)->first();
                $subdivisions[] = SubdivisionsBD::where('id', $employer->subdivision)->first();
                $birthday = Employees::where('birthday', $employer->birthday)->first();
                $ages[] = (int)$yearNow - (int)$birthday['birthday'];
            }
            return (new View()) -> render('site.employers', [
                'employers'=>$employers,
                'job_titles'=>$job_titles,
                'subdivisions'=>$subdivisions,
                'ages'=>$ages,
                'jobs'=>$jobs,
                'subs'=>$subs]);
        }
        /*$employer_age = Employees::where('id', $ages[$key]['id']);*/

        return (new View()) -> render('site.employers', [
            'employers'=>$employers,
            'job_titles'=>$job_titles,
            'subdivisions'=>$subdivisions,
            'ages'=>$ages,
            'jobs'=>$jobs,
            'subs'=>$subs]);
    }
    public function addEmployer(Request $request): string
    {
        $subdivisions=SubdivisionsBD::all();
        $job_titles=Job_titleBD::all();
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
}