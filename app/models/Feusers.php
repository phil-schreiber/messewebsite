<?php
namespace messetool\Models;
use Phalcon\Mvc\Model;
//use Phalcon\Mvc\Model\Validator\Email as EmailValidator;
//use Phalcon\Mvc\Model\Validator\Uniqueness as UniquenessValidator;
Model::setup(['notNullValidations' => false]);

/**
 * Description of fe_users
 *
 * @author Philipp Schreiber
 */
class Feusers extends \Phalcon\Mvc\Model{
	
	
	
		
  /* public function validation()
    {
        $this->validate(new EmailValidator(array(
            'field' => 'email'
        )));
		
        $this->validate(new UniquenessValidator(array(
            'field' => 'email',
            'message' => 'Sorry, The email was registered by another user'
        )));
        $this->validate(new UniquenessValidator(array(
            'field' => 'username',
            'message' => 'Sorry, That username is already taken'
        )));
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }*/
	
	public function initialize(){
		$this->hasOne('profileid', 'messetool\Models\Profiles', 'uid', array(
            'alias' => 'profile'
        ));
		$this->hasOne('usergroup', 'messetool\Models\Usergroups', 'uid', array(
            'alias' => 'usergroup'
        ));
		$this->hasOne('userlanguage','messetool\Models\Languages','uid',array(
			'alias'=>'userlanguage'
		));
		
	
		$this->hasManyToMany("uid", "messetool\Models\Feuser_zipcodes_lookup", "uid_local", "uid_foreign", "messetool\Models\Zipcodes", "zip",array('alias' => 'userzips'));
	
		$this->hasManyToMany("uid", "messetool\Models\Feuser_onspotdates_lookup", "uid_local", "uid_foreign", "messetool\Models\Onspotdates", "uid",array('alias' => 'onspotdates'));
		  
	}
	
	public function hasOnspotdate($OnspotdateUid){
		$modelsManager=$this->getDi()->getShared('modelsManager');		
		
		
		
		$queryStrng="SELECT COUNT(uid) AS uidcount FROM messetool\Models\Feuser_onspotdates_lookup WHERE messetool\Models\Feuser_onspotdates_lookup.uid_local=?1 AND messetool\Models\Feuser_onspotdates_lookup.uid_foreign=?2";	
		
		$sQuery=$modelsManager->createQuery($queryStrng);								
		
		$rResults = $sQuery->execute(array(
			1=> $this->uid,
			2=>$OnspotdateUid
		));		
		
		return $rResults[0]->uidcount;
	}
}

