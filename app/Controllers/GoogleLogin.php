<?php namespace App\Controllers;

class GoogleLogin extends BaseController
{
	public function index()
	{
		
	}

	public function login(){
		// include your composer dependencies

		try{
			
			require_once APPPATH. '../vendor/autoload.php';

			$clientID = '668483854048-1ecsanniovjvj8kvt2m5dm39b4o4tmt9.apps.googleusercontent.com';
			// $google_client = new Google_Client(['client_id' => $clientID]);
			$google_client = new Google_Client();
			// print_r($google_client);
			// die('here');

			$google_client->setClientId($clientID); //Define your ClientID
			$google_client->setClientSecret('z-9WCkqqDSMQKGZkbd-XLWhw'); //Define your Client Secret Key
			$google_client->setRedirectUri('http://localhost:8080/'); //Define your Redirect Uri
			$google_client->addScope('email');
			$google_client->addScope('profile');
		} catch(\Exception $ex){
			die($ex->getMessage());
		}
		

		// if(isset($_GET["code"]))
		// {
		// 	$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

		// 	if(!isset($token["error"]))
		// 	{
		// 		$session = session();
		// 		$google_client->setAccessToken($token['access_token']);

		// 		$session->set('access_token', $token['access_token']);

		// 		$google_service = new Google_Service_Oauth2($google_client);

		// 		$data = $google_service->userinfo->get();

		// 		$current_datetime = date('Y-m-d H:i:s');
		// 		print_r($data);
		// 		// $session->set('user_data',$user_data);
		// 	}
		// }

	}

}
