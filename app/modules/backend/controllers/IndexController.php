<?php
namespace messetool\Modules\Modules\Backend\Controllers;

/**
 * Class IndexController
 *
 * @package baywa-nltool\Controllers
 */

class IndexController extends ControllerBase

{
	private $_loginForm;
	
	

    /**
     * @return \Phalcon\Http\ResponseInterface
     */
    public function indexAction()
    {		
		$auth = $this->session->get('auth');
		
		if(!$auth){			
			
			$this->dispatcher->forward(array(
            "controller" => "index",
            "action" => "login"
        ));
		}else{
			//$this->flashSession->success('Willkommen '.$auth['username']);
			$this->dispatcher->forward(array(
            "controller" => "index",
            "action" => "overview"
				));
			
		}
		
        
        
    }
	
	public function loginAction(){
		$this->_loginForm = new LoginForm();
		$this->view->form = $this->_loginForm;
	}
	
	private function getRunningJobs(){
		$content='ACL geprüfter und mehrsprachiger Content';
		return $content;
	}
	
	
	
	/**
     * @return \Phalcon\Http\ResponseInterface
     */
    public function overviewAction()
	{
		$runningJobs=$this->getRunningJobs();
			
			$this->view->setVar('runningJobs',$runningJobs);
		
	}
	  
	
}