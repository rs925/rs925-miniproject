<?php

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
    return view('Pages.index');
});
Route::get('/about', function () {
    return view('Pages.about');
});
Route::get('/contact', function () {
    return view('Pages.contact');
});
/*Route::post('/contact', function () {

    $data = request() -> all();
    echo "Email: " . $data['email'] . '<br>';
    echo "Message: " . $data['body'] ;
});*/
Route::get('/signup', function () {
    return view('Pages.signup');
});
Route::get('/login', function () {
    return view('Pages.login');
});
Route::get('/vm', function () {
    return view('Pages.vm');
});
Route::get('/card', function () {
    return view('Pages.card');
});
