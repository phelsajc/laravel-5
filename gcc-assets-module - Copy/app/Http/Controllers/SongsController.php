<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use DB;

use Illuminate\Http\Request;

use App\Song;

class SongsController extends Controller {

	//

	public function index()
	{
		$songs = Song::get();
		//dd($songs);
		return view('songs.index',compact('songs'));
	}

	public function show($slug)
	{
		$song = Song::whereSlug($slug)->first();
		return view('songs.show',compact('song'));

	}


	/*public function getSongs()
	{
		return ['Boyfriend','Baby','Be Alright'];

		//return view('songs.index',compact('songs'));
	}*/
}
