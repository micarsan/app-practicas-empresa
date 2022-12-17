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

		/*
		if( $GLOBALS['user_data']['rol'] == 'teacher' )
			return view('teacher-chat', $data);
		else
			return view('student-chat', $data);
		*/

		return view('chat', $data);

			
	}



}
