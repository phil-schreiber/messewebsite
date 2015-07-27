
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
		<ul class='list-group'>
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
		<div id="contactFormWrapper">
			<form id="contactForm" class="simform" autocomplete="off">
				<div class="simform-inner">
					<ol class="questions">
						<li class="current">
							<span><label for="consultant"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('consultant'); ?></label></span>
				<select id="consultantSelect" name="consultant">
					<option value="0"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('pleaseSelect'); ?></option>
				<?php foreach ($feusers as $index => $feuser) { ?>
					<option value="<?php echo $feuser->uid; ?>"><?php echo $feuser->first_name; ?> <?php echo $feuser->last_name; ?></option>					
				<?php } ?>
				</select><br><br>
				</li>
				<li>
				<label for="firstname"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('firstname'); ?></label><br>
				<input type="text" name="firstname"><br><br>
				<label for="lastname"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('lastname'); ?></label><br>
				<input type="text" name="lastname"><br><br>
				<label for="farmer"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('farmer'); ?></label><br>
				<input type="radio" name="farmer" value="1" checked><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('yes'); ?> / 
				<input type="radio" name="farmer" value="0"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('no'); ?><br><br>
				</li>
				<li>
				<label for="email"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('email'); ?></label><br>
				<input type="text" name="email"><br><br>
				<label for="phone"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('phone'); ?></label><br>
				<input type="text" name="phone"><br><br>
				<label for="zip"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('zip'); ?></label><br>
				<input type="text" name="zip"><br><br>
				<label for="city"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('city'); ?></label><br>
				<input type="text" name="city"><br><br>
				</li>
				<li>
				<label for="message"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('message'); ?></label><br>
				<select name="consultant">
					<option value="0"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('message1'); ?></option>
					<option value="2"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('message2'); ?></option>
					<option value="3"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('message3'); ?></option>
					<option value="4"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('message4'); ?></option>
				</select><br>
				</li>
				
				</ol>	
				<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('submitSMS'); ?>">
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
	
	
		