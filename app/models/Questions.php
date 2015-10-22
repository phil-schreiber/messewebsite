<?php
namespace messetool\Models;
use Phalcon\Mvc\Model;
Model::setup(['notNullValidations' => false]);

/**
 * Description of Questions
 *
 * @author Philipp Schreiber
 */
class Questions extends \Phalcon\Mvc\Model{
	 public function initialize()
    {
       

        $this->hasOne('session', 'messetool\Models\Surveysession','session', array(
            'alias' => 'Surveysession'
        ));
		
		 $this->hasMany('uid', 'messetool\Models\Questionitems','pid', array(
            'alias' => 'Questionitems'
        ));
    }
}