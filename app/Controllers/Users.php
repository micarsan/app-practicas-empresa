<?php namespace App\Controllers;

class Users extends BaseController
{
	public function index()
	{
		//index method
		return $this->users_list();
	}


	/**
	 * User profile
	 */
	public function profile(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Teacher profile']),
			'page_title' => view('partials/page-title', ['title' => 'Teacher profile', 'pagetitle' => 'Profile']),
			'user_data' => $GLOBALS['user_data']
		];
		if( $GLOBALS['user_data']['rol'] == 'teacher' )
			return view('teachers-profile', $data);
		else
			return view('students-profile', $data);
	}

	/**
	 * List of all users of 
	 */
	public function users_list() {
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Listado de usuarios']),
			'page_title' => view('partials/page-title', ['title' => 'Usuarios', 'pagetitle' => 'Listado'])
		];
		return view('users-list', $data);

	}

	//--------------------------------------------------------------------

}
