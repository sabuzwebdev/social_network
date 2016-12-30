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

/*
 * Home
 */
Route::get('/',[
    'uses'=>'HomeController@index',
    'as'=>'home'//route name
]);



/*
 * Authentication
 */

Route::get('/signup',[
    'uses'=>'AuthController@getSignup',
    'as'=>'auth.signup'
]);
Route::post('/signup',[
    'uses'=>'AuthController@postSignup', //though route is for get signup
                                        //but it will also share for post
                                        //when form is submitted

]);