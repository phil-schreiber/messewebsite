	<?php echo $this->getContent(); ?>
	<section id="start">
		<a name="start"></a>
		<div>
		<h1><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('welcome'); ?></h1>
		
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
												<td style="vertical-align:middle"><p><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('button1'); ?></p></td>											  
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
												<td style="vertical-align:middle"><p><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('button2'); ?></p></td>											  
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
										<a href='<?php echo $language; ?>/survey'>
										<table style="width:100%;height:100%">
											<tr>											
												<td style="vertical-align:middle"><p><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('button3'); ?></p></td>											  
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
												<td style="vertical-align:middle"><p><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('button4'); ?></p></td>											  
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
		<h2><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('welcomeInfo'); ?></h2>
		<?php echo $this->tag->image(array('images/icon-touch-sm.png', 'id' => 'touchIcon')); ?>
	</section>
	<section id="list">
		<a name="list"></a>
		<header>
			<div class="logo">
				<a href="#start" class="navLink"><?php echo $this->tag->image(array('images/baywa-logo.png', 'class' => 'logo')); ?></a>
			</div>
			<div class="headerWrap">
				<h1><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('listHeader'); ?></h1>
				<h2><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('listHeaderInfo'); ?></h2>
			</div>
			
			<div class='clearfix'></div>
			<div class="legend">
					<span class="onspot active" style="position:static;display: inline-block"> </span><span>Heute für Sie am Stand</span>&nbsp;&nbsp;
					<span class="onspot inactive" style="position:static;display: inline-block"> </span><span>Heute nicht vor Ort</span>
				</div>
		</header>
		
		<ul class="list-group clearfix">
		<?php foreach ($feusers as $index => $feuser) { ?>
		<li class='list-group-item'>
			<?php echo $feuser->available; ?>
			<table>
				<tr>
					<td>
						<?php echo $this->tag->image(array(messetool\Modules\Modules\Frontend\Controllers\ControllerBase::userImgExists($feuser->image), 'class' => 'userImg')); ?>
					</td>
					<td>
						<div class='list-group-item-heading'>
							<?php echo $feuser->first_name; ?> <?php echo $feuser->last_name; ?>,<br>
							<?php echo $feuser->jobtitle; ?>,<br>
							<?php echo $feuser->city; ?>
						</div>
					</td>
				</tr>
			</table>
			<input type="hidden" value="<?php echo $feuser->uid; ?>">
		</li>
		<?php } ?>
		</ul>
		
		<br>
		<div class="clearfix">
			<a href="#search" class="navButton"  id="consultantNotFound"><span class="icon i_right_primary"></span><span class="btn_label"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('consultantNotFound'); ?></span></a>
			<a href="#start" class="navButton small"><span class="icon i_up_primary"></span><span class="btn_label"></span><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('backHome'); ?></a>
		</div>
		
	</section>
	<section id="contact">
		<a name="contact"></a>
		<header>
			<div class="logo">
				<a href="#start" class="navLink"><?php echo $this->tag->image(array('images/baywa-logo.png', 'class' => 'logo')); ?></a>
			</div>
			<div class="headerWrap">
				<h1><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('contactHeader'); ?></h1>
				<h2><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('contactHeaderInfo'); ?></h2>
			</div>
			<div id="virtualKeyboard" class="virtualKeyboard"></div>
			
			<div class='clearfix'></div>
		</header>
		
		<form id="contactForm" autocomplete="off" class="form">
		<div id="contactFormWrapper" class="pt-wrapper">
			
				
					<table class="formTable" style="display:none">
						<tr>
							<td>
								<label for="consultant"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('consultant'); ?></label><br>
								<select id="consultantSelect" name="consultant">
									<option value="0"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('pleaseSelect'); ?></option>
								<?php foreach ($feusers as $index => $feuser) { ?>
									<option value="<?php echo $feuser->uid; ?>"><?php echo $feuser->first_name; ?> <?php echo $feuser->last_name; ?></option>					
								<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<a class="pt-trigger" data-animation="32" data-goto="2">Weiter</a>
							</td>
						</tr>
					</table>
					
				
				<div class="pt-page pt-page-1 pt-page-current">
					<a href="#search" class="navButton small" style="float:left"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('messageTo'); ?>: <span class="choice"></span></a>
					<div class="legend" style="margin-top:0;">* <?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('mandatory'); ?></div>
					
					<table class="formTable" style="min-height:90%;">
						<tr>
							<td colspan="2">
								<div class="alignLeft">
								<h4 style="font-size:1.3vw;"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('contactInfo'); ?>:</h4>
								</div>
							</td>
							
						</tr>
						<tr>
							
							<td>
								<div class="alignLeft">
								<label for="firstname"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('firstname'); ?>*</label><br>
								<input type="text" name="firstname"><br><br>
								</div>

							</td>
							<td>
								<div class="alignLeft">
								<label for="lastname"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('lastname'); ?>*</label><br>
								<input type="text" name="lastname"><br><br>
								</div>
							</td>
							
						</tr>
						<tr>							
							<td>
								<div class="alignLeft">
								<label for="phone"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('phone'); ?>*</label><br>
								<input type="text" name="phone"><br><br>
								</div>
							</td>
							<td>
								<div class="alignLeft">
								<label for="zip"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('zip'); ?>*</label><br>
								<input type="text" name="zip"><br><br>
								</div>
							</td>

						</tr>
						<tr>
							<td>
								<div class="alignLeft">
								<label for="city"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('city'); ?>*</label><br>
								<input type="text" name="city"><br><br>
								</div>
							</td>
							<td>
								<div class="alignLeft">
								<label for="farmer"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('farmer'); ?></label><br>
								<span style="padding:0.5em;width: 12.5vw; display:inline-block;">
								<input type="radio" name="farmer" value="1" checked><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('yes'); ?> / 
								<input type="radio" name="farmer" value="0"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('no'); ?>
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
					<a href="#search" class="navButton small" style="float:left"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('messageTo'); ?>: <span class="choice"></span></a>
					<table class="formTable">
						<tr>
							<td>
								<label for="message"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('message'); ?></label><br>					
								<select name="consultant">
									<option value="0"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('message1'); ?></option>
									<option value="2"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('message2'); ?></option>
									<option value="3"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('message3'); ?></option>
									<option value="4"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('message4'); ?></option>
								</select><br>
							</td>
						</tr>
						<tr>
							<td>
								<a class="pt-trigger" data-animation="32" data-goto="-2">Zurück</a>&nbsp;<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('submitSMS'); ?>">
							</td>
						</tr>
					</table>					
				</div>
				 
			
		</div>
		</form>
		<a href="#search" class="navButton small" style="float:left;"><span class="icon i_right_primary"></span><span class="btn_label"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('goToSearch'); ?></span></a>
		  <a href="#start" class="navButton small"><span class="icon i_up_primary"></span><span class="btn_label"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('backHome'); ?></span></a>
	</section>
	<section id="search">
		<a name="search"></a>
		<header>
			<div class="logo">
				<a href="#start" class="navLink"><?php echo $this->tag->image(array('images/baywa-logo.png', 'class' => 'logo')); ?></a>
			</div>
			<div class="headerWrap">
				<h1><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('searchHeader'); ?></h1>
				<h2><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('searchHeaderInfo'); ?></h2>
			</div>
			<div id="virtualKeyboard2" class="virtualKeyboard"></div>
			
			<div class='clearfix'></div>
			
		</header>
		<div class="legend">
					<span class="onspot active" style="position:static;display: inline-block"> </span><span>Standpersonal: Heute für Sie am Stand</span>&nbsp;|&nbsp;
					<span class="onspot inactive" style="position:static;display: inline-block"> </span><span>Standpersonal: Heute nicht vor Ort</span>
				</div>
		<form id="searchForm" autocomplete="off" class="form">
			<div class="pt-page" style="display:block;visibility: visible">
				
					<table class="formTable">
						<tr>							
							<td class="alignLeft marginLeft">
								<label for="firstname"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('firstname'); ?></label><br>
							
								<input type="text" name="firstname">
							</td>
							<td class="alignLeft marginLeft">
								<label for="lastname"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('lastname'); ?></label><br>
							
								<input type="text" name="lastname">
							</td>
							<td class="alignLeft marginLeft">
								<label for="city"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('city'); ?></label>	<br>						
								<input type="text" name="city">								
							</td>
						</tr>						
						<tr>
							<td></td>
							
							<td  class="alignLeft marginLeft"><input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('search'); ?>"></td>
							<td></td>
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
		
		<a href="#start" class="navButton small backToTop"><span class="icon i_up_primary"></span><span class="btn_label"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('backHome'); ?></span></a>
	</section>

		<div id="virtualKeyboardWrapper" ></div>
		
		<div id="iframeOverlay" class="overlay">
			<iframe src="" style="height:100%;width:100%;overflow: scroll" scrolling="auto"></iframe>
		</div>