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

$text = 'Привет мир';
$title = 'Моя первая страница';

Route::get('/', function () {
    return view('welcome');

Route::get('/helloWorld', function () {
    return view('helloWorld');
});
//Route::get('/', function () use ($text, $title){
//    return <<<php
//<!doctype html>
//<html lang="en/ru">
//    <head>
//        <meta charset="UTF-8">
//        <title>$title</title>
//    </head>
//    <body>
//        <h1>$text</h1>
//        Lorem ipsum dolor sit amet.
//    </body>
//</html>
//php;



});
// phpinfo();
