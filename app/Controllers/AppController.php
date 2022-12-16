<?php namespace App\Controllers;

class AppController extends BaseController
{
	public function index()
	{
	}



	public function show_chat(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chat']),
			'page_title' => view('partials/page-title', ['title' => 'Chat', 'pagetitle' => 'Apps'])
		];
		return view('chat', $data);
	}



}
