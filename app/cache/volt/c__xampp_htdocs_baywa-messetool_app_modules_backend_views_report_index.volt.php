

	<?php echo $this->getContent(); ?>
	<section>
<div class="container backend"><?php if ($this->session->get('auth')) { ?><div class="ceElement large">
	<h1>Bitte wählen Sie eine Auswertung:</h1>
	<ul>
		<li><a href='<?php echo $path; ?>1'>Besucherbefragug</a></li>
		<li><a href='<?php echo $path; ?>2'>Mitarbeiterbefragung</a></li>
	</ul>	
	
	

	</div><?php } ?></div>
	</section>	