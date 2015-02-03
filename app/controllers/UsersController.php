<?php

class UsersController extends BaseController{

	public function postLogin(){

		Auth::attempt(array('email' => Input::get('email'),
							'password' => Input::get('password')));
		return Redirect::route('admin_area');
	}

	public function getLogout(){

		Auth::logout();
		return Redirect::route('admin_area');
	}
}