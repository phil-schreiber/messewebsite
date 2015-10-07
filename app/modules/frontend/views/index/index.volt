	{{ content() }}
	<section id="start">
		<a name="start"></a>
		<div>
		<h1>{{tr("welcome")}}</h1>
		
		</div><br>
		<div id="startImgWrap" class="cbutton cbutton--effect-jagoda cbutton--click">
			<div  id="startTableWrap" class="cbutton cbutton--effect-jagoda2 cbutton--click">
				<table width="100%" >
					<tr>
						<td>
							<div class="flip-container">
								<div class="flipper">
									<div class="front tile1">
										<!-- front content -->
									</div>
									<div class="back tile1">
										<!-- back content -->
										<a href='#list' >
										<table style="width:100%;height:100%">
											<tr>											
												<td style="vertical-align:middle"><p>{{tr('button1')}}</p></td>											  
											</tr>
										  </table>										
										</a>
									</div>
								</div>
							</div>
						</td>
						<td>
							<div class="flip-container">
								<div class="flipper">
									<div class="front tile2">
										<!-- front content -->
									</div>
									<div class="back tile2">
										<!-- back content -->
										<a href='#search'>
										<table style="width:100%;height:100%">
											<tr>											
												<td style="vertical-align:middle"><p>{{tr('button2')}}</p></td>											  
											</tr>
										  </table>	
										</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="flip-container">
								<div class="flipper">
									<div class="front tile4">
										<!-- front content -->
									</div>
									<div class="back tile4">
										<!-- back content -->
										<a href='{{language}}/survey'>
										<table style="width:100%;height:100%">
											<tr>											
												<td style="vertical-align:middle"><p>{{tr('button3')}}</p></td>											  
											</tr>
										  </table>	
										</a>
									</div>
								</div>
							</div>
						</td>
						<td>
							<div class="flip-container">
								<div class="flipper">
									<div class="front tile3">
										<!-- front content -->
									</div>
									<div class="back tile3">
										<!-- back content -->
										<a href='{{language}}/baywa'>
										<table style="width:100%;height:100%">
											<tr>											
												<td style="vertical-align:middle"><p>{{tr('button4')}}</p></td>											  
											</tr>
										  </table>	
										</a>
									</div>
								</div>
							</div>
							
						</td>
					</tr>
					
				</table>
				
			</div>			
		</div>
		<h2>{{tr("welcomeInfo")}}</h2>
		{{image('images/icon-touch-sm.png',"id":"touchIcon")}}
	</section>
	<section id="list">
		<a name="list"></a>
		<header>
			<div class="logo">
				<a href="#start" class="navLink">{{image('images/baywa-logo.png', "class":"logo")}}</a>
			</div>
			<div class="headerWrap">
				<h1>{{tr('listHeader')}}</h1>
				<h2>{{tr('listHeaderInfo')}}</h2>
			</div>
			
			<div class='clearfix'></div>
			<div class="legend">
					<span class="onspot active" style="position:static;display: inline-block"> </span><span>{{tr('listHeader')}}</span>&nbsp;&nbsp;
					<span class="onspot inactive" style="position:static;display: inline-block"> </span><span>Heute nicht vor Ort</span>
				</div>
		</header>
		
		<ul class="list-group clearfix">
		{% for index,feuser in feusers %}
		<li class='list-group-item'>
			{{feuser.available}}
			<table>
				<tr>
					<td>
						{{image(userImgExists(feuser.image),"class":"userImg")}}
					</td>
					<td>
						<div class='list-group-item-heading'>
							{{feuser.first_name}} {{feuser.last_name}},<br>
							{{feuser.jobtitle}},<br>
							{{feuser.city}}
						</div>
					</td>
				</tr>
			</table>
			<input type="hidden" value="{{feuser.uid}}">
		</li>
		{% endfor %}
		</ul>
		
		<br>
		<div class="clearfix">
			<a href="#search" class="navButton small"  id="consultantNotFound" style="float:left;"><span class="icon i_right_primary"></span><span class="btn_label">{{tr('consultantNotFound')}}</span></a>
			<a href="#start" class="navButton small"><span class="icon i_up_primary"></span><span class="btn_label"></span>{{tr('backHome')}}</a>
		</div>
		
	</section>
	<section id="contact">
		<a name="contact"></a>
		<header>
			<div class="logo">
				<a href="#start" class="navLink">{{image('images/baywa-logo.png', "class":"logo")}}</a>
			</div>
			<div class="headerWrap">
				<h1>{{tr('contactHeader')}}</h1>
				<h2>{{tr('contactHeaderInfo')}}</h2>
			</div>
			<div id="virtualKeyboard" class="virtualKeyboard"></div>
			
			<div class='clearfix'></div>
		</header>
		
		<form id="contactForm" autocomplete="off" class="form" style="height:64%">
		<div id="contactFormWrapper" class="pt-wrapper">
			
				
					<table class="formTable" style="display:none">
						<tr>
							<td>
								<label for="consultant">{{tr('consultant')}}</label><br>
								<select id="consultantSelect" name="consultant">
									<option value="0">{{tr('pleaseSelect')}}</option>
								{% for index,feuser in allusers %}
									<option value="{{feuser.uid}}">{{feuser.first_name}} {{feuser.last_name}}</option>					
								{% endfor %}
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<a class="pt-trigger" data-animation="32" data-goto="2">Weiter</a>
							</td>
						</tr>
					</table>
					
				
				<div class="pt-page pt-page-1" id="formPage" style="display:block;">
					<a href="#search" class="navButton small" style="float:left">{{tr('messageTo')}}: <span class="choice"></span></a>
					<div class="legend" style="margin-top:0;">* {{tr('mandatory')}}</div>
					
					<table class="formTable" style="min-height:90%;">
						<tr>
							<td colspan="2">
								<div class="alignLeft">
								<h4 style="font-size:1.3vw;">{{tr('contactInfo')}}:</h4>
								</div>
							</td>
							
						</tr>
						<tr>
							
							<td>
								<div class="alignLeft">
								<label for="firstname">{{tr('firstname')}}*</label><br>
								<input type="text" name="firstname"><br><br>
								</div>

							</td>
							<td>
								<div class="alignLeft">
								<label for="lastname">{{tr('lastname')}}*</label><br>
								<input type="text" name="lastname"><br><br>
								</div>
							</td>
							
						</tr>
						<tr>							
							<td>
								<div class="alignLeft">
								<label for="phone">{{tr('phone')}}*</label><br>
								<input type="text" name="phone"><br><br>
								</div>
							</td>
							<td>
								<div class="alignLeft">
								<label for="zip">{{tr('yourzip')}}*</label><br>
								<input type="text" name="zip"><br><br>
								</div>
							</td>

						</tr>
						<tr>
							<td>
								<div class="alignLeft">
								<label for="city">{{tr('yourcity')}}*</label><br>
								<input type="text" name="city"><br><br>
								</div>
							</td>
							<td>
								<div class="alignLeft">
								<label for="farmer">{{tr('farmer')}}</label><br>
								<span style="padding:0.5em;width: 12.5vw; display:inline-block;">
								<input type="radio" name="farmer" value="1" checked>{{tr('yes')}} / 
								<input type="radio" name="farmer" value="0">{{tr('no')}}
								</span>
								</div>
							</td>										
						</tr>
						
						<tr>
							<td colspan="2" style="text-align: center;">
								<a class="pt-trigger" data-animation="32" data-goto="2" id="formTrigger">Weiter</a>
								<br><br>
							</td>
						</tr>
					</table>
				</div>				
				<div class="pt-page pt-page-2">
					<a href="#search" class="navButton small" style="float:left">{{tr('messageTo')}}: <span class="choice"></span></a>
					<table class="formTable">
						<tr>
							<td style="text-align: left;">
								<label style="display: block; margin-left: auto;margin-right: auto;width: 40vw;">{{tr('premessage')}}</label><br>					
								<ul id="smsTextsSelect">			
									
								</ul>
								
							</td>
							<td style="text-align: left;">
								<br><label for="message" style="display: block; width: 40vw;">{{tr('message')}}</label><br>					
								<textarea name="message" id="smsTexts"></textarea>
							</td>
						</tr>						
						<tr>
							<td colspan="2">								
								<input type="hidden" name="terms" id="terms" value="1"> <label for="terms">{{tr('terms')}}</label>								
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<a class="pt-trigger" data-animation="32" data-goto="-2">Zurück</a>&nbsp;<a data-animation="32" data-goto="3" class="pt-trigger" id="formTrigger2">{{tr('submitSMS')}}</a>
							</td>
						</tr>
					</table>					
				</div>
				<div class="pt-page pt-page-3">
						<a href="#search" class="navButton small" style="float:left">{{tr('messageTo')}}: <span class="choice"></span></a>
						<table class="formTable">
							<tr>
								<td>
									<h3 style="margin-left">{{tr('messageSent')}}</h3>						
						<br><br>
						<a href="http://baywa-messetool.iq-pi.org/" class="navButton"  id="consultantNotFound"><span class="icon i_right_primary"></span><span class="btn_label">{{tr('backHome')}}</span></a>
								</td>
							</tr>						
							
						</table>					
					</div>
				 
			
		</div>
		</form>
		<table style="width:100%;">
			<tr>
				<td>
					<a href="#search" class="navButton small" style="float:left;"><span class="icon i_right_primary"></span><span class="btn_label">{{tr('goToSearch')}}</span></a>
				</td>
				<td style="text-align: center;">
					<a href="#list" class="navButton small" style="float:none;margin-left:9vw;"><span class="icon i_up_primary"></span><span class="btn_label">{{tr('onspot')}}</span></a>
				</td>
				<td>
					<a href="#start" class="navButton small"><span class="icon i_up_primary"></span><span class="btn_label">{{tr('backHome')}}</span></a>
				</td>
			</tr>
		</table>
		
		  
	</section>
	<section id="search">
		<a name="search"></a>
		<header>
			<div class="logo">
				<a href="#start" class="navLink">{{image('images/baywa-logo.png', "class":"logo")}}</a>
			</div>
			<div class="headerWrap">
				<h1>{{tr('searchHeader')}}</h1>
				<h2>{{tr('searchHeaderInfo')}}</h2>
			</div>
			<div id="virtualKeyboard2" class="virtualKeyboard"></div>
			
			<div class='clearfix'></div>
			
		</header>
		<div class="legend">
					<span class="onspot active" style="position:static;display: inline-block"> </span><span>Standpersonal: {{tr('listHeader')}}</span>&nbsp;|&nbsp;
					<span class="onspot inactive" style="position:static;display: inline-block"> </span><span>Standpersonal: Heute nicht vor Ort</span>
				</div>
		<form id="searchForm" autocomplete="off" class="form">
			<div class="pt-page" style="display:block;visibility: visible">
				
					<table class="formTable">
						<tr>							
							<td class="alignLeft marginLeft">
								<label for="firstname">{{tr('firstname')}}</label><br>
							
								<input type="text" name="firstname">
							</td>
							<td class="alignLeft marginLeft">
								<label for="lastname">{{tr('lastname')}}</label><br>
							
								<input type="text" name="lastname">
							</td>
							<td class="alignLeft marginLeft">
								<label for="city">{{tr('zip')}}</label>	<br>						
								<input type="text" name="city">								
							</td>
						</tr>						
						<tr>							
							
							<td colspan="3" style="text-align: center"><input type="submit" value="{{tr('search')}}"></td>
							
						</tr>							
						<tr>
							<td colspan="3" style="vertical-align: top;height:30vh;">								
								
									<div id="searchResults">										
										
									
									</div>																
								
								
							</td>
						</tr>
					</table>
				
			</div>
		</form>
		
		<a href="#start" class="navButton small backToTop"><span class="icon i_up_primary"></span><span class="btn_label">{{tr('backHome')}}</span></a>
	</section>

		<div id="virtualKeyboardWrapper" ></div>
		
		<div id="iframeOverlay" class="overlay">
			<iframe src="" style="height:100%;width:100%;overflow: scroll" scrolling="auto"></iframe>
		</div>