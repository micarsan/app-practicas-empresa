<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		header('location:/user-profile');
		exit;
	}
}
