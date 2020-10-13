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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('/old', function () {
    return view('welcome_old');
});

Route::get('/project_1', function () {
    return view('project_1');
});

Route::get('/project_2', function () {
    return view('project_2');
});

Route::get('/project_3', function () {
    return view('project_3');
});

Route::get('/project_4', function () {
    return view('project_4');
});

Route::get('/project_5', function () {
    return view('project_5');
});

Route::get('/project_6', function () {
    return view('project_6');
});

// Route::get('/blog-single', function () {
//     return view('blog-single');
// });

// Render in view
Route::get('/welcome', [
    'uses' => 'ContactController@index'
]);

// Post form data
Route::post('/welcome', [
    'uses' => 'ContactController@ContactSubmit',
    // 'as' => 'contact.store'
]);