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
			<li>{{ link_to(language~'/templateobjects/create/', '<span class="glyphicon glyphicon-edit"></span> '~tr('create'), 'title': tr('templateobjectsCreate')) }}</li>
			<li>{{ link_to(language~'/templateobjects/index/', '<span class="glyphicon glyphicon-list"></span> '~tr('retrieve'), 'title': tr('templateobjectsRetrieve')) }}</li>
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