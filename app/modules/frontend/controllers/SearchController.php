<?php
namespace messetool\Modules\Modules\Frontend\Controllers;
use messetool\Models\Feusers AS Feusers;
use messetool\Models\Zipcodes AS City;

/**
 * Class IndexController
 *
 * @package baywa-nltool\Controllers
 */

class SearchController extends ControllerBase

{

	
	

    /**
     * @return \Phalcon\Http\ResponseInterface
     */
    public function indexAction()
    {		
		
		
		if($this->request->isPost()){
			$suggestions=array(); 			
			$table=substr($this->dispatcher->getParam('table'),1);
			
			switch($table){
				case 'name':
					$suggestions=$this->SearchName();
				break;
				case 'city':						
					$suggestions = $this->SearchCity();
				break;
			}

			

			

			die(json_encode($suggestions));
			$this->view->disable();          
		}
		
        
        
    }
	
	private function SearchName(){
		$queryStrng=$this->request->getPost('query');
		$suggestions=array("suggestions"=>array());
		$suggestionQuery=Feusers::find(array(
					'conditions' => 'name LIKE ?1',
					'bind' => array(
						1 => '%'.$queryStrng.'%'
					)
				)
			);
		foreach($suggestionQuery as $suggestion){
				$suggestions['suggestions'][]=array(
					'value' => $suggestion->first_name.' '.$suggestion->last_name.' | '.$suggestion->city,
					'data' => $suggestion->uid
				);

			}
			return $suggestions;
	}
	
	private function SearchCity(){
		$queryStrng=$this->request->getPost('query');
		$suggestions=array("suggestions"=>array());
		$placeholder='%';
		
		if(is_numeric($queryStrng)){
			$row='zipcode';					
			$placeholder='';
			if(substr($queryStrng,0,1)=='0'){
				$queryStrng=substr($queryStrng,1);
			}
		}else{
			$row='city';
		}				
		$suggestionQuery=City::find(array(
					'conditions' => $row.' LIKE ?1',
					'bind' => array(
						1 => $queryStrng.'%'
					)
				)
			);
		foreach($suggestionQuery as $suggestion){
			
				if(strlen($suggestion->zipcode)==4){
					$zipcode='0'.$suggestion->zipcode;
				}else{
					$zipcode=$suggestion->zipcode;
				}
				$suggestions['suggestions'][]=array(
					'value' => $suggestion->city.' | '.$zipcode,
					'data' => $suggestion->uid
				);

			}
			return $suggestions;
	}
}