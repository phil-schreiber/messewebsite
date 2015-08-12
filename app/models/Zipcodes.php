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
	
	public function getFeusersFromZip($zips = array()){

	    $modelsManager=$this->getDi()->getShared('modelsManager');		
		
		$whereClause=array();
		foreach($zips as $index => $zip){
			$whereClause[]='?'.$index;
			
		}
		
		$queryStrng="SELECT specialization,division,region,email, last_name, first_name ,  title, company, phone, address, city, zip, userlanguage, gender, uid, image FROM messetool\Models\Feusers LEFT JOIN messetool\Models\Feuser_zipcodes_lookup ON messetool\Models\Feusers.uid = messetool\Models\Feuser_zipcodes_lookup.uid_local  WHERE messetool\Models\Feusers.deleted=0 AND messetool\Models\Feusers.hidden=0 AND messetool\Models\Feuser_zipcodes_lookup.uid_foreign IN (".implode(',',$whereClause).") GROUP BY uid";	
		
		$sQuery=$modelsManager->createQuery($queryStrng);								
		
		$rResults = $sQuery->execute($zips);		
		
		return $rResults;
	}
}