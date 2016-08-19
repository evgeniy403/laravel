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
use Illuminate\Http\Request;



Route::group(['prefix'=>'adminzone'], function()
{
Route::get('/', function()
{
     return view('admin.dashboard');
});
Route::resource('groups','GroupsController');
Route::resource('manufacturers','ManufacturersController');
Route::resource('items','ItemsController');

});


Route::get('/', 'FrontController@index');




Route::delete('/task/{id}', function ($id) {
  Task::findOrFail($id)->delete();

  return redirect('/');
});


