<?php namespace App\Controllers;

class Students extends BaseController
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
			'title_meta' => view('partials/title-meta', ['title' => 'Student profile']),
			'page_title' => view('partials/page-title', ['title' => 'Student profile', 'pagetitle' => 'Profile']),
			'user_data' => $GLOBALS['user_data']
		];
		return view('students-profile', $data);
	}



	//--------------------------------------------------------------------

}
