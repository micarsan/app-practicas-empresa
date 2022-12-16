<?php namespace App\Controllers;

class ComponentController extends BaseController
{
	public function index()
	{
		//index method
	}

	public function show_ui_alerts(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Alerts']),
			'page_title' => view('partials/page-title', ['title' => 'Alerts', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-alerts', $data);
	}

	public function show_ui_buttons(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Buttons']),
			'page_title' => view('partials/page-title', ['title' => 'Buttons', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-buttons', $data);
	}

	public function show_ui_cards(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Cards']),
			'page_title' => view('partials/page-title', ['title' => 'Cards', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-cards', $data);
	}

	public function show_ui_carousel(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Carousel']),
			'page_title' => view('partials/page-title', ['title' => 'Carousel', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-carousel', $data);
	}

	public function show_ui_dropdowns(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dropdowns']),
			'page_title' => view('partials/page-title', ['title' => 'Dropdowns', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-dropdowns', $data);
	}

	public function show_ui_grid(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Grid']),
			'page_title' => view('partials/page-title', ['title' => 'Grid', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-grid', $data);
	}

	public function show_ui_images(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Images']),
			'page_title' => view('partials/page-title', ['title' => 'Images', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-images', $data);
	}

	public function show_ui_lightbox(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lightbox']),
			'page_title' => view('partials/page-title', ['title' => 'Lightbox', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-lightbox', $data);
	}

	public function show_ui_modals(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Modals']),
			'page_title' => view('partials/page-title', ['title' => 'Modals', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-modals', $data);
	}

	public function show_ui_rangeslider(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Range Slider']),
			'page_title' => view('partials/page-title', ['title' => 'Range Slider', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-rangeslider', $data);
	}

	public function show_ui_session_timeout(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Session Timeout']),
			'page_title' => view('partials/page-title', ['title' => 'Session Timeout', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-session-timeout', $data);
	}

	public function show_ui_progressbars(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Progress Bars']),
			'page_title' => view('partials/page-title', ['title' => 'Progress Bars', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-progressbars', $data);
	}

	public function show_ui_placeholders(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Placeholders']),
			'page_title' => view('partials/page-title', ['title' => 'Placeholders', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-placeholders', $data);
	}

	public function show_ui_sweet_alert(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'SweetAlert 2']),
			'page_title' => view('partials/page-title', ['title' => 'SweetAlert 2', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-sweet-alert', $data);
	}

	public function show_ui_tabs_accordions(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Tabs & Accordions']),
			'page_title' => view('partials/page-title', ['title' => 'Tabs & Accordions', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-tabs-accordions', $data);
	}

	public function show_ui_typography(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Typography']),
			'page_title' => view('partials/page-title', ['title' => 'Typography', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-typography', $data);
	}

	public function show_ui_video(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Video']),
			'page_title' => view('partials/page-title', ['title' => 'Video', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-video', $data);
	}

	public function show_ui_general(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'General']),
			'page_title' => view('partials/page-title', ['title' => 'General', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-general', $data);
	}

	public function show_ui_colors(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Colors']),
			'page_title' => view('partials/page-title', ['title' => 'Colors', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-colors', $data);
	}

	public function show_ui_rating(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Rating']),
			'page_title' => view('partials/page-title', ['title' => 'Rating', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-rating', $data);
	}

	public function show_ui_toasts(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Toasts']),
			'page_title' => view('partials/page-title', ['title' => 'Toasts', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-toasts', $data);
	}

	public function show_ui_notifications(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Notifications']),
			'page_title' => view('partials/page-title', ['title' => 'Notifications', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-notifications', $data);
	}

	public function show_ui_offcanvas(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Offcanvas']),
			'page_title' => view('partials/page-title', ['title' => 'Offcanvas', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-offcanvas', $data);
	}

	public function show_form_elements(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Basic Elements']),
			'page_title' => view('partials/page-title', ['title' => 'Basic Elements', 'pagetitle' => 'Forms'])
		];
		return view('form-elements', $data);
	}

	public function show_form_validation(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Validation']),
			'page_title' => view('partials/page-title', ['title' => 'Validation', 'pagetitle' => 'Forms'])
		];
		return view('form-validation', $data);
	}

	public function show_form_advanced(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Advanced Plugins']),
			'page_title' => view('partials/page-title', ['title' => 'Advanced Plugins', 'pagetitle' => 'Forms'])
		];
		return view('form-advanced', $data);
	}

	public function show_form_editors(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Editors']),
			'page_title' => view('partials/page-title', ['title' => 'Editors', 'pagetitle' => 'Forms'])
		];
		return view('form-editors', $data);
	}

	public function show_form_uploads(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'File Upload']),
			'page_title' => view('partials/page-title', ['title' => 'File Upload', 'pagetitle' => 'Forms'])
		];
		return view('form-uploads', $data);
	}

	public function show_form_xeditable(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Xeditable']),
			'page_title' => view('partials/page-title', ['title' => 'Xeditable', 'pagetitle' => 'Forms'])
		];
		return view('form-xeditable', $data);
	}
	
	public function show_form_repeater(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Repeater']),
			'page_title' => view('partials/page-title', ['title' => 'Repeater', 'pagetitle' => 'Forms'])
		];
		return view('form-repeater', $data);
	}

	public function show_form_wizard(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Wizard']),
			'page_title' => view('partials/page-title', ['title' => 'Wizard', 'pagetitle' => 'Forms'])
		];
		return view('form-wizard', $data);
	}

	public function show_form_mask(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Mask']),
			'page_title' => view('partials/page-title', ['title' => 'Mask', 'pagetitle' => 'Forms'])
		];
		return view('form-mask', $data);
	}

	public function show_tables_basic(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Bootstrap Basic']),
			'page_title' => view('partials/page-title', ['title' => 'Bootstrap Basic', 'pagetitle' => 'Tables'])
		];
		return view('tables-basic', $data);
	}

	public function show_tables_datatable(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Datatables']),
			'page_title' => view('partials/page-title', ['title' => 'Datatables', 'pagetitle' => 'Tables'])
		];
		return view('tables-datatable', $data);
	}

	public function show_tables_responsive(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Responsive']),
			'page_title' => view('partials/page-title', ['title' => 'Responsive', 'pagetitle' => 'Tables'])
		];
		return view('tables-responsive', $data);
	}

	public function show_tables_editable(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Editable']),
			'page_title' => view('partials/page-title', ['title' => 'Editable', 'pagetitle' => 'Tables'])
		];
		return view('tables-editable', $data);
	}

	public function show_charts_apex(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Apex']),
			'page_title' => view('partials/page-title', ['title' => 'Apex', 'pagetitle' => 'Charts'])
		];
		return view('charts-apex', $data);
	}

	public function show_charts_chartjs(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chartjs']),
			'page_title' => view('partials/page-title', ['title' => 'Chartjs', 'pagetitle' => 'Charts'])
		];
		return view('charts-chartjs', $data);
	}

	public function show_charts_flot(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Flot']),
			'page_title' => view('partials/page-title', ['title' => 'Flot', 'pagetitle' => 'Charts'])
		];
		return view('charts-flot', $data);
	}

	public function show_charts_knob(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Jquery Knob']),
			'page_title' => view('partials/page-title', ['title' => 'Jquery Knob', 'pagetitle' => 'Charts'])
		];
		return view('charts-knob', $data);
	}

	public function show_charts_sparkline(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Sparkline']),
			'page_title' => view('partials/page-title', ['title' => 'Sparkline', 'pagetitle' => 'Charts'])
		];
		return view('charts-sparkline', $data);
	}

	public function show_icons_unicons(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Unicons']),
			'page_title' => view('partials/page-title', ['title' => 'Unicons', 'pagetitle' => 'Icons'])
		];
		return view('icons-unicons', $data);
	}

	public function show_icons_boxicons(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Boxicons']),
			'page_title' => view('partials/page-title', ['title' => 'Boxicons', 'pagetitle' => 'Icons'])
		];
		return view('icons-boxicons', $data);
	}

	public function show_icons_materialdesign(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Material Design']),
			'page_title' => view('partials/page-title', ['title' => 'Material Design', 'pagetitle' => 'Icons'])
		];
		return view('icons-materialdesign', $data);
	}

	public function show_icons_dripicons(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dripicons']),
			'page_title' => view('partials/page-title', ['title' => 'Dripicons', 'pagetitle' => 'Icons'])
		];
		return view('icons-dripicons', $data);
	}

	public function show_icons_fontawesome(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Font Awesome']),
			'page_title' => view('partials/page-title', ['title' => 'Font Awesome', 'pagetitle' => 'Icons'])
		];
		return view('icons-fontawesome', $data);
	}

	public function show_maps_google(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Google']),
			'page_title' => view('partials/page-title', ['title' => 'Google', 'pagetitle' => 'Maps'])
		];
		return view('maps-google', $data);
	}

	public function show_maps_vector(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Vector']),
			'page_title' => view('partials/page-title', ['title' => 'Vector', 'pagetitle' => 'Maps'])
		];
		return view('maps-vector', $data);
	}

	public function show_maps_leaflet(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Leaflet']),
			'page_title' => view('partials/page-title', ['title' => 'Leaflet', 'pagetitle' => 'Maps'])
		];
		return view('maps-leaflet', $data);
	}

	//--------------------------------------------------------------------

}
