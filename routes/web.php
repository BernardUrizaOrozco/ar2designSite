<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::name('homepage')->get('/', 'PageController@homepage');

Route::get('/plantillas', function () {
    return view('templatesMenu');
});

Route::get('/plantilla/{nameTemplate}', function ($nameTemplate) {
    return view('templates.'.$nameTemplate);
});

Route::get('/projects', function () {
    $projects = DB::table('projects')->get();
    return $projects;
});