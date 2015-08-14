<?php
namespace messetool\Models;
use Phalcon\Mvc\Model;
Model::setup(['notNullValidations' => false]);


/**
 * Description of Distributors_addressfolders_lookup
 *
 * @author Philipp-PC
 */
class Feuser_onspotdates_lookup extends \Phalcon\Mvc\Model{
	
	public function initialize(){
		$this->belongsTo('uid_local', 'messetool\Models\Feusers', 'uid', 
            array('alias' => 'feusers')
        );
        $this->belongsTo('uid_foreign', 'messetool\Models\Onspotdates', 'uid', 
            array('alias' => 'onspotdates')
        );
	}
	
}
