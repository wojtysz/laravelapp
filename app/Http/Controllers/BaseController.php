<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller {

	/**
	*
	* @return void
	*/

	public function index()
	{
		return view ('base');
	}
}