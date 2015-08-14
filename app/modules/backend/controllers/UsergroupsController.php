<?php
namespace messetool\Modules\Modules\Backend\Controllers;
use messetool\Models\Feusers,
	messetool\Models\Profiles,
	messetool\Models\Languages,
	messetool\Models\Usergroups,
	messetool\Models\Onspotdates,
	messetool\Models\Feuser_zipcodes_lookup,
	messetool\Forms\FeusersForm;
/**
 * Class FeusersController
 *
 * @package baywa-nltool\Controllers
 */

class UsergroupsController extends ControllerBase

{
	
	public function indexAction(){
		$this->assets->addCss('css/jquery.dataTables.css');
		$usergroups=Usergroups::find(array(
				'conditions' => 'deleted=0 AND cruser_id <> 0'
			));
		
		
		
		$environment= $this->config['application']['debug'] ? 'development' : 'production';
		$baseUri=$this->config['application'][$environment]['staticBaseUri'];
		$path=$baseUri.'/backend/'.$this->view->language.'/usergroups/update/';
		
		$this->view->setVar('path',$path);
		$this->view->setVar('usergroups',$usergroups);
		
		
	}
	
	public function updateAction(){
		$this->assets->addCss('css/jquery.dataTables.css');
		$usergroup=Usergroups::findFirst(array(
				'conditions' => 'deleted=0 AND uid = ?1',
				'bind' => array(
					1=>$this->dispatcher->getParam("uid")
				)
			));
		$onspotdates=  Onspotdates::find(array(
			
		));
		$environment= $this->config['application']['debug'] ? 'development' : 'production';
		$baseUri=$this->config['application'][$environment]['staticBaseUri'];
		$path=$baseUri.'/backend/'.$this->view->language.'/usergroups/update/';
		
		$this->view->setVar('path',$path);
		$this->view->setVar('usergroup',$usergroup);
		$this->view->setVar('onspotdates',$onspotdates);
	}
	
	
}