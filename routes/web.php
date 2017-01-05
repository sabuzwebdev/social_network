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
    'as'=>'auth.signup',
    'middleware'=>['guest']
]);
Route::post('/signup',[
    'uses'=>'AuthController@postSignup', //though route is for get signup
                                        //but it will also share for post
                                        //when form is submitted

]);

Route::get('/signin',[
    'uses'=>'AuthController@getSignin',
    'as'=>'auth.signin',
    'middleware'=>['guest']
]);
Route::post('/signin',[
    'uses'=>'AuthController@postSignin',

]);
Route::get('/signout',[
    'uses'=>'AuthController@getSignout',
    'as'=>'auth.signout',
    'middleware'=>['auth']
]);

/*
 * Search
 */
Route::get('/search',[
    'uses'=>'SearchController@getResults',
    'as'=> 'search.results',
    'middleware'=>['auth']
]);

/*
 * User profile
 */
Route::get('/user/{username}',[
    'uses' => 'ProfileController@getProfile',
    'as' => 'profile.index'
]);
Route::get('/profile/edit',[
    'uses' => 'ProfileController@getEdit',
    'as' => 'profile.edit',
    'middleware'=>['auth']
]);
Route::post('/profile/edit',[
    'uses' => 'ProfileController@postEdit',
    'middleware'=>['auth']
]);