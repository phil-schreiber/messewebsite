<?php
namespace messetool\Modules\Modules\Frontend\Controllers;
use messetool\Models\Feusers AS Feusers;
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
		
		
		$feusers=Feusers::find(array(
				'conditions' => 'deleted=0 AND usergroup = ?1',
				'bind' => array(
					1 => $this->config['onspotusergroup']
				)
			));
		$allUsers=Feusers::find(array(
				'conditions' => 'deleted=0 AND usergroup > 1',
				'bind' => array(
					1 => $this->config['onspotusergroup']
				)
			));
		$users=array();
		foreach($feusers as $feuser){
			$feuser->available='<span class="onspot inactive"></span>';
			$onspotDates=$feuser->getOnspotdates();
					$onspot='<span class="onspot inactive"></span>';
					$onspotTitle=' title="Heute nicht vor Ort"';
					foreach($onspotDates as $onspotdate){
						if(date('d.m.')==date('d.m.',$onspotdate->tstamp)){
							$feuser->available='<span class="onspot active"></span>';
							
						}
					}
				$users[]=$feuser;
		}
		$environment= $this->config['application']['debug'] ? 'development' : 'production';
		$baseUri=$this->config['application'][$environment]['staticBaseUri'];
		$path=$baseUri.'/'.$this->view->language.'/feusers/update/';
		
		$this->view->setVar('path',$path);
		$this->view->setVar('feusers',$users);
		$this->view->setVar('allusers',$allUsers);
        
        
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