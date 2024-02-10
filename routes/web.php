<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $Hello = 'Hello World';
    return view('home', compact('Hello'));
});

Route::get('/language.hello', function () {
    $languages = ['Hola Mundo', 'Γειά σου Κόσμε', 'Përshendetje Botë', 'Bonjour le monde', 'Ciao Mondo', 'Salut Lume', 'Привет, мир', '
    Hallo Welt'];
    return view('language', compact('languages'));
});
