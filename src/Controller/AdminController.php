<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AdminController extends Controller
{

    /** @var object $controller Controller name. */
    public $controller = null;

    /** @var object $action Action name. */
    public $action = null;
    
    public $AppUI = null;
    public $current_url = '';
    public $BASE_URL = '';
    
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }
    
    /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        
        $this->controller = strtolower($this->request->params['controller']);
        $this->action = strtolower($this->request->params['action']);
        $this->current_url = Router::url($this->request->here, true);
        $this->BASE_URL = Router::fullBaseUrl();
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        
        // Set common param
        $this->set('controller', $this->controller);
        $this->set('action', $this->action);
        $this->set('current_url', $this->current_url);
        $this->set('BASE_URL', $this->BASE_URL);
        
        // Set default layout
        $this->setLayout();
    }
    
    /**
     * Commont function to get params of actions in controller.
     * 
     * @param array $default List parameter name. Default is array().
     * @return array
     */
    public function getParams($default = array()) {
        $params = $this->request->query;
        if (!empty($default)) {
            foreach ($default as $paramName => $paramValue) {
                if (!isset($params[$paramName])) {
                    $params[$paramName] = $paramValue;
                }
            }
        }
        return $params;
    }

    /**
     * Common function set layout for view.
     */
    public function setLayout() {
        $this->viewBuilder()->layout('admin');
    }
}
