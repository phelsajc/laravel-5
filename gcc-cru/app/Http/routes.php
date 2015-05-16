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

//Route::get('/','PagesController@index'); 

//Route::get('music/add','SongsController@add');

//Route::get('about', 'PagesController@about');

//song in bind is working even change the variable
$router->bind('song',function($slug){

return App\Song::whereSlug($slug)->first();
});

/*Route::get('/','SongsController@index');	

get('songs/{slug}','SongsController@show');

get('songs/{slug}/edit','SongsController@edit');

patch('songs/{slug}','SongsController@update');

post('songs/{slug}','SongsController@addnewsong');*/


//using $router is defualt

//$router->resource('people','PeopleController');	

/*$router->resource('songs','SongsController',[

	'only' => [
		'index','show','edit','update'


	]

	]);*/
//songs is path of the url e.g songs/create../update
//can be also except instead of only

//show list of songs
$router->get('/',['as'=>'songs_path','uses'=>'SongsController@index']);
//show specific song
$router->get('music/{slug}',['as'=>'song_path','uses'=>'SongsController@show']);
//edit song
$router->get('music/{slug}/edit',['as'=>'edit_song_path','uses'=>'SongsController@edit']);
//update the song
$router->patch('music-update/{slug}',['as'=>'update_songs_path','uses'=>'SongsController@update']);
//show the form of adding new songs
$router->get('music-add/add',['as'=>'form_songs_path','uses'=>'SongsController@add']);
//add new songs
$router->post('music-add/{slug}',['as'=>'addnew_songs_path','uses'=>'SongsController@addnewsong']);
//delete songs
$router->delete('music-del/{slug}',['as'=>'delete_songs_path','uses'=>'SongsController@destroy']);



//$router->patch('music/{slug}',['as'=>'update_song_path','uses'=>'SongsController@update']);
//the slug in music/{slug} is anay varuable
//song is conflict with the song in show.blade.php because it should be slug




//Named Routes
/*
*music is conflict with music/add
*when using music/{slug}/edit, clicking the song title will redirect to edit not to show. Need to have unique path
*
*
*
*
*
*
*/