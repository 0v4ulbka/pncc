<?php

namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;
use Model\User;

class AdminMiddleware
{
    public function handle(Request $request)
    {
        //Если пользователь не админ, то редирект на главную
        if (!(new User)->is_admin()) {
            app()->route->redirect('/hello');
        }
    }
}
