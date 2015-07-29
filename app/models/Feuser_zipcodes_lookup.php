<?php
namespace nltool\Models;
use Phalcon\Mvc\Model;


/**
 * Description of Distributors_addressfolders_lookup
 *
 * @author Philipp-PC
 */
class Feuser_zipcodes_lookup extends Model{
	
	public function initialize(){
		$this->belongsTo('uid_local', 'nltool\Models\Feusers', 'uid', 
            array('alias' => 'feusers')
        );
        $this->belongsTo('uid_foreign', 'nltool\Models\Zipcodes', 'zip', 
            array('alias' => 'zips')
        );
	}
	
}
