{% include 'partials/flash-messages.volt' %}

{{ content() }}
<section>
	<div class="container">
		{%- if session.get('auth') -%}
		<div class="ceElement medium">
			<h1>{{tr('addressFoldersCreateTitle')}}</h1>
	<div id="mapWrapper" class="{{ filehideshow }}">

	<div class='listelementContainer'>
	{{ form('backend/'~language~'/feusers/upload', 'method': 'post', 'enctype': 'multipart/form-data') }}


	<label>{{ tr('firstRowContainsFieldName') }}</label><br>
		{{ check_field('firstRowFieldNames')}}

		<br><br>	
		<label>{{ tr('dateFieldsWrapped') }}</label><br>
		{{ select_static('dataFieldWrap', [ '0' : '" ('~tr('quotesign')~")", '1' : "' ("~tr('invertedcomma')~")"]) }}


		<br><br>
		<label>{{ tr('divider') }}</label><br>
		{{ select_static('divider', [ '0' : '; ('~tr('semicolon')~')', '1' : ', ('~tr('comma')~')','2': ': ('~tr('colon')~')', '3':'	 ('~tr('tabs')~')']) }}

		<br><br>
	<label>{{ tr('csv')}}</label><br>
	{{ file_field("addresslistFile") }}
	<br><br>

		{{ submit_button(tr('ok'),'id':'uploadAndShowMap') }}

	</form>
	</div>
	</div>

	<div id="mapWrapper" class="{{ maphideshow }}">
		<div class='listelementContainer'>
		{{ form('backend/'~language~'/feusers/upload', 'method': 'post') }}

		<label>{{tr('usergroup')}}</label><br>
		{{ select("usergroup", usergroups, 'using': ['uid', 'title']) }}
		<br>
		<label>{{ tr('onSpot') }}</label><br>
		{{ check_field('onspot')}}
	

		<table id="mapTable">
			<thead><th>Dateifelder</th><th>&nbsp;</th><th>Datenbankfelder</th></thead>
		{% for index,uploadfield in uploadfields %}
		<tr>
			<td>{{uploadfield}}</td>
			<td> >> </td>
			<td>
				{{ select('adressFieldsMap[]', [ '0':tr('pleaseSelect'),'1' : tr('firstname'), '2' : tr('lastname'), '3' : tr('title'), '4' : tr('salutation'), '5' : tr('email'), '6' : tr('company'), '7' : tr('phone'), '8' : tr('address'), '9' : tr('place'), '10' : tr('zip'), '11' : tr('userlanguage'), '12' : tr('gender'), '13': tr('region'), '14': tr('jobtitle'), '15': tr('division'), '16': tr('specialization'),'21': tr('personellnumber')]) }}
			</td>

		</tr>
		{% endfor %}
		</table>

		<br><br>
		{{ hidden_field("dataFieldWrap","value": dataFieldWrap) }}
		{{ hidden_field("divider","value": divider) }}
		{{ hidden_field("time","value": tstamp) }}
		{{ hidden_field("firstRowFieldNames","value": firstRowFieldNames) }}
		{{ hidden_field("filename","value": filename) }}
		{{ submit_button(tr('ok')) }}

	</form>
	</div>
	</div>
	</div>

	{%- endif -%}

	</div>
</section>