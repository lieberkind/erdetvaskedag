<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$today = new DateTime('today');
	$tomorrow = new DateTime('tomorrow');

	$washingdays = 
		Washingday::where('time', '>', $today)
			->orderBy('time', 'ASC')
			->take(5)
			->get();

	$washingday = $washingdays->first()->isToday();

	if($washingday) $washingdays->shift();

	return View::make('index')
		->with('washingday', $washingday)
		->with('washingdays', $washingdays);
});
