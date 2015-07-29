
	<?php echo $this->getContent(); ?>
	<section id="start">
		<div>
		<h1><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('welcome'); ?></h1>
		<h2><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('welcomeInfo'); ?></h2>
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
										<table style="width:100%;height:100%">
											<tr>											
												<td style="vertical-align:middle"><p><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('button2'); ?></p></td>											  
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
		<?php echo $this->tag->image(array('images/icon-touch-sm.png', 'id' => 'touchIcon')); ?>
	</section>
	<section id="list">
		<a name="list"></a>
		<header>
			<div class="logo">
				<?php echo $this->tag->image(array('images/baywa-logo.png', 'class' => 'logo')); ?>
			</div>
			<div class="headerWrap">
				<h1><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('listHeader'); ?></h1>
				<h2><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('listHeaderInfo'); ?></h2>
			</div>
			<div class='clearfix'></div>
		</header>
		<ul class="list-group clearfix">
		<?php foreach ($feusers as $index => $feuser) { ?>
		<li class='list-group-item'>
			<table>
				<tr>
					<td>
						<?php echo $this->tag->image(array('public/media/' . $feuser->image, 'class' => 'userImg')); ?>
					</td>
					<td>
						<div class='list-group-item-heading'>
							<?php echo $feuser->first_name; ?> <?php echo $feuser->last_name; ?>,<br>
							<?php echo $feuser->company; ?>,<br>
							<?php echo $feuser->city; ?>
						</div>
					</td>
				</tr>
			</table>
			<input type="hidden" value="<?php echo $feuser->uid; ?>">
		</li>
		</ul>
		<?php } ?>
		<br>
		<div class="clearfix">
			<a href="#search" class="navButton"  id="consultantNotFound"><span class="icon i_right_primary"></span><span class="btn_label"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('consultantNotFound'); ?></span></a>
		</div>
	</section>
	<section id="contact">
		<a name="contact"></a>
		<header>
			<div class="logo">
				<?php echo $this->tag->image(array('images/baywa-logo.png', 'class' => 'logo')); ?>
			</div>
			<div class="headerWrap">
				<h1><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('contactHeader'); ?></h1>
				<h2><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('contactHeaderInfo'); ?></h2>
			</div>
			<div class='clearfix'></div>
		</header>
		<form id="contactForm" autocomplete="off" class="form">
		<div id="contactFormWrapper" class="pt-wrapper">
			
				<div class="pt-page pt-page-1 pt-page-current">
					<table class="formTable">
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
								<a class="pt-trigger" data-animation="32" data-goto="-2">Zurück</a>&nbsp;<a class="pt-trigger" data-animation="32" data-goto="2">Weiter</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="pt-page pt-page-2">
					<table class="formTable">
						<tr>
							<td>
								<label for="firstname"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('firstname'); ?></label><br>
								<input type="text" name="firstname"><br><br>
								<label for="lastname"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('lastname'); ?></label><br>
								<input type="text" name="lastname"><br><br>
								<label for="farmer"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('farmer'); ?></label><br>
								<input type="radio" name="farmer" value="1" checked><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('yes'); ?> / 
								<input type="radio" name="farmer" value="0"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('no'); ?><br><br>
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
											<label for="email"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('email'); ?></label><br>
											<input type="text" name="email"><br><br>
											<label for="phone"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('phone'); ?></label><br>
											<input type="text" name="phone"><br><br>
										</td>
										<td>
											<label for="zip"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('zip'); ?></label><br>
											<input type="text" name="zip"><br><br>
											<label for="city"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('city'); ?></label><br>
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
		  
	</section>
	<section id="search">
		<a name="search"></a>
		<header>
			<div class="logo">
				<?php echo $this->tag->image(array('images/baywa-logo.png', 'class' => 'logo')); ?>
			</div>
			<div class="headerWrap">
				<h1><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('searchHeader'); ?></h1>
				<h2><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('searchHeaderInfo'); ?></h2>
			</div>
			<div class='clearfix'></div>
			
		</header>
		<form id="searchForm" autocomplete="off" class="form">
			<div class="pt-page" style="display:block;visibility: visible">
					<table class="formTable">
						<tr>
							
							<td>
								<label for="name"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('name'); ?></label><br>
								<input type="text" name="name" id="searchName">
							</td>
							<td>
								<label for="city"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('city'); ?></label><br>
								<input type="text" name="city" id="searchCity">
							</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="3">
								<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('search'); ?>">
							</td>
						</tr>
					</table>
			</div>
		</form>
	</section>
	
		