<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if ($GLOBALS['user_data']['rol'] == 'teacher') {

			header('location:/teacher-profile');
		} else {
			$data = [
				'title_meta' => view('partials/title-meta', ['title' => 'Student profile']),
				'page_title' => view('partials/page-title', ['title' => 'Student profile', 'pagetitle' => 'Profile']),
				'user_data' => $GLOBALS['user_data']
			];
			return view('students-profile', $data);
		}

	}
}
