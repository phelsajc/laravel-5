<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	/*public function index(){

		//return "Welcome to my website!";

		return view('pages.home');
	}*/

	public function about(){

	//	return "Learn a little about me";
		//return view('pages.about');


		$lessons = ['p1','p2','p3'];
		$name = '<em>John</em>';

		//return view('pages.home')->withName('Jeffrey Way');
		return view('pages.about',compact('lessons','name'));
	}

	public function index()
	{

		$lessons = ['my 1st 	lesson','my 2nd 	lesson','my 3rd 	lesson'];
		$name = '<em>John</em>';

		//return view('pages.home')->withName('Jeffrey Way');
		return view('pages.home',compact('lessons','name'));

	}
}
