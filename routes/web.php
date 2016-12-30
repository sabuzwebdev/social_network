<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/',[
    'uses'=>'HomeController@index',
    'as'=>'home'//route name
]);

Route::get('/alert',function(){
    return redirect()->route('home')->with('info','You are in Home page now');
});