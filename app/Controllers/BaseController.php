<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{


    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        $session = \Config\Services::session();
        
/*
echo '<pre>';
print_r($session);
exit;
*/

        /**
         * Check valid session
         */
        //$name = $session->get('name');
        
        /*
        $newdata = [
            'username'  => 'johndoe',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => true,
        ];
        
        $session->set($newdata);
echo '<pre>';
print_r($session->get);
exit;
        */

        if( !$session->get('name')
            && $_SERVER['REQUEST_URI'] != '/auth-login' ) {
            header('location:/auth-login');
            exit;
        }


        $language = \Config\Services::language();
        $language->setLocale($session->lang);
    }
}
