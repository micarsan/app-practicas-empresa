<?php namespace App\Controllers;

class Language extends BaseController
{
	public function index()
	{
        $session = session();
        $locale = service('request')->getLocale(); 
        $session->remove('lang');
        $session->set('lang',$locale);
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}