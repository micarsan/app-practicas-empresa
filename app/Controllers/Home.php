<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if( $GLOBALS['user_data']['rol'] == 'teacher' )
			header('location:/teacher-profile');
		else
			header('location:/student-profile');

		exit;
	}
}
