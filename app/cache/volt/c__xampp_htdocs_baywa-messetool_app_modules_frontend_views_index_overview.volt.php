<div id="messages"><?php echo $this->flashSession->output(); ?></div>
<?php echo $this->getContent(); ?>
<div class="container">	
	<div class="desktop">
		
		<h1><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('actionTitle'); ?></h1><br>
		<?php if (messetool\Acl\Acl::linkAllowed($this->session->get('auth'), 'templateobjects', 'index')) { ?>		
		<div class="ceElement xs">
			<h1><?php echo $this->tag->linkTo(array($language . '/templateobjects/index/', messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('templateobjects'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('templateobjects'))); ?>
			</h1>
			<ul>
			<li><?php echo $this->tag->linkTo(array($language . '/templateobjects/create/', '<span class="glyphicon glyphicon-edit"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('create'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('templateobjectsCreate'))); ?></li>
			<li><?php echo $this->tag->linkTo(array($language . '/templateobjects/index/', '<span class="glyphicon glyphicon-list"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('retrieve'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('templateobjectsRetrieve'))); ?></li>
			</ul>
		</div>
		<?php } ?>
		<?php if (messetool\Acl\Acl::linkAllowed($this->session->get('auth'), 'configurationobjects', 'index')) { ?>		
		<div class="ceElement xs">
			<h1><?php echo $this->tag->linkTo(array($language . '/configurationobjects/index/', messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('configurationobjects'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('configurationobjects'))); ?>
			</h1>
			<ul>
			<li><?php echo $this->tag->linkTo(array($language . '/configurationobjects/create/', '<span class="glyphicon glyphicon-edit"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('create'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('configurationobjectsCreate'))); ?></li>
			<li><?php echo $this->tag->linkTo(array($language . '/configurationobjects/index/', '<span class="glyphicon glyphicon-list"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('retrieve'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('configurationobjectsRetrieve'))); ?></li>
			</ul>
		</div>
		<?php } ?>
		<?php if (messetool\Acl\Acl::linkAllowed($this->session->get('auth'), 'addressfolders', 'index')) { ?>		
		<div class="ceElement xs">
			<h1><?php echo $this->tag->linkTo(array($language . '/addressfolders/', messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('addressfolders'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('addressfolders'))); ?>
			</h1>
			<ul>
			<li><?php echo $this->tag->linkTo(array($language . '/addressfolders/create/', '<span class="glyphicon glyphicon-edit"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('create'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('addressfoldersCreate'))); ?></li>
			<li><?php echo $this->tag->linkTo(array($language . '/addressfolders/index/', '<span class="glyphicon glyphicon-list"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('retrieve'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('addressfoldersCreate'))); ?></li>
			
			</ul>
		</div>
		<?php } ?>
		<?php if (messetool\Acl\Acl::linkAllowed($this->session->get('auth'), 'segmentobjects', 'index')) { ?>		
		<div class="ceElement xs">
			<h1><?php echo $this->tag->linkTo(array($language . '/segmentobjects/', messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('segmentobjects'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('segmentobjects'))); ?>
			</h1>
			<ul>
			<li><?php echo $this->tag->linkTo(array($language . '/segmentobjects/create/', '<span class="glyphicon glyphicon-edit"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('create'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('segmentobjectsCreate'))); ?></li>
			<li><?php echo $this->tag->linkTo(array($language . '/segmentobjects/index/', '<span class="glyphicon glyphicon-list"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('retrieve'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('segmentobjectsCreate'))); ?></li>
			
			</ul>
		</div>
		<?php } ?>
		<?php if (messetool\Acl\Acl::linkAllowed($this->session->get('auth'), 'distributors', 'index')) { ?>		
		<div class="ceElement xs">
			<h1><?php echo $this->tag->linkTo(array($language . '/distributors/', messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('distributors'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('distributors'))); ?>
			</h1>
			<ul>
			<li><?php echo $this->tag->linkTo(array($language . '/distributors/create/', '<span class="glyphicon glyphicon-edit"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('create'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('distributorsCreate'))); ?></li>
			<li><?php echo $this->tag->linkTo(array($language . '/distributors/index/', '<span class="glyphicon glyphicon-list"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('retrieve'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('distributorsCreate'))); ?></li>
			
			</ul>
		</div>
		<?php } ?>
		<?php if (messetool\Acl\Acl::linkAllowed($this->session->get('auth'), 'mailobjects', 'index')) { ?>		
		<div class="ceElement xs">
			<h1><?php echo $this->tag->linkTo(array($language . '/mailobjects/index/', messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('mailobjects'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('mailobjects'))); ?>
			</h1>
			<ul>
			<li><?php echo $this->tag->linkTo(array($language . '/mailobjects/create/', '<span class="glyphicon glyphicon-edit"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('create'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('mailobjectsCreate'))); ?></li>
			<li><?php echo $this->tag->linkTo(array($language . '/mailobjects/index/', '<span class="glyphicon glyphicon-list"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('retrieve'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('mailobjectsRetrieve'))); ?></li>
			</ul>
		</div>
		<?php } ?>
		<?php if (messetool\Acl\Acl::linkAllowed($this->session->get('auth'), 'campaignobjects', 'index')) { ?>		
		<div class="ceElement xs">
			<h1><?php echo $this->tag->linkTo(array($language . '/campaignobjects/index/', messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('campaigns'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('campaign'))); ?>
			</h1>
			
			<ul>
			<li><?php echo $this->tag->linkTo(array($language . '/campaignobjects/create/', '<span class="glyphicon glyphicon-edit"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('create'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('campaignCreate'))); ?></li>
			<li><?php echo $this->tag->linkTo(array($language . '/campaignobjects/index/', '<span class="glyphicon glyphicon-list"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('retrieve'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('campaignRetrieve'))); ?></li>
			</ul>
			
		</div>
		<?php } ?>
		<?php if (messetool\Acl\Acl::linkAllowed($this->session->get('auth'), 'report', 'index')) { ?>		
		<div class="ceElement xs">
			<h1><?php echo $this->tag->linkTo(array($language . '/report/', messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('report'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('report'))); ?>
			</h1>
			<ul>			
			<li><?php echo $this->tag->linkTo(array($language . '/report/index/', '<span class="glyphicon glyphicon-eye-open"></span> ' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('create'), 'title' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('report'))); ?></li>
			
			</ul>
		</div>
		<?php } ?>
		
	</div>
</div>