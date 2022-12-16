<?php

namespace App\Controllers;

class Chat extends BaseController
{
	public function index()
	{
		$this->show_chat();
	}

	public function show_chat(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chat']),
			'page_title' => view('partials/page-title', ['title' => 'Chat', 'pagetitle' => 'Apps'])
		];
		return view('chat', $data);
	}



}
