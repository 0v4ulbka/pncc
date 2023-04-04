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
    public function upduser(Request $request): string
    {
        $user = User::where('id', $request->id)->first();
        if($request->method === 'POST' && User::where('id', $request->id)->update(['name' => $request->name,
                'surname' => $request->surname,
                'patronymic' => $request->patronymic,
                'phone' => $request->phone,
                'job_title' => $request->job_title,
                'email' => $request->email,
                'password' => md5($request->password)])){
            app()->route->redirect('/users');
        }
        return new View('site.upduser', ['user'=>$user]);
    }
}