<?php namespace App\Controllers;

class Reports extends BaseController
{
	public function index()
	{
		//index method
		return $this->list();
	}

	/**
	 * Show reports table
	 */
	public function list() {
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Listado de reportes']),
			'page_title' => view('partials/page-title', ['title' => 'Datatables', 'pagetitle' => 'Tabla'])
		];
		return view('reports-list', $data);
	}


}
