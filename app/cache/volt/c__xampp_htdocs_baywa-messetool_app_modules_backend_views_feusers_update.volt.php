<div id="messages"><?php echo $this->flashSession->output(); ?></div>
<?php echo $this->getContent(); ?>
<div class="container"><?php if ($this->session->get('auth')) { ?><div class="ceElement medium">

<h1><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusersCreateTitle'); ?></h1>
	<div class="listelementContainer">
	<?php echo $this->tag->form(array('backend/' . $language . '/feusers/update/', 'method' => 'post')); ?>

		<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.username'); ?></label><br>
		<?php echo $form->render('username'); ?>
		<br><br>
		<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.password'); ?></label><br>
		<?php echo $form->render('password'); ?>
	<br><br>
		<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.lastname'); ?></label><br>
		<?php echo $form->render('last_name'); ?>
	<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.firstname'); ?></label><br>
		<?php echo $form->render('first_name'); ?>
	<br><br>
		<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.title'); ?></label><br>
		<?php echo $form->render('title'); ?>
		<br><br>
		<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.email'); ?></label><br>
		<?php echo $form->render('email'); ?>
	<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.phone'); ?></label><br>
		<?php echo $form->render('phone'); ?>
	<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.address'); ?></label><br>
		<?php echo $form->render('address'); ?>
	<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.city'); ?></label><br>
		<?php echo $form->render('city'); ?>
	<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.zip'); ?></label><br>
		<?php echo $form->render('zip'); ?>
	<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.company'); ?></label><br>
		<?php echo $form->render('company'); ?>
	<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.profile'); ?></label><br>
		 <?php echo $form->render('profileuid'); ?>
		 <br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.usergroup'); ?></label><br>
	<?php echo $form->render('usergroup'); ?>
	<?php echo $form->render('uid'); ?>
	<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.userlanguage'); ?></label><br>
	<?php echo $form->render('userlanguage'); ?>
	<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.superuser'); ?></label><br>
		 <?php echo $form->render('superuser'); ?>
		 <br><br>	 
		 <?php echo $this->tag->submitButton(array(messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('ok'))); ?>

	</form>
	</div>
</div><?php } ?></div>
