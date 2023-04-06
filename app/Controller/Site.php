<?php
namespace Controller;

use Model\User;
use Src\Request;
use Src\View;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{
    public function hello(): string
    {

        return new View('site.possibilities');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }
    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'email' => ['required', 'unique:users,email'],
                'password' => ['required'],
                'filename' => ['img']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально',
                'img' => 'Расширение файла должно быть .JPG'
            ]);

            if ($validator->fails()) {
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            } else {
                $user = User::create($request->all());
                $user->photo($_FILES['filename']);
                $user->save();
                return new View('site.signup', ['message' => 'Пользователь успешно добавлен, фото тоже']);
            }
        }
        return new View('site.signup');
    }
}

