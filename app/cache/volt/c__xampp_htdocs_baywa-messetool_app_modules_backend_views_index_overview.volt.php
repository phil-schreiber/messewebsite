<div id="messages"><?php echo $this->flashSession->output(); ?></div>
<?php echo $this->getContent(); ?>
<div class="container">	
	<div class="desktop">
		
		<h1><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('actionTitle'); ?></h1><br>
		<?php if (messetool\Acl\Acl::linkAllowed($this->session->get('auth'), 'feusers', 'index')) { ?>		
		<div class="ceElement xs">
			<h1><?php echo $this->tag->linkTo(array('backend/' . $language . '/feusers/index/', messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers'))); ?>
			</h1>
			<ul>
			<li><?php echo $this->tag->linkTo(array($language . '/templateobjects/create/', '<span class="glyphicon glyphicon-edit"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('create'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('templateobjectsCreate'))); ?></li>
			<li><?php echo $this->tag->linkTo(array($language . '/templateobjects/index/', '<span class="glyphicon glyphicon-list"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('retrieve'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('templateobjectsRetrieve'))); ?></li>
			</ul>
		</div>
		<?php } ?>
		<?php if (messetool\Acl\Acl::linkAllowed($this->session->get('auth'), 'survey', 'index')) { ?>		
		<div class="ceElement xs">
			<h1><?php echo $this->tag->linkTo(array('backend/' . $language . '/survey/index/', messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('survey'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('survey'))); ?>
			</h1>
			
		</div>
		<?php } ?>
		
		
	</div>
</div>