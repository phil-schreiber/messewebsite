<?php
namespace messetool\Models;
use Phalcon\Mvc\Model;


/**
 * Description of Distributors_addressfolders_lookup
 *
 * @author Philipp-PC
 */
class Feuser_zipcodes_lookup extends Model{
	
	public function initialize(){
		$this->belongsTo('uid_local', 'messetool\Models\Feusers', 'uid', 
            array('alias' => 'feusers')
        );
        $this->belongsTo('uid_foreign', 'messetool\Models\Zipcodes', 'zip', 
            array('alias' => 'zips')
        );
	}
	
}
