<?php namespace App\Controllers;

class Teachers extends BaseController
{
	public function index()
	{
		//index method
		return $this->profile();
	}


	/**
	 * Student profile
	 */
	public function profile(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Teacher profile']),
			'page_title' => view('partials/page-title', ['title' => 'Teacher profile', 'pagetitle' => 'Profile']),
			'user_data' => $GLOBALS['user_data']
		];
		return view('teachers-profile', $data);
	}


}
