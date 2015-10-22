<?php
namespace messetool\Models;
use Phalcon\Mvc\Model;
Model::setup(['notNullValidations' => false]);

class Surveysession extends \Phalcon\Mvc\Model{
	 public function initialize()
    {
       

        $this->hasMany('session', 'messetool\Models\Questions','session', array(
            'alias' => 'Surveyquestions'
        ));
    }
}