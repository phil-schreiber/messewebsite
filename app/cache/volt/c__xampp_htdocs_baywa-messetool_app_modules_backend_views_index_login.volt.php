<div id="messages"><?php echo $this->flashSession->output(); ?></div>
<div class="container">
	<?php echo $this->getContent(); ?>
<h1><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('loginTitle'); ?></h1>


<div class="loginForm">
  <form action="<?php echo $form->getAction(); ?>" method="POST">
   <label for="username">Email: </label><br>
    <?php echo $form->render('username'); ?><br/><br>
    

    <label for="password">Password: </label><br>
    <?php echo $form->render('password'); ?><br><br>
    

    <?php echo $form->render('login'); ?>
  </form>
</div>
</div>