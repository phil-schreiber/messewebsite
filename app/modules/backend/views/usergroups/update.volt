

	{{ content() }}
	<section>
<div class="container backend">
	{%- if session.get('auth') -%}
	
	<div class="ceElement large">
	<h1>{{usergroup.title}}</h1>
		<div class="dataTables_wrapper">
			<table  class="display dataTable">
				<thead>
					<tr>						
						<th>{{ tr('feusers.lastname') }}</th>
						<th>{{ tr('feusers.firstname') }}</th>
						<th>{{ tr('feusers.title') }}</th>
						<th>{{ tr('feusers.email') }}</th>
						<th>{{ tr('feusers.phone') }}</th>
						
						<th>{{ tr('feusers.city') }}</th>						
						<th>{{ tr('feusers.company') }}</th>
						{% if usergroup.title == "Standmitarbeiter" %}
							{% for index,onspotdate in onspotdates %}
							<th>{{date('d.m.Y',onspotdate.tstamp)}}</th>
							{% endfor %}
						{% endif %}
					</tr>
				</thead>
				<tbody>
				{% for index,feuser in usergroup.getFeusers() %}
				<tr class='{% if index is even %}even{% else %}odd{%endif%}'>					
				<td>{{feuser.last_name}}</td>
				<td>{{feuser.first_name}}</td>
				<td>{{feuser.title}}</td>
				<td>{{feuser.email}}</td>
				<td>{{feuser.phone}}</td>				
				<td>{{feuser.city}}</td>				
				<td>{{feuser.company}}</td>	
				{% if usergroup.title == "Standmitarbeiter" %}
					{% for index,onspotdate in onspotdates %}
					
					<td><input type="checkbox" class="updateDate" value="{{feuser.uid}}_{{onspotdate.uid}}" {{ feuser.hasOnspotdate(onspotdate.uid) ? 'checked' : '' }}></td>
					{% endfor %}
				{% endif %}
				<td><a href='{{baseurl}}backend/de/feusers/update/{{ feuser.uid }}'>>> {{tr('update')}}</a></td>

				</tr>
				{% endfor %}
				</tbody>
			</table>
		</div>
	</div>
	
{%- endif -%}

</div>
	</section>	