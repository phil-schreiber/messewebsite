<?php
namespace messetool\Modules\Modules\Frontend\Controllers;
use messetool\Models\Feusers AS Feusers,
	messetool\Models\Messages AS Messages;
/**
 * Class IndexController
 *
 * @package baywa-nltool\Controllers
 */

class MessageController extends ControllerBase

{
	private $_loginForm;
	
	

    /**
     * @return \Phalcon\Http\ResponseInterface
     */
    public function indexAction()
    {			    
    }
	
	public function createAction()
	{
		if($this->request->isPost() && $this->request->getPost('consultant')){
		$feuser=Feusers::findFirstByUid(
					$this->request->getPost('consultant')
				);
		$time=time();
		$message=new Messages();
		$message->assign(array(
			'pid' => 0,
			'tstamp' => $time,
			'crdate' => $time,
			'cruser_id' => 0,
			'deleted' => 0,
			'hidden' => 0,
			'session' => $_SERVER['REMOTE_ADDR'],
			'feuserid' => $this->request->hasPost('consultant') ? $this->request->getPost('consultant') : 0,
			'message' =>$this->request->hasPost('message') ? $this->request->getPost('message') : ' ',			
			'firstname' => $this->request->hasPost('firstname') ? $this->request->getPost('firstname') : ' ',
			'lastname' => $this->request->hasPost('lastname') ? $this->request->getPost('lastname') : ' ',
			'phone' => $this->request->hasPost('phone') ? $this->request->getPost('phone') : ' ',
			'zip' => $this->request->hasPost('zip') ? $this->request->getPost('zip') : ' ',
			'city' => $this->request->hasPost('city') ? $this->request->getPost('city') : ' ',
			'farmer' => $this->request->hasPost('farmer') ? $this->request->getPost('farmer') : 0,
			'termsagreed' => $this->request->hasPost('terms') ? $this->request->getPost('terms') : 0
		));
		if(!$message->save()){
			$this->flash->error($feuser->getMessages());
		}
		$sendMessage=array(
			'konto' => 2982,
			'password' => md5('ihttomlin1979'),
			'service' =>6076,			
			'text' => $message->message,
			'encoding' => 0,
			'from' => $message->phone,
			'to' => $feuser->phone,
			'timestamp' => $time,
			'return' => 'text',
			'httphead' => 1,
			'action' => 'send'
		);
		$this->sendMessage($sendMessage);
		}
		
	}
	
	/*
	 * Guess what it does
	 */	
	private function sendMessage($message){
		
		$session = curl_init('http://www.lox24.eu/API/httpsms.php'); 
                                         
		curl_setopt($session, CURLOPT_POST, True); 
		curl_setopt($session, CURLOPT_POSTFIELDS, $message); 		
		curl_setopt($session, CURLOPT_RETURNTRANSFER, True); 
		curl_setopt($session, CURLOPT_TIMEOUT, 10);


		$content = curl_exec($session); 

		$response = curl_getinfo($session); 
		var_dump($response);
		if($response['http_code'] != 200) { 
			$info= "Awww this did not work out because: ".  $response['http_code'] . "\n".$content."\n This was pushed: ".http_build_query($message); 
		} else { 
			$info= "Sweet success: ".$response['http_code']."\n".$content."\n This was pushed: ".http_build_query($message); 

		} 
		echo($info);
		curl_close($session);
	}
	
	
	  
	
}