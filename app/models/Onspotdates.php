<?php
namespace messetool\Models;
use Phalcon\Mvc\Model;
Model::setup(['notNullValidations' => false]);

/**
 * Description of fe_users
 *
 * @author Philipp Schreiber
 */
class Onspotdates extends \Phalcon\Mvc\Model{
	
	
	public function initialize(){
		
		
	
		$this->hasManyToMany("uid", "messetool\Models\Feuser_onspotdates_lookup", "uid_foreign", "uid_local", "messetool\Models\Feusers", "uid",array('alias' => 'feusers'));
	
		  
	}
}

