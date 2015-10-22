

	{{ content() }}
	<section>
<div class="container backend">
	{%- if session.get('auth') -%}
	
	<div class="ceElement large">
	<h1>Bitte wählen Sie eine Auswertung:</h1>
	<ul>
		<li><a href='{{ path }}1'>Besucherbefragug</a></li>
		<li><a href='{{ path }}2'>Mitarbeiterbefragung</a></li>
	</ul>	
	
	

	</div>
	
{%- endif -%}

</div>
	</section>	