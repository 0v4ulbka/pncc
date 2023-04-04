<?php
use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])
    ->middleware('admin');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/employers', [Controller\Employers::class, 'employers']);
Route::add(['GET', 'POST'], '/users', [Controller\Users::class, 'users'])
    ->middleware('admin');
Route::add(['GET', 'POST'], '/addEmployer', [Controller\Employers::class, 'addEmployer']);
Route::add(['GET', 'POST'], '/subdivisions', [Controller\Subdivisions::class, 'subdivisions'])
    ->middleware('admin');
Route::add(['GET', 'POST'], '/job_titles', [Controller\Job_titles::class, 'job_titles'])
    ->middleware('admin');
Route::add(['GET', 'POST'], '/addjob', [Controller\Job_titles::class, 'addjob'])
    ->middleware('admin');
Route::add(['GET', 'POST'], '/addsub', [Controller\Subdivisions::class, 'addsub'])
    ->middleware('admin');
Route::add(['GET', 'POST'], '/delEmployer', [Controller\Employers::class, 'deleteEmployer']);
Route::add(['GET', 'POST'], '/deljob', [Controller\Job_titles::class, 'deljob'])
    ->middleware('admin');
Route::add(['GET', 'POST'], '/delsub', [Controller\Subdivisions::class, 'delsub'])
    ->middleware('admin');
Route::add(['GET', 'POST'], '/deluser', [Controller\Users::class, 'deluser'])
    ->middleware('admin');