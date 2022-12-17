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
			'title_meta' => view('partials/title-meta', ['title' => 'Student profile']),
			'page_title' => view('partials/page-title', ['title' => 'Student profile', 'pagetitle' => 'Profile']),
			'user_data' => $GLOBALS['user_data']
		];
		
		return view('students-profile', $data);
	}

	/**
	 * List of all users of 
	 */
	public function list() {
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Listado de alumnos']),
			'page_title' => view('partials/page-title', ['title' => 'Alumnos', 'pagetitle' => 'Listado'])
		];
		return view('students-list', $data);

	}


}
