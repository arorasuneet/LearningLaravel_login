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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
//    return view('welcome');
//    if (Auth::check())
//    {
//        return "The user is logged in";
//    }

    // The following has to be written in the model actually.
    // This is just to know how it works.
//    $username = "asdfasdfq";
//    $password = "1jkshdflsh";
//
//    if(Auth::attempt(['username'=>$username, 'password'=>$password]))
//    {
//        // redirects the user to the page user was trying to visit without login.
//        return redirect()->intended('\admin');
//    }

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
