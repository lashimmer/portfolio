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
	return View::make('index');
});

Route::get('/cv', function()
{
    // Get the file content to put into your response
    $content = file_get_contents("cv.pdf");
    //Build your Laravel Response with your content, the HTTP code and the Header application/pdf
    return Response::make($content, 200, array('content-type'=>'application/pdf'));
});

Route::get('/jelly', function()
{
	return View::make('jelly');
});
Route::get('/flatbook-challenge', function()
{
	return View::make('leasebooking');
});
Route::get('/boards', function()
{
	return View::make('yourboards');
});

Route::get('/challenge', function()
{
	return View::make('challenge');
});

Route::any('{all}', function($uri)
{
    return View::make('error');
})->where('all', '.*');
