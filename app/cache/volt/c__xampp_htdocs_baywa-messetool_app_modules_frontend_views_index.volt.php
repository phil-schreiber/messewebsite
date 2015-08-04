<?php use Phalcon\Tag as Tag ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		 <?php echo $this->tag->getTitle(); ?>
        
		
		<?php echo $this->tag->stylesheetLink('css/jQuery.dataTables.css'); ?>				
        <?php echo $this->tag->stylesheetLink('css/main.css'); ?>     
		<?php echo $this->tag->stylesheetLink('css/transition-animations.css'); ?>     
		<?php echo $this->tag->stylesheetLink('css/jsKeyboard.css'); ?>     
		<?php echo $this->assets->outputCss(); ?>
		
		<script data-main="<?php echo $baseurl; ?>js/vendor/plugins" src="<?php echo $baseurl; ?>js/require.js"></script>
		<?php echo $this->assets->outputJs(); ?>
		
	
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
      
        <?php echo $this->getContent(); ?>
        
	
		
       
	   
	   <input id="controller" value="<?php echo $controller; ?>" type="hidden">
	   <input id="lang" value="<?php echo $language; ?>" type="hidden">				
		<input id="baseurl" value="<?php echo $baseurl; ?>" type="hidden">
    </body>
</html>