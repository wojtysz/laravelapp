<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class KontaktController extends Controller
{
	/**
	*
	* @return void
	*/

	public function show(){
		return view ('kontakt');
	}
}