
	{{ content() }}
	<section id="start">
		<div>
		<h1>{{tr("welcome")}}</h1>
		<h2>{{tr("welcomeInfo")}}</h2>
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
										<a href='#list'>
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
										<a href='#survey'>
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
										<table style="width:100%;height:100%">
											<tr>											
												<td style="vertical-align:middle"><p>{{tr('button4')}}</p></td>											  
											</tr>
										  </table>	
										
									</div>
								</div>
							</div>
							
						</td>
					</tr>
					
				</table>
				
			</div>			
		</div>
		{{image('images/icon-touch-sm.png',"id":"touchIcon")}}
	</section>
	<section id="list">
		<a name="list"></a>
		<header>
			<div class="logo">
				{{image('images/baywa-logo.png', "class":"logo")}}
			</div>
			<div class="headerWrap">
				<h1>{{tr('listHeader')}}</h1>
				<h2>{{tr('listHeaderInfo')}}</h2>
			</div>
			<div class='clearfix'></div>
		</header>
		<ul class="list-group clearfix">
		{% for index,feuser in feusers %}
		<li class='list-group-item'>
			<table>
				<tr>
					<td>
						{{image("public/media/"~feuser.image,"class":"userImg")}}
					</td>
					<td>
						<div class='list-group-item-heading'>
							{{feuser.first_name}} {{feuser.last_name}},<br>
							{{feuser.company}},<br>
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
			<a href="#search" class="navButton"  id="consultantNotFound"><span class="icon i_right_primary"></span><span class="btn_label">{{tr('consultantNotFound')}}</span></a>
		</div>
	</section>
	<section id="contact">
		<a name="contact"></a>
		<header>
			<div class="logo">
				{{image('images/baywa-logo.png', "class":"logo")}}
			</div>
			<div class="headerWrap">
				<h1>{{tr('contactHeader')}}</h1>
				<h2>{{tr('contactHeaderInfo')}}</h2>
			</div>
			<div class='clearfix'></div>
		</header>
		<form id="contactForm" autocomplete="off" class="form">
		<div id="contactFormWrapper" class="pt-wrapper">
			
				<div class="pt-page pt-page-1 pt-page-current">
					<table class="formTable">
						<tr>
							<td>
								<label for="consultant">{{tr('consultant')}}</label><br>
								<select id="consultantSelect" name="consultant">
									<option value="0">{{tr('pleaseSelect')}}</option>
								{% for index,feuser in feusers %}
									<option value="{{feuser.uid}}">{{feuser.first_name}} {{feuser.last_name}}</option>					
								{% endfor %}
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<a class="pt-trigger" data-animation="32" data-goto="-2">Zurück</a>&nbsp;<a class="pt-trigger" data-animation="32" data-goto="2">Weiter</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="pt-page pt-page-2">
					<table class="formTable">
						<tr>
							<td>
								<label for="firstname">{{tr('firstname')}}</label><br>
								<input type="text" name="firstname"><br><br>
								<label for="lastname">{{tr('lastname')}}</label><br>
								<input type="text" name="lastname"><br><br>
								<label for="farmer">{{tr('farmer')}}</label><br>
								<input type="radio" name="farmer" value="1" checked>{{tr('yes')}} / 
								<input type="radio" name="farmer" value="0">{{tr('no')}}<br><br>
							</td>
							<td>
								<div id="virtualKeyboard"></div>
							</td>
						</tr>
						<tr>
							<td >
								<a class="pt-trigger" data-animation="32" data-goto="-2">Zurück</a>&nbsp;<a class="pt-trigger" data-animation="32" data-goto="3">Weiter</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="pt-page pt-page-3">
					<table class="formTable">
						<tr>
							<td>
								<table>
									<tr>
										<td>
											<label for="email">{{tr('email')}}</label><br>
											<input type="text" name="email"><br><br>
											<label for="phone">{{tr('phone')}}</label><br>
											<input type="text" name="phone"><br><br>
										</td>
										<td>
											<label for="zip">{{tr('zip')}}</label><br>
											<input type="text" name="zip"><br><br>
											<label for="city">{{tr('city')}}</label><br>
											<input type="text" name="city"><br><br>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<a class="pt-trigger" data-animation="32" data-goto="-2">Zurück</a>&nbsp;<a class="pt-trigger" data-animation="32" data-goto="4">Weiter</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="pt-page pt-page-4">
					<table class="formTable">
						<tr>
							<td>
								<label for="message">{{tr('message')}}</label><br>					
								<select name="consultant">
									<option value="0">{{tr('message1')}}</option>
									<option value="2">{{tr('message2')}}</option>
									<option value="3">{{tr('message3')}}</option>
									<option value="4">{{tr('message4')}}</option>
								</select><br>
							</td>
						</tr>
						<tr>
							<td>
								<a class="pt-trigger" data-animation="32" data-goto="-2">Zurück</a>&nbsp;<input type="submit" value="{{tr('submitSMS')}}">
							</td>
						</tr>
					</table>					
				</div>
				 
			
		</div>
		</form>
		  
	</section>
	<section id="search">
		<a name="search"></a>
		<header>
			<div class="logo">
				{{image('images/baywa-logo.png', "class":"logo")}}
			</div>
			<div class="headerWrap">
				<h1>{{tr('searchHeader')}}</h1>
				<h2>{{tr('searchHeaderInfo')}}</h2>
			</div>
			<div class='clearfix'></div>
			
		</header>
		<form id="searchForm" autocomplete="off" class="form">
			<div class="pt-page" style="display:block;visibility: visible">
					<table class="formTable">
						<tr>
							
							<td>
								<label for="name">{{tr('name')}}</label><br>
								<input type="text" name="name" id="searchName">
							</td>
							<td>
								<label for="city">{{tr('city')}}</label><br>
								<input type="text" name="city" id="searchCity">
								<input type="hidden" name="zip" id="searchZip">
							</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="3" style="vertical-align: top;height:320px">
								
									<div id="searchResults" class="list-group clearfix">
									
									
									
									</div>																
							</td>
						</tr>
					</table>
			</div>
		</form>
	</section>
	<section id="survey">
		<a name="survey"></a>
		<header>
			<div class="logo">
				{{image('images/baywa-logo.png', "class":"logo")}}
			</div>
			<div class="headerWrap">
				<h1>{{tr('surveyHeader')}}</h1>
				
			</div>
			<div class='clearfix'></div>
			
		</header>
		<div id="surveyForm" class="form">
			<div id="surveyFormWrapper" class="pt-wrapper">
				<div class="pt-page pt-page-10">
					{{tr('surveyHeaderInfo')}}
					<div style="position:relative;">
						<a href="" class="navButton pt-trigger"   data-animation="32" data-goto="2"><span>{{tr('surveyButtonStart')}}</span></a>
					</div>
				</div>
				<div class="pt-page pt-page-2">
					<h3>{{tr('question_1')}}</h3>
					<form autocomplete="off" class="survey" name="question_1">
						<table class="formTable">
							<tr>
								<td>
									<input type="checkbox" id="q_1_1" name="q_1_1"> <label for="q_1_1">{{tr('q_1_1')}}</label>
								</td>
								<td>
									<input type="checkbox" id="q_1_2" name="q_1_2"> <label for="q_1_2">{{tr('q_1_2')}}</label>
								</td>
								<td>
									<input type="checkbox" id="q_1_3" name="q_1_3"> <label for="q_1_3">{{tr('q_1_3')}}</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" id="q_1_4" name="q_1_4"> <label for="q_1_4">{{tr('q_1_4')}}</label>
								</td>
								<td>
									<input type="checkbox" id="q_1_5" name="q_1_5"> <label for="q_1_5">{{tr('q_1_5')}}</label>
								</td>
								<td>
									<input type="checkbox" id="q_1_6" name="q_1_6"> <label for="q_1_6">{{tr('q_1_6')}}</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" id="q_1_7" name="q_1_7"> <label for="q_1_7">{{tr('q_1_7')}}</label>
								</td>
								
								<td>
									<label for="q_1_8">{{tr('q_1_8')}}</label> <input type="text" id="q_1_8" name="q_1_8"> 
								</td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:center">
									
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="3" class="pt-trigger">
									
								</td>
							</tr>

						</table>
						<input type="hidden" name="question" value="1">
					</form>
				</div>
				<div class="pt-page pt-page-3">
					<h3>{{tr('question_2')}}</h3>
					<form autocomplete="off" class="survey" name="question_2">
						<table class="formTable">
						<tr>
								<td>
									<input type="checkbox" id="q_2_1" name="q_2_1"> <label for="q_2_1">{{tr('q_2_1')}}</label>
								</td>
								<td>
									<input type="checkbox" id="q_2_2" name="q_2_2"> <label for="q_2_2">{{tr('q_2_2')}}</label>
								</td>
								<td>
									<input type="checkbox" id="q_2_3" name="q_2_3"> <label for="q_2_3">{{tr('q_2_3')}}</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" id="q_2_4" name="q_2_4"> <label for="q_2_4">{{tr('q_2_4')}}</label>
								</td>
								<td>
									<input type="checkbox" id="q_2_5" name="q_2_5"> <label for="q_2_5">{{tr('q_2_5')}}</label>
								</td>
								<td>
									<input type="checkbox" id="q_2_6" name="q_2_6"> <label for="q_2_6">{{tr('q_2_6')}}</label>
								</td>
							</tr>
								<tr>
								<td>
									<input type="checkbox" id="q_2_7" name="q_2_7"> <label for="q_2_7">{{tr('q_2_7')}}</label>
								</td>
								<td>
									<input type="checkbox" id="q_2_8" name="q_2_8"> <label for="q_2_8">{{tr('q_2_8')}}</label>
								</td>
								<td>
									<input type="checkbox" id="q_2_9" name="q_2_9"> <label for="q_2_9">{{tr('q_2_9')}}</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" id="q_2_10" name="q_2_10"> <label for="q_2_10">{{tr('q_2_10')}}</label>
								</td>								
								<td>
									<label for="q_2_11">{{tr('q_2_11')}}</label> <input type="text" id="q_2_11" name="q_2_11"> 
								</td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:center">
									
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="4" class="pt-trigger">
									
								</td>
							</tr>
							
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-4">
					<h3>{{tr('question_3')}}</h3>
					<form autocomplete="off" class="survey" name="question_3">
						<table class="formTable">
							<tr>
								<td>
									<label for="q_3_1">{{tr('q_3_1')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input id="rating5" type="radio" name="rating" value="5">
										<label for="rating5">5</label>
										<input id="rating4" type="radio" name="rating" value="4">
										<label for="rating4">4</label>
										<input id="rating3" type="radio" name="rating" value="3">
										<label for="rating3">3</label>
										<input id="rating2" type="radio" name="rating" value="2">
										<label for="rating2">2</label>
										<input id="rating1" type="radio" name="rating" value="1">
										<label for="rating1">1</label>
									  </span>
								</td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:center">
									
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="4" class="pt-trigger">
									
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	
	</section>
		
	
		