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

//Route::get('/', 'WelcomeController@index');

//slash means home homecontroller is the controller @index is method
/*Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

Route::get('/','PagesController@index'); 

//Route::get('about', 'PagesController@about');

Route::bind('song',function($slug)
{

return App\Song::where('slug',$slug)->first();
});

get('songs','SongsController@index');

get('songs/{slug}','SongsController@show');

get('songs/{slug}/edit','SongsController@edit');

patch('songs/{slug}','SongsController@update');