<?php
namespace messetool\Modules\Modules\Backend\Controllers;
use Phalcon\Forms\Form,
Phalcon\Forms\Element\Text,
Phalcon\Forms\Element\Password,
Phalcon\Forms\Element\Submit,
Phalcon\Validation\Validator\PresenceOf,
Phalcon\Validation\Validator\StringLength;

class LoginForm extends Form {

public function initialize()
{
	
$environment= $this->config['application']['debug'] ? 'development' : 'production';

$baseUri=$this->config['application'][$environment]['staticBaseUri'];

$this->setAction($baseUri.'session/start/');
$username = new Text('username');
$username->addValidator(new PresenceOf(array (
    'message' => 'Can\'t be empty'
)));

$password = new Password('password');
$password->addValidator(new PresenceOf(array (
    'message' => 'Can\'t be empty'
)));

$submit = new Submit('login', array('value' => 'Login'));

$this->add($username);       
$this->add($password);
$this->add($submit);
}
}