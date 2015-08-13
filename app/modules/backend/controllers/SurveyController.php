<?php
namespace messetool\Modules\Modules\Backend\Controllers;
use messetool\Models\Questions AS Question;
use messetool\Models\Questionitems AS Questionitem;
use messetool\Models\Surveysession AS Surveysession;

/**
 * Class IndexController
 *
 * @package baywa-nltool\Controllers
 */

class SurveyController extends ControllerBase

{
			
    /**
     * @return \Phalcon\Http\ResponseInterface
     */
    public function indexAction()
    {	
		$time=time();
		$uniqid = uniqid();
		$this->session->setOptions(array(
				'uniqueId' => $uniqid
		));
		$surveysession =new Surveysession();
		$surveysession->assign(array(
				'pid' => 0,
				'tstamp' => $time,
				'crdate' => $time,
				'cruser_id' => 0,
				'deleted' => 0,
				'hidden' => 0,
				'session' => $uniqid
				));
		$surveysession->save();
		$environment= $this->config['application']['debug'] ? 'development' : 'production';
		$baseUri=$this->config['application'][$environment]['staticBaseUri'];
		$path=$baseUri.'/'.$this->view->language.'/survey/';
		$this->view->setVar('uniqueId',$uniqid);
		$this->view->setVar('path',$path);        
    }
	
	public function createAction(){
		$time=time();
		if($this->request->isPost()){
			$question=new Question();
			$question->assign(array(
				'pid' => 0,
				'tstamp' => $time,
				'crdate' => $time,
				'cruser_id' => 0,
				'deleted' => 0,
				'hidden' => 0,
				'session' => $this->request->hasPost('uniqueid') ? $this->request->getPost('uniqueid') : '',
				'questionnumber' => $this->request->hasPost('question') ? $this->request->getPost('question') : 0,
				'message' => $this->request->hasPost('message') ? $this->request->getPost('message') : ''
			));
			$question->save();
			
			if($this->request->hasPost('item')){
				foreach($this->request->getPost('item') as $key => $itemData){
					$item=new Questionitem();
					$item->assign(array(
						'pid' => $question->uid,
						'tstamp' => $time,
						'crdate' => $time,
						'cruser_id' => 0,
						'deleted' => 0,
						'hidden' => 0,
						'session' => $question->session,
						'questionnumber' => $question->questionnumber,
						'itemnumber' => $itemData,
						'checked' => 1,
						'rating' => 0,
						'message' => '',
						'mode' =>0
						
					));
					$item->save();
				}
			}
			if($this->request->hasPost('openitem')){
				foreach($this->request->getPost('openitem') as $key => $itemData){
					$item=new Questionitem();
					$item->assign(array(
						'pid' => $question->uid,
						'tstamp' => $time,
						'crdate' => $time,
						'cruser_id' => 0,
						'deleted' => 0,
						'hidden' => 0,
						'session' => $question->session,
						'questionnumber' => $question->questionnumber,
						'itemnumber' => $key,
						'checked' => 1,
						'rating' => 0,
						'message' => $itemData,
						'mode' =>2
						
					));
					$item->save();
				}
			}
			if($this->request->hasPost('rating')){
				foreach($this->request->getPost('rating') as $key => $itemData){
					$ratingName='rating_'.$itemData;
					$item=new Questionitem();
					$item->assign(array(
						'pid' => $question->uid,
						'tstamp' => $time,
						'crdate' => $time,
						'cruser_id' => 0,
						'deleted' => 0,
						'hidden' => 0,
						'session' => $question->session,
						'questionnumber' => $question->questionnumber,
						'itemnumber' => $itemData,
						'rating' => $this->request->hasPost($ratingName) ? $this->request->getPost($ratingName) : 0,
						'message' => '',
						'mode' =>1
						
					));
					$item->save();
				}
			}
			die();
		}
	}
}