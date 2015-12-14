<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;


get('/', ['as' => 'home',       function () {
    return view('home');
}]);

get('/dashboard', ['as' => 'dashboard',       function () {
    return view('dashboard.index');
}]);


// Password reset
Route::controllers([
    'password' => 'Auth\PasswordController',
]);


// Registration routes...
get('register',             ['as' => 'register',        'uses' => 'Auth\AuthController@getRegister' ]);
post('register',            ['as' => 'post-register',   'uses' => 'Auth\AuthController@postRegister' ]);
get('register/{provider}',  ['as' => 'social-register', 'uses' => 'Auth\AuthController@social_register']);

// Authentication routes...
get('login',       ['as' => 'login',            'uses' => 'Auth\AuthController@getLogin']);
post('login',      ['as' => 'post-login',         'uses' => 'Auth\AuthController@postLogin']);
get('logout',      ['as' => 'logout',           'uses' => 'Auth\AuthController@getLogout']);


get('nglogin', function(){
    return view('nglogin');
});


Route::group(['prefix' => 'api'], function()
{
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthenticateController@authenticate');
});