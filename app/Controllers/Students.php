<?php namespace App\Controllers;

class Students extends BaseController
{
	public function index()
	{
		$this->profile();
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
		
		return view('students-profile', $data);
	}

	/**
	 * List of all users of 
	 */
	public function list() {
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Listado de usuarios']),
			'page_title' => view('partials/page-title', ['title' => 'Usuarios', 'pagetitle' => 'Listado'])
		];
		return view('students_list', $data);

	}


}
