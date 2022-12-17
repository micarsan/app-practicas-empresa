<?php namespace App\Controllers;

class Companies extends BaseController
{
	public function index()
	{
		//index method
		return $this->list();
	}

	/**
	 * Table list of all companies
	 */
	public function list() {
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Listado de empresas']),
			'page_title' => view('partials/page-title', ['title' => 'Empresas', 'pagetitle' => 'Listado'])
		];
		return view('companies-list', $data);

	}



}
