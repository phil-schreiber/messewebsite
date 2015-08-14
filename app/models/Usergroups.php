<?php
namespace messetool\Models;

use Phalcon\Mvc\Model;

/**
 * nltool\Models\Profiles
 * All the profile levels in the application. Used in conjenction with ACL lists
 */
class Usergroups extends Model
{

	public function initialize(){
		$this->hasMany('uid', 'messetool\Models\feusers', 'usergroup', array(
            'alias' => 'feusers'
        ));
	}
  
}