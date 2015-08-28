<?php namespace App\Http\Controllers;

use \App\User;

class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	public function getSelect()
	{
		/*
		$result = \DB::table('users')
					->select('*')
					->get();
		*/
		//\DB::insert("INSERT INTO users (name, email, password) VALUES (?, ?, ?)", array('jose', 'jose@jose.com', \Hash::make('secret')) );
		//$result = \DB::select('SELECT * FROM users WHERE id = ?', array(2));
		$result = \DB::select('SELECT * FROM users WHERE id = ?', array(1));
		dd($result);

		//return "Select";
	}

	public function getOrm()
	{

		$result = User::first();
		//dd($result->getFullNameAttribute());
		dd($result->full_name);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return 'Hola Mundo';
	}

}
