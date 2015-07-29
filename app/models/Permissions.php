<?php
namespace messetool\Models;

use Phalcon\Mvc\Model;

/**
 * Permissions
 * Stores the permissions by profile
 */
class Permissions extends Model
{

    /**
     *
     * @var integer
     */
    public $uid;

    /**
     *
     * @var integer
     */
    public $pid;
	
	/**
     *
     * @var integer
     */
    public $deleted;
	
	/**
     *
     * @var integer
     */
    public $hidden;
	
	/**
     *
     * @var integer
     */
    public $crdate;
	
	/**
     *
     * @var integer
     */
    public $tstamp;
	
	/**
     *
     * @var integer
     */
    public $cruser_id;
	
	/**
     *
     * @var integer
     */
    public $profileid;

	/**
     *
     * @var integer
     */
    public $resourceid;
	
    /**
     *
     * @var string
     */
    public $resourceaction;

    

    public function initialize()
    {
        $this->belongsTo('profileid', 'messetool\Models\Profiles', 'uid', array(
            'alias' => 'profiles'
        ));
		
		$this->hasOne('resourceid', 'messetool\Models\Resources', 'uid', array(
            'alias' => 'resource'
        ));
    }
}