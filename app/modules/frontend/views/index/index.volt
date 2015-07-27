
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
										<table style="width:100%;height:100%">
											<tr>											
												<td style="vertical-align:middle"><p>{{tr('button2')}}</p></td>											  
											</tr>
										  </table>	
										
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
		<ul class='list-group'>
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
		</ul>
	
		{% endfor %}
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
		<div id="contactFormWrapper">
			<form id="contactForm" class="simform" autocomplete="off">
				<div class="simform-inner">
					<ol class="questions">
						<li class="current">
							<span><label for="consultant">{{tr('consultant')}}</label></span>
				<select id="consultantSelect" name="consultant">
					<option value="0">{{tr('pleaseSelect')}}</option>
				{% for index,feuser in feusers %}
					<option value="{{feuser.uid}}">{{feuser.first_name}} {{feuser.last_name}}</option>					
				{% endfor %}
				</select><br><br>
				</li>
				<li>
				<label for="firstname">{{tr('firstname')}}</label><br>
				<input type="text" name="firstname"><br><br>
				<label for="lastname">{{tr('lastname')}}</label><br>
				<input type="text" name="lastname"><br><br>
				<label for="farmer">{{tr('farmer')}}</label><br>
				<input type="radio" name="farmer" value="1" checked>{{tr('yes')}} / 
				<input type="radio" name="farmer" value="0">{{tr('no')}}<br><br>
				</li>
				<li>
				<label for="email">{{tr('email')}}</label><br>
				<input type="text" name="email"><br><br>
				<label for="phone">{{tr('phone')}}</label><br>
				<input type="text" name="phone"><br><br>
				<label for="zip">{{tr('zip')}}</label><br>
				<input type="text" name="zip"><br><br>
				<label for="city">{{tr('city')}}</label><br>
				<input type="text" name="city"><br><br>
				</li>
				<li>
				<label for="message">{{tr('message')}}</label><br>
				<select name="consultant">
					<option value="0">{{tr('message1')}}</option>
					<option value="2">{{tr('message2')}}</option>
					<option value="3">{{tr('message3')}}</option>
					<option value="4">{{tr('message4')}}</option>
				</select><br>
				</li>
				
				</ol>	
				<input type="submit" value="{{tr('submitSMS')}}">
			<div class="controls">
							<button class="next"></button>
							<div class="progress"></div>
							<span class="number">
								<span class="number-current"></span>
								<span class="number-total"></span>
							</span>
							<span class="error-message"></span>
						</div>	
				</div>
			</form>
			
		
		
	</section>
	
	
		