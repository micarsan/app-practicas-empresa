<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
		];
		return view('index', $data);
	}

	public function show_layouts_horizontal(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Horizontal']),
			'page_title' => view('partials/page-title', ['title' => 'Horizontal', 'pagetitle' => 'Layouts'])
		];
		return view('layouts-horizontal', $data);
	}

	public function show_layouts_vertical(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Vertical Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Vertical', 'pagetitle' => 'Layouts'])
		];
		return view('layouts-vertical', $data);
	}

	public function show_layouts_dark_sidebar(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dark Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Dark Sidebar', 'pagetitle' => 'Vertical'])
		];
		return view('layouts-dark-sidebar', $data);
	}

	public function show_layouts_hori_topbar_dark(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dark Topbar']),
			'page_title' => view('partials/page-title', ['title' => 'Dark Topbar', 'pagetitle' => 'Horizontal'])
		];
		return view('layouts-hori-topbar-dark', $data);
	}

	public function show_layouts_hori_boxed_width(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Boxed Width']),
			'page_title' => view('partials/page-title', ['title' => 'Boxed Width', 'pagetitle' => 'Horizontal'])
		];
		return view('layouts-hori-boxed-width', $data);
	}

	public function show_layouts_hori_preloader(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Preloader']),
			'page_title' => view('partials/page-title', ['title' => 'Preloader', 'pagetitle' => 'Horizontal'])
		];
		return view('layouts-hori-preloader', $data);
	}

	public function show_layouts_compact_sidebar(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Compact Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Compact Sidebar', 'pagetitle' => 'Vertical'])
		];
		return view('layouts-compact-sidebar', $data);
	}

	public function show_layouts_icon_sidebar(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Icon Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Icon Sidebar', 'pagetitle' => 'Vertical'])
		];
		return view('layouts-icon-sidebar', $data);
	}

	public function show_layouts_boxed(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Boxed Width']),
			'page_title' => view('partials/page-title', ['title' => 'Boxed Width', 'pagetitle' => 'Vertical'])
		];
		return view('layouts-boxed', $data);
	}

	public function show_layouts_preloader(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Preloader']),
			'page_title' => view('partials/page-title', ['title' => 'Preloader', 'pagetitle' => 'Vertical'])
		];
		return view('layouts-preloader', $data);
	}

	public function show_layouts_colored_sidebar(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Colored Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Colored Sidebar', 'pagetitle' => 'Vertical'])
		];
		return view('layouts-colored-sidebar', $data);
	}

}