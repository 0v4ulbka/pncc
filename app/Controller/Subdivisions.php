<?php
namespace Controller;

use Model\SubdivisionsBD;
use Model\TypeSubdivisionsBD;
use Src\Request;
use Src\Validator\Validator;
use Src\View;

class Subdivisions
{
    public function subdivisions(): string
    {
        $types_subdivisions = [];
        $subdivisions = SubdivisionsBD::all();
        foreach ($subdivisions as $subdivision){
            $types_subdivisions[] = TypeSubdivisionsBD::where('id', $subdivision->type_subdivision)->first();
        }
        return (new View()) -> render('site.subdivisions', ['subdivisions'=>$subdivisions, 'types_subdivisions'=>$types_subdivisions]);
    }

    public function addsub(Request $request): string
    {
        $type_subdivisions = TypeSubdivisionsBD::all();
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'subdivision' => ['required', 'cyrillic'],
                'type_subdivision' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
                'cyrillic' => 'В поле :field присутсует латиница'
            ]);

            if ($validator->fails()) {
                return new View('site.addSub',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE),
                    'type_subdivisions'=>$type_subdivisions]);
            } else {
                $subdivisions = new SubdivisionsBD();
                $subdivisions->subdivision = $request->subdivision;
                $subdivisions->type_subdivision = (int)$request->type_subdivision;
                $subdivisions->save();
                app()->route->redirect('/subdivisions');
            }
        }
        return new View('site.addSub', ['type_subdivisions'=>$type_subdivisions]);
    }

    public function delsub(Request $request): string
    {

        if($request->method === 'POST' && SubdivisionsBD::where('id', $request->id)->delete()){
            app()->route->redirect('/subdivisions');
        }
        return new View('site.delSub');
    }
}