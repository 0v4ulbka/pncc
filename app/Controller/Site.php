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
                'name' => ['required', 'cyrillic'],
                'surname' => ['required', 'cyrillic'],
                'patronymic' => ['required', 'cyrillic'],
                'job_title' => ['required'],
                'email' => ['required', 'unique:users,email', 'email'],
                'password' => ['required', 'latin'],
                'filename' => ['img']
            ], [
                'required' => 'В поле :field пусто',
                'unique' => 'Поле :field должно быть уникально',
                'img' => 'Расширение файла должно быть .jpg (jpeg, png)',
                'cyrillic' => 'В поле :field присутствует латиница',
                'email' =>'В поле :field должен быть символ \'@\'',
                'latin'=>'В поле :field присутствует кириллица'
            ]);

            if ($validator->fails()) {
                return new View('site.signup',
                    ['message' => $validator->errors()]);
            } else {
                $user = User::create($request->all());
                $user->photo($_FILES['filename'], __DIR__ . '/../../public/img/');
                $user->save();
                return new View('site.signup', ['message' => 'Пользователь успешно добавлен, фото тоже']);
            }
        }
        return new View('site.signup');
    }
}

