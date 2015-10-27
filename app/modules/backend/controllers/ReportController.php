<?php
namespace messetool\Modules\Modules\Backend\Controllers;
use messetool\Models\Questions AS Questions,
	messetool\Models\Questionitems AS Items,
	messetool\Models\Surveysession AS Surveysession;


/**
 * Class IndexController
 *
 * @package baywa-nltool\Controllers
 */

class ReportController extends ControllerBase

{
	
	public function indexAction()
	{
		$environment= $this->config['application']['debug'] ? 'development' : 'production';
		$baseUri=$this->config['application'][$environment]['staticBaseUri'];
		$path=$baseUri.'backend/'.$this->view->language.'/report/create/';
		$this->view->setVar('path',$path);
	}
	
	public function createAction()
	{
		$this->assets->addJs('js/vendor/reportInit.js');
		  $this->view->setMainView('report');
		$mitarbeiterbefragung=false;
		if($this->dispatcher->getParam("uid")>0){
			if($this->dispatcher->getParam("uid")==1){
				$operator='<';
				$qnumberArray=array(
					5 => 5
				);
			}else{
				$mitarbeiterbefragung=true;
				$operator='>';
				$qnumberArray=array(
					1 => 101,
					2 => 102,
					4 => 104,
					5 => 105,
					6 => 106,
					9 => 109,
					10 => 110,
					11 => 111
				);
				
			}
			
			$sessions=array();
			$questions=Questions::find(array(
				'conditions' => 'questionnumber '.$operator.' 100',
				'order' => 'session,questionnumber',
				'group' => 'session'
			));
			
			$total=$questions->count();
			
			foreach($questions as $question){
				$sessionArray[]='"'.$question->session.'"';
				$sessions[$question->session]=$question->tstamp;
				
			}
			$surveyQuestions=Questions::find(array(
				'conditions' => 'session IN ('.implode(',',$sessionArray).')',
				'order' => 'session,questionnumber'				
			));
			$surveyQuestionsArr=array();
			foreach($surveyQuestions as $surveyQuestion){
				$surveyQuestionsArr[$surveyQuestion->session][$surveyQuestion->questionnumber]['message']=$surveyQuestion->message;
				$surveyQuestionsArr[$surveyQuestion->session][$surveyQuestion->questionnumber]['uid']=$surveyQuestion->uid;
			}
			
			foreach($surveyQuestionsArr as $sessionId => $questions){
				
				foreach($qnumberArray as $key => $qnumber){
					$messages[$sessionId][$key]=isset($questions[$qnumber]) ? $questions[$qnumber]['message'] : '';				
				}
			
				foreach($questions as $qnumber => $qData){
					$qAnswers=Items::find(array(
						'conditions' => 'pid = ?1',
						'bind' => array(
							1 => $qData['uid']
						)
					));
					$answerItemsArray=array();
					foreach($qAnswers as $answerItem){
						if($answerItem->mode <3){
						$answerItemsArray[$answerItem->itemnumber]	= $answerItem;
						}else{
							$answerItemsArray['other'][]	= $answerItem;
						}
					}
					$qAnswersArr[$sessionId][$qnumber]=$answerItemsArray;
				}
			}
			
			
		
		}
		$this->view->setVar('total',$total);
		$this->view->setVar('sessions',$sessions);
		$this->view->setVar('messages',$messages);
		$this->view->setVar('qanswers',$qAnswersArr);
		$this->view->setVar('mitarbeiterbefragung',$mitarbeiterbefragung);
			
	}
	
	
	private function getComments($survey){
		if($survey==1){
			$questionNumber='>';
			
		}
	}
	
}