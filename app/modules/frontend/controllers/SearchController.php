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
			/*$table=substr($this->dispatcher->getParam('table'),1);

			switch($table){
				case 'name':
					$suggestions=$this->SearchName();
				break;
				case 'city':
					$suggestions = $this->SearchCity();
				break;
				case 'zip':
					$suggestions=$this->SearchNameFromZip();
				break;
			}*/
			/*if(strlen($this->request->getPost('name'))>0){
				$suggestions=$this->SearchName($this->request->getPost('name'));
			}else if(strlen($this->request->getPost('city'))>0){
				$suggestions=$this->SearchNameFromZip($this->request->getPost('city'));

			}*/
			$suggestions=$this->Search();




			die(json_encode($suggestions));
			$this->view->disable();
		}



    }

	private function Search(){
		$suggestions=array();
		if(strlen($this->request->getPost('zip'))>0 || strlen($this->request->getPost('firstname')) > 0 || strlen($this->request->getPost('lastname')) >0){
			$params=array();
			if(strlen($this->request->getPost('zip'))>0 && is_numeric($this->request->getPost('zip'))){				
				$zip=  substr($this->request->getPost('zip'), 0,1)==0 ? substr($this->request->getPost('zip'), 1) : $this->request->getPost('zip');
				$params['zip']['value']=$zip.'%';
				$params['zip']['operator']='LIKE';
			}
			
			if(strlen($this->request->getPost('firstname'))){
				$params['first_name']['value']='%'.$this->request->getPost('firstname').'%';
				$params['first_name']['operator']='LIKE';
			}
			
			if(strlen($this->request->getPost('lastname'))){
				$params['last_name']['value']='%'.$this->request->getPost('lastname').'%';
				$params['last_name']['operator']='LIKE';
			}			
			$Userobject=new Feusers();
			$suggestionQuery= $Userobject->searchUsers($params);
			foreach($suggestionQuery as $suggestion){
				
				$onspot='';
				$onspotTitle='';
				if($suggestion->onspot){
					$onspotDates=$suggestion->getOnspotdates();
					$onspot='<span class="onspot inactive"></span>';
					$onspotTitle=' title="Heute nicht vor Ort"';
					foreach($onspotDates as $onspotdate){
						if(date('d.m.')==date('d.m.',$onspotdate->tstamp)){
							$onspot='<span class="onspot active"></span>';
							$onspotTitle=' title="Heute für Sie am Stand"';
						}
					}
				}
				$info1=$suggestion->jobtitle ? $suggestion->jobtitle.'<br>' : '';
				$info2=$suggestion->specialization ? $suggestion->specialization.'<br>' : '';
				$info3=$suggestion->division ? $suggestion->division.'<br>' : '';
				$suggestions['suggestions'][]=array(
					'value' =>$suggestion->first_name.' '. $suggestion->last_name,
					'html' => '<div class="suggestion-item"'.$onspotTitle.'>'.$onspot.'<table><tr><td><img src="'.$this->userImgExists($suggestion->image).'" style="max-height:100px"></td><td style="word-break: break-all;width:11.4vw"><p><span style="font-weight:bold">'.$suggestion->title.' '.$suggestion->first_name.' '. $suggestion->last_name.'</span><br>'.$info1.''.$info2.$info3.'<span class="contactButton small">SMS senden</span></p></td></tr></table></div>',
					/*'html' => '<li><input type="hidden" value="'.$suggestion->uid.'">'.$suggestion->first_name.' '. $suggestion->last_name.' | '.$info1.' | '.$info2.' '.$onspot.' </li>',*/
					'data' => $suggestion->uid
				);

			}
			
		}
		return $suggestions;
	}
	
	private function SearchName($queryStrng){
		/*$queryStrng=$this->request->getPost('query');*/
		$suggestions=array("suggestions"=>array());
		$suggestionQuery=Feusers::find(array(
					'conditions' => 'usergroup > 1 AND fullname LIKE ?1 ORDER BY usergroup DESC',
					'bind' => array(
						1 => '%'.$queryStrng.'%'
					)
				)
			);
		foreach($suggestionQuery as $suggestion){
				$onspot='';
				$onspotTitle='';
				if($suggestion->onspot){
					$onspotDates=$suggestion->getOnspotdates();
					$onspot='<span class="onspot inactive"></span>';
					$onspotTitle=' title="Heute nicht vor Ort"';
					foreach($onspotDates as $onspotdate){
						if(date('d.m.')==date('d.m.',$onspotdate->tstamp)){
							$onspot='<span class="onspot active"></span>';
							$onspotTitle=' title="Heute für Sie am Stand"';
						}
					}
				}
				$info1=$suggestion->onspot ? $suggestion->jobtitle : $suggestion->specialization;
				$info2=$suggestion->onspot ? $suggestion->city : $suggestion->region;
				$suggestions['suggestions'][]=array(
					'value' =>$suggestion->first_name.' '. $suggestion->last_name,
					'html' => '<div class="suggestion-item"'.$onspotTitle.'>'.$onspot.'
										<table>
											<tr>
												<td>
													<img src="'.$this->userImgExists($suggestion->image).'" style="max-height:100px">
												</td>
												<td>
													<div class="">
														<span style="font-weight:bold">'.$suggestion->first_name.' '. $suggestion->last_name.'</span>,<br>
														'.$info1.',<br>
														'.$info2.'<br><span class="contactButton small">SMS senden</span>
													</div>
												</td>
											</tr>
										</table>
									</div>',
					/*'html' => '<li><input type="hidden" value="'.$suggestion->uid.'">'.$suggestion->first_name.' '. $suggestion->last_name.' | '.$info1.' | '.$info2.' '.$onspot.' </li>',*/
					'data' => $suggestion->uid
				);

			}
			return $suggestions;
	}

	private function SearchCity($queryStrng){
		/*$queryStrng=$this->request->getPost('query');*/

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
					'conditions' => $row.' LIKE ?1 ORDER BY usergroup DESC',
					'bind' => array(
						1 => $queryStrng.'%'
					)
				)
			);
		$zips=array();
		foreach($suggestionQuery as $suggestion){
			$zips[]=$suggestion->zipcode;


		}
		return $zips;
	}

	private function SearchNameFromZip($queryStrng){
		/*$queryStrng=$this->request->getPost('query');*/

		$suggestions=array("suggestions"=>array());
		$placeholder='%';

		if(is_numeric($queryStrng)){

			if(substr($queryStrng,0,1)=='0'){
				$queryStrng=substr($queryStrng,1);
			}
			$cityObject=new City();
			$zipQuery=  $cityObject->getFeusersFromZip(array(1=>$queryStrng));

		}else{
			$cityQuery=City::find(array(
					'conditions' => 'city LIKE ?1',
					'bind' => array(
						1 => $queryStrng.'%'
					)
				)
			);

			$zips=array();
			foreach($cityQuery as $city){
				$zips[]=$city->zip;
			}
			if(count($zips)>0){
				$cityObject=new City();
				$zipQuery=  $cityObject->getFeusersFromZip($zips);
			}
		}



		if(isset($zipQuery)){

		foreach($zipQuery as $suggestion){

				$suggestions['suggestions'][]=array(
					'value' =>$suggestion->first_name.' '. $suggestion->last_name,
					'html' => '<div class="suggestion-item">
										<table>
											<tr>
												<td>
													<img src="'.$this->userImgExists($suggestion->image).'" style="max-height:100px">
												</td>
												<td>
													<div class="">
														<span style="font-weight:bold">'.$suggestion->first_name.' '. $suggestion->last_name.'</span>,<br>
														'.$suggestion->specialization.',<br>
														'.$suggestion->region.'<br><span class="contactButton small">SMS senden</span>
													</div>
												</td>
											</tr>
										</table>
									</div>',
					'data' => $suggestion->uid
				);

			}
		}
		return $suggestions;

	}
}