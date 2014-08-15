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


Route::resource('users','UsersController');

Route::resource('products','ProductsController');

Route::resource('listar','ListarController');


Route::get('form', function(){
 //render app/views/form.blade.php
 return View::make('form');
});

Route::get('/', function(){
 //render app/views/form.blade.php
 return View::make('login');
});




//Route::get('form_products', function(){
 //render app/views/form.blade.php
 //return View::make('form_products');
//});



Route::post('form-submit', array('before'=>'csrf',function(){
 //form validation come here
}));



Route::get('login2', ['before' => 'auth.basic', function(){
    return View::make('hello');
}]);



Route::get('admin', function(){

return View::make('paquete.index');

})->before('auth.basic');

Route::post('login','AutController@user');

Route::get('logout', function()
{
	Auth::logout();
	return Redirect::to('/');
	
});


Route::controller('paquete','PaqueteController');

/*Upload file*/

Route::get('/fileform', function()
{
	
	//return View::make('fileform');
	return View::make('list_products');
	
});


Route::post('/fileform', function()
{
	
	$destinationPath='public/assets/img/';

	$name = Input::file('myfile')->getClientOriginalName();

	Input::file('myfile')->move($destinationPath,$name);

    //return View::make('list_products');
	
});
