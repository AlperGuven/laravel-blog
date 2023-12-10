<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function() {
    return response  ('<h1> Hello world </h1>', 200)
    ->header('Content-type', 'text/html')
    ->header('foo','bar');
});

Route::get('blog-post/{id}', function($id) {
    return response('Post' . $id);
})-> where('id', '[0-9]+');