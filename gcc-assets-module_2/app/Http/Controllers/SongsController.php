<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use DB;

use Illuminate\Http\Request;

use App\Song;

class SongsController extends Controller {

	//

	public function __construct(Song $song)
	{
		$this->song = $song;
	}

	public function index()
	{
		//$songs = Song::get();
		//dd($songs);
		$songs = $this->song->get();
		return view('songs.index',compact('songs'));
	}

	public function show($slug)
	{
		//$song = Song::whereSlug($slug)->first();
		$song = $this->song->whereSlug($slug)->first();
		return view('songs.show',compact('song'));

	}


	public function edit($slug)
	{
		
		$song = $this->song->whereSlug($slug)->first();
		return view('songs.edit',compact('song'));
		

	}

	public function update($slug, Request $request)
	{

		//dd(\Request::get('title'));
		$song = $this->song->whereSlug($slug)->first();
		//$var = Request::get('title');

		//return $var.'nive';
		/*$song->title = $request->get('title');
		$song->slug = $request->get('slug');
		$song->lyrics = $request->get('lyrics');

		$song->save();*/

		//$song->fill[('title'=>$request->get('title'))]->save();

		$song->fill($request->input())->save();

		return redirect('songs');
	}

	/*public function getSongs()
	{
		return ['Boyfriend','Baby','Be Alright'];

		//return view('songs.index',compact('songs'));
	}*/
}
