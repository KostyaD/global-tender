<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('index');
	}

	public function seminars()
	{
		return View::make('seminars');
	}

	public function seminar()
	{
		return View::make('seminar');
	}

	public function lektors()
	{
		return View::make('lektors');
	}

	public function feedback()
	{
		return View::make('feedback');
	}

	public function contacts()
	{
		return View::make('contacts');
	}

}
