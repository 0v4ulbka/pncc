<?php

namespace Controller;

use Model\User;
use Src\Request;
use Src\View;

class Users
{
    public function users(): string
    {
        $users = User::all();
        return (new View()) -> render('site.users', ['users'=>$users]);
    }
    public function deluser(Request $request): string
    {
        if($request->method === 'POST' && User::where('id', $request->id)->delete()){
            app()->route->redirect('/users');
        }
        return new View('site.deluser');
    }
}