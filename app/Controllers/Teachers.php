<?php namespace App\Controllers;

class Teachers extends BaseController
{
	public function index()
	{
		//index method
		return $this->profile();
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
		return view('teachers-profile', $data);
	}

	/**
	 * List of all users of 
	 */
	public function list() {
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Listado de profesores']),
			'page_title' => view('partials/page-title', ['title' => 'Profesores', 'pagetitle' => 'Listado'])
		];
		return view('teachers-list', $data);

	}



}
