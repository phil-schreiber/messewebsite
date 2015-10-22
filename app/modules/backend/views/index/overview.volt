{% include 'partials/flash-messages.volt' %}
{{ content() }}
<div class="container">	
	<div class="desktop">
		
		<h1>{{tr('actionTitle')}}</h1><br>
		{% if linkAllowed(session.get('auth'),'feusers','index') %}		
		<div class="ceElement xs">
			<h1>{{ link_to('backend/'~language~'/feusers/index/', tr('feusers'), 'title': tr('feusers')) }}
			</h1>
			<ul>
			<li>{{ link_to('backend/'~language~'/feusers/upload/', '<span class="glyphicon glyphicon-edit"></span> Upload', 'title': 'Upload') }}</li>
			
			</ul>
		</div>
		{% endif %}
		{% if linkAllowed(session.get('auth'),'survey','index') %}		
		<div class="ceElement xs">
			<h1>{{ link_to('backend/'~language~'/survey/index/', tr('survey'), 'title': tr('survey')) }}
			</h1>
			
		</div>
		{% endif %}
		
		
	</div>
</div>