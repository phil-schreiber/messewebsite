
	<?php echo $this->getContent(); ?>
	<section id="start">
		<div id="startImgWrap" class="cbutton cbutton--effect-jagoda cbutton--click">
			<div  class="cbutton cbutton--effect-jagoda2 cbutton--click">
				<a href="#menu"><?php echo $this->tag->image(array('images/baywa-logo.png', 'id' => 'startImg')); ?></a>				
			</div>			
		</div>
		<?php echo $this->tag->image(array('images/icon-touch-sm.png', 'id' => 'touchIcon')); ?>
	</section>
	<section id="menu">
		<a name="menu"></a>
		<nav class="navbar navbar-reverse" role="navigation">
		<div id="headerLeft">
		<div id="logo">
			<?php echo $this->tag->image(array('images/logo.png')); ?>
		</div>
			<h1><?php echo nltool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('templateobjects'); ?></h1>
		</div>
		</nav>
	</section>
	
