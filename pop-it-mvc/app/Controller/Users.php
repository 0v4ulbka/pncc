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
}