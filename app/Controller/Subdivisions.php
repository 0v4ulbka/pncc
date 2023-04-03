<?php
namespace Controller;

use Model\Job_titleBD;
use Model\SubdivisionsBD;
use Model\Type_subdivisionsBD;
use Src\Request;
use Src\View;

class Subdivisions
{
    public function subdivisions(): string
    {
        $types_subdivisions = [];
        $subdivisions = SubdivisionsBD::all();
        foreach ($subdivisions as $subdivision){
            $types_subdivisions[] = Type_subdivisionsBD::where('id', $subdivision->type_subdivision)->first();
        }
        return (new View()) -> render('site.subdivisions', ['subdivisions'=>$subdivisions, 'types_subdivisions'=>$types_subdivisions]);
    }

    public function addsub(Request $request): string
    {
        $type_subdivisions = Type_subdivisionsBD::all();
        if ($request->method === 'POST' && SubdivisionsBD::create($request->all())) {
            app()->route->redirect('/subdivisions');
        }
        return new View('site.addsub', ['type_subdivisions'=>$type_subdivisions]);
    }

}