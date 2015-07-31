<div id="messages"><?php echo $this->flashSession->output(); ?></div>
<?php echo $this->getContent(); ?>
<div class="container"><?php if ($this->session->get('auth')) { ?><div class="ceElement medium">
		<h1><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusersCreateTitle'); ?></h1>
		<div class="listelementContainer">

			
			<?php echo $this->tag->form(array('backend/' . $language . '/feusers/create/', 'method' => 'post')); ?>

				<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.username'); ?></label><br>
				<?php echo $this->tag->textField(array('username', 'size' => 32)); ?>
				<br><br>
				<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.password'); ?></label><br>
				<?php echo $this->tag->passwordField(array('password', 'size' => 32)); ?>
			<br><br>
				<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.lastname'); ?></label><br>
				<?php echo $this->tag->textField(array('last_name', 'size' => 32)); ?>
			<br><br>
			<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.firstname'); ?></label><br>
				<?php echo $this->tag->textField(array('first_name', 'size' => 32)); ?>
			<br><br>
				<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.title'); ?></label><br>
				<?php echo $this->tag->textField(array('title', 'size' => 32)); ?>
				<br><br>
				<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.email'); ?></label><br>
				<?php echo $this->tag->textField(array('email', 'size' => 32)); ?>
			<br><br>
			<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.phone'); ?></label><br>
				<?php echo $this->tag->textField(array('phone', 'size' => 32)); ?>
			<br><br>
			<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.address'); ?></label><br>
				<?php echo $this->tag->textField(array('address', 'size' => 32)); ?>
			<br><br>
			<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.city'); ?></label><br>
				<?php echo $this->tag->textField(array('city', 'size' => 32)); ?>
			<br><br>
			<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.zip'); ?></label><br>
				<?php echo $this->tag->textField(array('zip', 'size' => 32)); ?>
			<br><br>
			<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.company'); ?></label><br>
				<?php echo $this->tag->textField(array('company', 'size' => 32)); ?>
			<br><br>
			<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.profile'); ?></label><br>
				 <?php echo $this->tag->select(array('profileuid', $profiles, 'using' => array('uid', 'title'))); ?>
				 <br><br>
			<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.usergroup'); ?></label><br>
			<?php echo $this->tag->select(array('usergroup', $usergroups, 'using' => array('uid', 'title'))); ?>
			<br><br>
			<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.userlanguage'); ?></label><br>
			<?php echo $this->tag->select(array('userlanguage', $languages, 'using' => array('uid', 'title'))); ?>
			<br><br>
			<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.superuser'); ?></label><br>
				 <?php echo $this->tag->select(array('superuser', array('1' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('active'), '0' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('inactive')), 'value' => 0)); ?>
				 <br><br>	 
				 <?php echo $this->tag->submitButton(array(messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('ok'))); ?>

			</form>
		</div>
	</div><?php } ?></div>
