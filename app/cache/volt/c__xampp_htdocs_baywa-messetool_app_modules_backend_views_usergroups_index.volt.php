

	<?php echo $this->getContent(); ?>
	<section>
<div class="container backend"><?php if ($this->session->get('auth')) { ?><div class="ceElement large">
	<h1><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('usergroups'); ?></h1>
		<ul>
			<?php foreach ($usergroups as $usergroup) { ?>
			<li><a href='<?php echo $path; ?><?php echo $usergroup->uid; ?>'>>> <?php echo $usergroup->title; ?> | <?php echo date('d.m.Y', $usergroup->tstamp); ?> | <?php echo $usergroup->countFeusers(); ?></a></li>
			<?php } ?>
		</ul>
	</div><?php } ?></div>
	</section>	