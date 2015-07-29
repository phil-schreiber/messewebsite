<?php
namespace messetool\Modules\Modules\Frontend\Controllers;
use messetool\Models\Feusers AS Feusers;
/**
 * Class IndexController
 *
 * @package baywa-nltool\Controllers
 */

class MessageController extends ControllerBase

{
	private $_loginForm;
	
	

    /**
     * @return \Phalcon\Http\ResponseInterface
     */
    public function indexAction()
    {			    
    }
	
	public function createAction()
	{
		if($this->request->isPost() && $this->request->getPost('consultant')){
		$feuser=Feusers::findFirst(array(
				'conditions' => 'uid = ?1',
				'bind' => array(
					'uid' => $this->request->getPost('consultant')
				)
			));
		}
	}
	
	
	  
	
}