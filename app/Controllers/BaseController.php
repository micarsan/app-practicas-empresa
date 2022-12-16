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
print_r($session->get());
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

        echo '<pre>';
        print_r($_POST);
        exit;
*/


        if( !$session->get('logged_in') && !( $_SERVER['REQUEST_URI'] == '/auth-login' | $_SERVER['REQUEST_URI'] == '/auth-login?incorrect-data') ) {

            if( !empty($_POST) ) {
                $valid_users = array('profesor@dualapp.miguelcarmona.com','alumno@dualapp.miguelcarmona.com');
                if( in_array($_POST['user'], $valid_users) && $_POST['password'] == 'cesurformacion' ) {
                        
                    switch($_POST['user']) {
                        case 'profesor@dualapp.miguelcarmona.com':
                            $user_data = [
                                'name'      => 'Francisco Romero',
                                'short_name' => 'Francisco',
                                'email'     => 'profesor@dualapp.miguelcarmona.com',
                                'birthday'  => '30 de septiembre de 1982',
                                'phone'     => '666 656 310',
                                'course'    => [
                                    'school'    => 'CESUR Málaga Este',
                                    'title'     => 'Profesor',
                                    'tutor'     => ''
                                ],
                                'lang'      => 'es',
                                'avatar'    => 'francisco-romero.jpg',
                                'rol'       => 'teacher',
                                'logged_in' => true,
                            ];
                            break;
                        
                        case 'alumno@dualapp.miguelcarmona.com':
                            $user_data = [
                                'name'  => 'Miguel Carmona',
                                'short_name' => 'Miguel',
                                'email'     => 'alumno@dualapp.miguelcarmona.com',
                                'birthday'  => '30 de septiembre de 1982',
                                'phone'     => '666 656 310',
                                'course'    => [
                                    'school'    => 'CESUR Málaga Este',
                                    'title'     => '2º Desarrollo Aplicaciones Informáticas',
                                    'tutor'     => 'Francisco Romero'
                                ],
                                'company'   => [
                                    'name'        => 'Tecnoempresa, S.L.',
                                    'tutor'       => [
                                        'name'      => 'Manuel Antúnez',
                                        'phone'     => '987 654 321',
                                        'email'     => 'info@tecnoempresa.com'
                                    ],
                                    'hours_done'  => '117',
                                    'hours_total' => '156',
                                ],
                                'lang'      => 'es',
                                'avatar'    => 'miguel_carmona.jpg',
                                'rol'       => 'student',
                                'logged_in' => true,
                            ];
                            break;
    
                    }
                    
                    $session->set($user_data);

                    header('location:/');
                
                } else {
                    header('location:/auth-login?incorrect-data');
                
                }
            } else {
                header('location:/auth-login');
            
            }

            exit;
        }

        $GLOBALS['user_data'] = $session->get();


        $language = \Config\Services::language();
        $language->setLocale($session->lang);
    }
}
