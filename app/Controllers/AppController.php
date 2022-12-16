<?php namespace App\Controllers;

class AppController extends BaseController
{
	public function index()
	{
		//index method
	}

	public function show_calendar(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Calendar']),
			'page_title' => view('partials/page-title', ['title' => 'Calendar', 'pagetitle' => 'Apps'])
		];
		return view('calendar', $data);
	}

	public function show_chat(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chat']),
			'page_title' => view('partials/page-title', ['title' => 'Chat', 'pagetitle' => 'Apps'])
		];
		return view('chat', $data);
	}

	public function show_ecommerce_products(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Products']),
			'page_title' => view('partials/page-title', ['title' => 'Products', 'pagetitle' => 'Ecommerce'])
		];
		return view('ecommerce-products', $data);
	}

	public function show_ecommerce_product_detail(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Product Detail']),
			'page_title' => view('partials/page-title', ['title' => 'Product Detail', 'pagetitle' => 'Products'])
		];
		return view('ecommerce-product-detail', $data);
	}

	public function show_ecommerce_orders(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Orders']),
			'page_title' => view('partials/page-title', ['title' => 'Orders', 'pagetitle' => 'Ecommerce'])
		];
		return view('ecommerce-orders', $data);
	}

	public function show_ecommerce_customers(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Customers']),
			'page_title' => view('partials/page-title', ['title' => 'Customers', 'pagetitle' => 'Ecommerce'])
		];
		return view('ecommerce-customers', $data);
	}

	public function show_ecommerce_cart(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Cart']),
			'page_title' => view('partials/page-title', ['title' => 'Cart', 'pagetitle' => 'Ecommerce'])
		];
		return view('ecommerce-cart', $data);
	}

	public function show_ecommerce_checkout(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Checkout']),
			'page_title' => view('partials/page-title', ['title' => 'Checkout', 'pagetitle' => 'Ecommerce'])
		];
		return view('ecommerce-checkout', $data);
	}

	public function show_ecommerce_shops(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Shops']),
			'page_title' => view('partials/page-title', ['title' => 'Shops', 'pagetitle' => 'Ecommerce'])
		];
		return view('ecommerce-shops', $data);
	}

	public function show_ecommerce_add_product(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Add Product']),
			'page_title' => view('partials/page-title', ['title' => 'Add Product', 'pagetitle' => 'Ecommerce'])
		];
		return view('ecommerce-add-product', $data);
	}

	public function show_email_inbox(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Inbox']),
			'page_title' => view('partials/page-title', ['title' => 'Inbox', 'pagetitle' => 'Email'])
		];
		return view('email-inbox', $data);
	}

	public function show_email_read(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Read Email']),
			'page_title' => view('partials/page-title', ['title' => 'Read Email', 'pagetitle' => 'Email'])
		];
		return view('email-read', $data);
	}

	public function show_invoices_list(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice List']),
			'page_title' => view('partials/page-title', ['title' => 'Invoice List', 'pagetitle' => 'Invoices'])
		];
		return view('invoices-list', $data);
	}

	public function show_invoices_detail(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice Detail']),
			'page_title' => view('partials/page-title', ['title' => 'Invoice Detail', 'pagetitle' => 'Invoices'])
		];
		return view('invoices-detail', $data);
	}

	public function show_contacts_grid(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'User Grid']),
			'page_title' => view('partials/page-title', ['title' => 'User Grid', 'pagetitle' => 'Contacts'])
		];
		return view('contacts-grid', $data);
	}

	public function show_contacts_list(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'User List']),
			'page_title' => view('partials/page-title', ['title' => 'User List', 'pagetitle' => 'Contacts'])
		];
		return view('contacts-list', $data);
	}

	public function show_contacts_profile(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Profile']),
			'page_title' => view('partials/page-title', ['title' => 'Profile', 'pagetitle' => 'Contacts'])
		];
		return view('contacts-profile', $data);
	}

	//--------------------------------------------------------------------

}
