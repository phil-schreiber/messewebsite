<?php
namespace messetool\Modules\Modules\Backend\Controllers;
use messetool\Models\Feusers,
	messetool\Models\Profiles,
	messetool\Models\Languages,
	messetool\Models\Usergroups,
	messetool\Forms\FeusersForm;
/**
 * Class FeusersController
 *
 * @package baywa-nltool\Controllers
 */

class FeusersController extends ControllerBase

{
	public function indexAction(){
		$this->assets->addCss('css/jquery.dataTables.css');
		$feusers=Feusers::find(array(
				'conditions' => 'deleted=0'
			));
		
		$environment= $this->config['application']['debug'] ? 'development' : 'production';
		$baseUri=$this->config['application'][$environment]['staticBaseUri'];
		$path=$baseUri.'/backend/'.$this->view->language.'/feusers/update/';
		
		$this->view->setVar('path',$path);
		$this->view->setVar('feusers',$feusers);
	}
	public function updateAction(){
		if(!$this->request->isPost()){
			$feuserUid = $this->dispatcher->getParam("uid");
			$feuserRecord = Feusers::findFirstByUid($feuserUid);
		}else{
			$feuserUid = $this->request->getPost("uid");
			$feuserRecord = Feusers::findFirstByUid($feuserUid);
			
			$feuserRecord->assign(array(
				'tstamp' => time(),				
				'cruser_id' => $this->session->get('auth')['uid'],								
				'username' => $this->request->getPost('username'),
				'password' => $this->myhash($this->request->getPost('password'), $this->unique_salt()),
				'first_name' => $this->request->getPost('first_name'),
				'last_name' => $this->request->getPost('last_name'),				
				'title' => $this->request->getPost('title'),
				'email' => $this->request->getPost('email'),
				'phone' => $this->request->getPost('phone'),
				'address' => $this->request->getPost('address'),
				'city' => $this->request->getPost('city'),
				'zip' => $this->request->getPost('zip'),
				'company' => $this->request->getPost('company'),
				'profileid' => $this->request->getPost('profileuid'),
				'usergroup' => $this->request->getPost('usergroup'),
				'superuser' => $this->request->getPost('superuser'),
				'userlanguage' => $this->request->getPost('userlanguage')
			));
			$feuserRecord->update();
		}
		$this->view->form = new FeusersForm($feuserRecord, array(
            'edit' => true
        ));
	}
	public function createAction(){
		if($this->request->isPost()){
			$time=time();
			$feuser=new Feusers();
			$feuser->assign(array(
				"pid" => 0,
				'tstamp' => $time,
				'crdate' => $time,
				'cruser_id' => $this->session->get('auth')['uid'],
				'deleted' => 0,
				'hidden' => 0,				
				'username' => $this->request->getPost('username'),
				'password' => $this->myhash($this->request->getPost('password'), $this->unique_salt()),
				'first_name' => $this->request->getPost('first_name'),
				'last_name' => $this->request->getPost('last_name'),				
				'title' => $this->request->getPost('title'),
				'email' => $this->request->getPost('email'),
				'phone' => $this->request->getPost('phone'),
				'address' => $this->request->getPost('address'),
				'city' => $this->request->getPost('city'),
				'zip' => $this->request->getPost('zip'),
				'company' => $this->request->getPost('company'),
				'profileid' => $this->request->getPost('profileuid'),
				'usergroup' => $this->request->getPost('usergroup'),
				'superuser' => $this->request->getPost('superuser'),
				'userlanguage' => $this->request->getPost('userlanguage')
				
			));
			if(!$feuser->save()){
				$this->flash->error($feuser->getMessages());
			}else{
				$this->flash->success("Feuser was created successfully");
			}
			
			/*Forces to rewrite ACL list on next request*/
			unlink('../app/cache/acl/data.txt');
			
		}
		$profiles=Profiles::find(array(
			'conditions' => 'deleted=0 AND hidden=0'
		));
		$languages=Languages::find(array(
			'conditions' => 'deleted=0 AND hidden=0'
		));
		$usergroups=Usergroups::find(array(
			'conditions' => 'deleted=0 AND hidden=0'
		));

		$this->view->setVar('profiles',$profiles);
		$this->view->setVar('languages',$languages);
		$this->view->setVar('usergroups',$usergroups);
		
	}
	
	private function myhash($password, $unique_salt) {
		return crypt($password, '$2a$10$'.$unique_salt);
	}
	private function unique_salt() {
		return substr(sha1(mt_rand()),0,22);
	}
	
	public function uploadAction(){
		$time=time();
		$this->assets->addJs('js/vendor/addressesInit.js');
		$addressfoldersRecords=Feusers::find(array(
			"conditions" => "deleted=0 AND hidden=0 AND usergroup = ?1",
				"bind" => array(1 => $this->session->get('auth')['usergroup']),
				"order" => "tstamp DESC"
		));
		$this->view->setVar('addressfolders',$addressfoldersRecords);
		$this->view->setVar('filehideshow','');
		$this->view->setVar('maphideshow','hidden');
		if($this->request->isPost()){			
			$this->view->setVar('filehideshow','hidden');
			$this->view->setVar('maphideshow','');
			
			
				if ($this->request->hasFiles() == true){
					
					$mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');

					$fileArray=$this->request->getUploadedFiles();
					$file=$fileArray[0];
					
					if(in_array($file->getType(), $mimes)){
						$nameArray=explode('.',$file->getName());
						$filetype=$nameArray[(count($nameArray)-1)];
						$tmpFile='../app/cache/tmp/'.$time.'_'.$file->getName();
						$file->moveTo($tmpFile);
						$row=0;
						
						if (($handle = fopen($tmpFile, "r")) !== FALSE) {
							$fileRowField=array();
							
							if($this->request->hasPost('firstRowFieldNames')){
								$data[$row] = fgetcsv($handle, 1000, $this->_divider[$this->request->getPost('divider')],$this->_dataWrap[$this->request->getPost('dataFieldWrap')]);
								$fileRowField=array_values($data[$row]);
							}else{
								
								while($row < 3){
									$data[$row] = fgetcsv($handle, 1000, $this->_divider[$this->request->getPost('divider')],$this->_dataWrap[$this->request->getPost('dataFieldWrap')]);																		
									$row++;		
								}
								
								for($i=0; $i<count($data[0]); $i++){
									
									$fileRowField[]=$data[0][$i].'<br>'.$data[1][$i].'<br>'.$data[2][$i];
								}
								
								
							}
							fclose($handle);
							
							
						}else{
							die('Failed');
						}					
					}
					$this->view->setVar('divider',$this->request->getPost('divider'));
					$this->view->setVar('dataFieldWrap',$this->request->getPost('dataFieldWrap'));
					$this->view->setVar('tstamp',$time);
					$this->view->setVar('firstRowFieldNames', ($this->request->hasPost('firstRowFieldNames') ? 1 :0));
					$this->view->setVar('filename',$file->getName());
					$this->view->setVar('uploadfields',$fileRowField);
				}else{
					$time=time();
					if($this->request->getPost('addressfolderCreate') != '' && $this->request->getPost('addressFoldersUid') ==0){
						/*create the segment*/
						$addressfolder=new Addressfolders();
						$addressfolder->assign(array(
							'pid'=>0,
							'deleted'=>0,
							'hidden'=>0,
							'tstamp'=>$time,
							'crdate'=>$time,
							'cruser_id' => $this->session->get('auth')['uid'],
							'usergroup' => $this->session->get('auth')['usergroup'],
							'title'=>$this->request->getPost('addressfolderCreate','striptags'),
							'hashtags'=>'' //TODO
						));
						if (!$addressfolder->save()) {
							$this->flash->error($addressfolder->getMessages());
						}
					}else{
						$addressfolder=  Addressfolders::findFirst(array(
							'conditions'=>'uid=?1',
							'bind' => array(
								1=>$this->request->getPost('addressFoldersUid')
							)
						));
						
						$addressfolder->assign(array(
								'tstamp'=>$time
								));
						$addressfolder->update();
					}
						
						

						$row=0;
						$insStr='';
						$addressesDBFielMap=array(
							1=>'first_name',
							2=>'last_name',
							3=>'title',
							4=>'salutation',
							5=>'email',
							6=>'company',
							7=>'phone',
							8=>'address',
							9=>'city',
							10=>'zip',
							11=>'userlanguage',
							12=>'gender'
						);
						//Using Address Segment n:1 relation; lookup is there, but no mass insert possible 
						$insField='(pid,tstamp,crdate,cruser_id,usergroup';
						$indexArray=array();
						foreach($this->request->getPost('adressFieldsMap') as $addressFieldIndex=> $addressField){
							if(intval($addressField) !=0 && !is_nan(intval($addressField))){
								$insField.=','.$addressesDBFielMap[intval($addressField)];
								array_push($indexArray,$addressFieldIndex);
							}
						}
						$insField.=')';
						$basicInsVals=$addressfolder->uid.','.$time.','.$time.','.$this->session->get('auth')['uid'].','.$this->session->get('auth')['usergroup'];
						$tmpFile='../app/cache/tmp/'.$this->request->getPost('time').'_'.$this->request->getPost('filename');
						if (($handle = fopen($tmpFile, "r")) !== FALSE) {
							if($this->request->getPost('firstRowFieldNames')==1){
								$data = fgetcsv($handle, 1000, $this->_divider[$this->request->getPost('divider')],$this->_dataWrap[$this->request->getPost('dataFieldWrap')]);
							}
							while(($data = fgetcsv($handle, 1000, $this->_divider[$this->request->getPost('divider')],$this->_dataWrap[$this->request->getPost('dataFieldWrap')])) !== FALSE){


									$insStr.='('.$basicInsVals;
									foreach($data as $valueindex=> $value){
										if(in_array($valueindex, $indexArray)){
											if(is_numeric($value)){
												$insStr.=','.$value;
											}else{
												$insStr.=',"'.$value.'"';
											}								
										}
									}

									$insStr.='),';									
									if($row>0 && $row%500==0){
										$insStr=substr($insStr,0,-1);
										$this->di->get('db')->query("INSERT INTO addresses ".$insField." VALUES ".$insStr);
										$insStr='';
									}							

								$row++;
							}
						
							if($data==false && $insStr!=''){

									$insStr=substr($insStr,0,-1);
									
									$this->di->get('db')->query("INSERT INTO addresses ".$insField." VALUES ".$insStr);

							}

							fclose($handle);
							unlink($tmpFile);
							
						}
						$this->response->redirect($this->view->language.'/addressfolders/update/'.$addressfolder->uid.'/'); 
					$this->view->disable(); 


				}
		}else{
			$this->view->setVar('divider','');
			$this->view->setVar('dataFieldWrap','');
			$this->view->setVar('tstamp','');
			$this->view->setVar('filename','');
			$this->view->setVar('firstRowFieldNames','');
			$this->view->setVar('uploadfields',array());
		}
	}
	
}