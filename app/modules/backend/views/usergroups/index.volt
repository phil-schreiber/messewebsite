

	{{ content() }}
	<section>
<div class="container backend">
	{%- if session.get('auth') -%}
	
	<div class="ceElement large">
	<h1>{{ tr('usergroups')}}</h1>
		<ul>
			{% for usergroup in usergroups %}
			<li><a href='{{ path }}{{ usergroup.uid }}'>>> {{usergroup.title}} | {{ date('d.m.Y',usergroup.tstamp) }} | {{usergroup.countFeusers()}}</a></li>
			{% endfor %}
		</ul>
	</div>
	
{%- endif -%}

</div>
	</section>	