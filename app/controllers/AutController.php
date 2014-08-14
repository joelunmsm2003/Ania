<?php

class AutController extends BaseController {


	public function user()
	{

		$userdata = array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
				);
		if(Auth::attempt($userdata))
		{
             return Redirect::to('admin');

		}
		else
		{
			return Redirect::to('/')->with('login_errors',true);			
		}
   }


	


}
