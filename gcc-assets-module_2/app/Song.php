<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Song extends Eloquent{
	
/**
 * filalble field for a Song.
 */
	protected $fillable = [

		'title','lyrics','slug'


	];
}