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
        //var_dump($request->all());die();
        if ($request->method === 'POST' ) {
            $subdivisions = new SubdivisionsBD();
            $subdivisions->subdivision = $request->subdivision;
            $subdivisions->type_subdivision = (int)$request->type_subdivision;
            $subdivisions->save();
            app()->route->redirect('/subdivisions');
        }
        return new View('site.addsub', ['type_subdivisions'=>$type_subdivisions]);
    }

}