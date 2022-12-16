<?php namespace App\Controllers;

class Reports extends BaseController
{
	public function index()
	{
		//index method
		return $this->show();
	}

	/**
	 * Show reports table
	 */
	public function show() {
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Listado de reportes']),
			'page_title' => view('partials/page-title', ['title' => 'Datatables', 'pagetitle' => 'Tabla'])
		];
		return view('reports-show', $data);
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
