<?php
namespace messetool\Models;
use Phalcon\Mvc\Model;
Model::setup(['notNullValidations' => false]);

/**
 * Description of zipcodes
 *
 * @author Philipp Schreiber
 */
class Zipcodes extends \Phalcon\Mvc\Model{
	public function initialize(){
		$this->hasManyToMany("zip", "messetool\Models\Feuser_zipcodes_lookup", "uid_foreign", "uid_local", "messetool\Models\Feusers", "uid",array('alias' => 'feusers'));
	}
}