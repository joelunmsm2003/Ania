<?php

class UsersController extends BaseController {




	public function index()
	{
		$users = User::all();

		return View::make('list')->with('users',$users);
	}
	public function create()

{
	return View::make('form');


}

	public function store()

{
	$user = new User;
	$data =  Input::all();
	
	$user-> fill($data);
	$user->password = Hash::make(Input::get('password'));
    
    print_r($data);
	$user-> save();

    return Redirect::action('UsersController@index');

}

	public function login()

{
	$credenciales= array(

		'username' => Input::get('email'),
		'password' => Input::get('password'),

		);

	if(Auth::attempt($credenciales))
	{
		return "El usuario ha sido identificado correctament";
	}
	else

	{
		return Redirect::action('UsersController@index');
	}


}

}


