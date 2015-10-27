	{{ content() }}
	
<div>
{%- if session.get('auth') -%}
<h3>Teilnehmer gesamt: {{total}}</h3>
{%- if mitarbeiterbefragung -%}

<table id="report" class="mitarbeiter">
	<thead>
		<tr>
			<th colspan="2" style="border-right:2px solid;">
				1. Wie beurteilen Sie den BayWa Stand allgemein?
			</th>
			<th colspan="10" style="border-right:2px solid;">
				2. Wie beurteilen Sie folgende Bereiche unseres Standes?
			</th>
			<th colspan="2" style="border-right:2px solid;">
				3. Wie beurteilen Sie die gesamte Organisation…?
			</th>
			<th colspan="3" style="border-right:2px solid;">
				4. Briefing vor der Veranstaltung...
			</th>
			<th colspan="3" style="border-right:2px solid;">
				5. Waren die Aufgaben und Zuständigkeiten vor Ort klar verteilt?
			</th>
			<th style="border-right:2px solid;">
				6. Welche Anregungen/Lob/Kritik haben Sie für die Organisation der nächsten Agritechnica?
			</th>
			<th colspan="7" style="border-right:2px solid;">
				7. Wie beurteilen Sie die Kundenfrequenz während der Messe auf dem Stand?
			</th>
			<th style="border-right:2px solid;">
				8. Wie sind Sie persönlich mit Ihrem Erfolg als Berater während der Messe zufrieden?
			</th>
			<th colspan="2" style="border-right:2px solid;">
				9. Wie beurteilen Sie die Qualität der Gespräche während der Messe?
			</th>
			<th colspan="5" style="border-right:2px solid;">
				10. Was haben Sie im Bezug auf folgende Punkte während der Agritechnica erreicht?
			</th>
			<th colspan="2">
				11. Wie beurteilen Sie die Stände der Konkurrenz und Nachbarn allgemein
			</th>
		</tr>
		<tr>
			<!-- Question 1 begin-->
			<th>Anregung</th>
			<th style="border-right:2px solid;">Rating</th>
			<!-- Question 1 end-->
			<!-- Question 2 begin-->
			<th>Anregung</th>
			<th>Smart Farming</th>
			<th>Agrar</th>
			<th>Technik/Service</th>
			<th>eCommerce</th>
			<th>Personal</th>
			<th>Rückzugsmöglichkeiten für Kundengespräche</th>
			<th>Medieneinsatz (z.B. Videos und Filme</th>
			<th>Werbegeschenke</th>
			<th style="border-right:2px solid;">Bewirtung</th>
			<!-- Question 2 end-->
			<!-- Question 3 begin-->
			<th>…vor der Messe</th>
			<th style="border-right:2px solid;">…während der Messe</th>
			<!-- Question 3 end-->
			<!-- Question 4 begin -->
			<th>Anregung</th>
			<th>… war völlig ausreichend</th>
			<th style="border-right:2px solid;">… sollte ausführlicher sein</th>
			<!-- Question 4 end-->
			<!-- Question 5 begin -->
			<th>Anregung</th>
			<th>ja</th>
			<th style="border-right:2px solid;">nein</th>
			<!-- Question 5 end-->
			<!-- Question 6 begin -->
			<th style="border-right:2px solid;">Anregung</th>			
			<!-- Question 6 end-->
			<!-- Question 7 begin -->
			<th>Sonntag (Exklusivtag)</th>
			<th>Montag (Exklusivtag)</th>
			<th>Dienstag</th>
			<th>Mittwoch</th>
			<th>Donnerstag</th>
			<th>Freitag</th>
			<th style="border-right:2px solid;">Samstag</th>			
			<!-- Question 7 end-->
			<!-- Question 8 begin -->
			<th style="border-right:2px solid;">Bewertung</th>
			<!-- Question 8 end -->
			<!-- Question 9 begin -->
			<th>Anregung</th>
			<th style="border-right:2px solid;">Bewertung</th>
			<!-- Question 9 end -->
			<!-- Question 10 begin -->
			<th>Anzahl neuer Kundenkontakte</th>
			<th>Anzahl geführter Gespräche mit Bestandskunden</th>
			<th>Anzahl Gespräche mit konkret an Smart-Farming interessierten Besuchern</th>
			<th>Anzahl Kontakte potenzieller Mitarbeitern</th>
			<th style="border-right:2px solid;">Wo gab es Schwierigkeiten?</th>
			<!-- Question 10 end -->
			<!-- Question 10 begin -->			
			<th>Rating</th>
			<th>Was können/sollten wir zukünftig auch an unserem Stand umsetzen?</th>
			<!-- Question 10 end -->
		</tr>
	</thead>
	<tbody>
		
		{% for index,session in sessions %}
		
		<tr class="values">
			<!-- Question 1 begin-->
			<td>{{ messages[index][1]}}</td>
			<td style="border-right:2px solid;">{% if qanswers[index][101][1] is defined %}  {% set a1 = qanswers[index][101][1] %}{{a1.rating}}{% endif %}</td>
			<!-- Question 1 end-->
			<!-- Question 2 begin-->
			<td>{{ messages[index][2]}}</td>
			<td>{% if qanswers[index][102][1] is defined %}{% set a2 = qanswers[index][102][1] %}{{a2.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][102][2] is defined %}{% set a3 = qanswers[index][102][2] %}{{a3.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][102][3] is defined %}{% set a4 = qanswers[index][102][3] %}{{a4.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][102][4] is defined %}{% set a5 = qanswers[index][102][4] %}{{a5.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][102][5] is defined %}{% set a6 = qanswers[index][102][5] %}{{a6.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][102][6] is defined %}{% set a7 = qanswers[index][102][6] %}{{a7.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][102][7] is defined %}{% set a8 = qanswers[index][102][7] %}{{a8.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][102][8] is defined %}{% set a9 = qanswers[index][102][8] %}{{a9.rating}}{% else %}0{% endif %}</td>
			<td style="border-right:2px solid;">{% if qanswers[index][102][9] is defined %}{% set a10 = qanswers[index][102][9] %}{{a10.rating}}{% else %}0{% endif %}</td>
			<!-- Question 2 end-->
			<!-- Question 3 begin-->
			<td>{% if qanswers[index][103][1] is defined %}{% set a11 = qanswers[index][102][1] %}{{a11.rating}}{% else %}0{% endif %}</td>
			<td style="border-right:2px solid;">{% if qanswers[index][103][2] is defined %}{% set a12 = qanswers[index][103][2] %}{{a12.rating}}{% else %}0{% endif %}</td>						
			<!-- Question 3 end-->
			<!-- Question 4 begin-->
			<td>{{ messages[index][4]}}</td>
			<td>{% if qanswers[index][104][1] is defined %}1 {% else %}0{% endif %}</td>
			<td style="border-right:2px solid;">{% if qanswers[index][104][2] is defined %}1 {% else %}0{% endif %}</td>												
			<!-- Question 4 end-->
			<!-- Question 5 begin-->
			<td>
				{{ messages[index][5]}}
			</td>
			<td>{% if qanswers[index][105][1] is defined %}{% set a13 = qanswers[index][105][1] %}{{a13.checked}} {% else %}0{% endif %}</td>
			<td style="border-right:2px solid;">{% if qanswers[index][105][2] is defined %}{% set a14 = qanswers[index][105][2] %}{{a14.checked}} {% else %}0{% endif %}</td>												
			<!-- Question 5 end-->															
			<!-- Question 6 begin-->
			<td>
				{{ messages[index][6]}}
			</td>
			<!-- Question 6 end-->
			<!-- Question 7 begin -->
			<td>{% if qanswers[index][107][1] is defined %}{% set a15 = qanswers[index][107][1] %}{{a15.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][107][2] is defined %}{% set a16 = qanswers[index][107][2] %}{{a16.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][107][3] is defined %}{% set a17 = qanswers[index][107][3] %}{{a17.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][107][4] is defined %}{% set a18 = qanswers[index][107][4] %}{{a18.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][107][5] is defined %}{% set a19 = qanswers[index][107][5] %}{{a19.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][107][6] is defined %}{% set a20 = qanswers[index][107][6] %}{{a20.rating}}{% else %}0{% endif %}</td>
			<td style="border-right:2px solid;">{% if qanswers[index][107][7] is defined %}{% set a21 = qanswers[index][107][7] %}{{a21.rating}}{% else %}0{% endif %}</td>
			<!-- Question 7 end -->
			<!-- Question 8 begin -->
			<td style="border-right:2px solid;">{% if qanswers[index][108][1] is defined %}{% set a22 = qanswers[index][108][1] %}{{a22.rating}}{% else %}0{% endif %}</td>
			<!-- Question 8 end -->
			<!-- Question 9 begin -->
			<td>
				{{ messages[index][9]}}
			</td>
			<td style="border-right:2px solid;">{% if qanswers[index][109][1] is defined %}{% set a23 = qanswers[index][109][1] %}{{a23.rating}}{% else %}0{% endif %}</td>
			<!-- Question 9 end -->
			<!-- Question 10 begin -->			
			<td>{% if qanswers[index][110]['other'][0] is defined %}{% set a24 = qanswers[index][110]['other'][0] %}{{a24.message}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][110]['other'][1] is defined %}{% set a25 = qanswers[index][110]['other'][1] %}{{a24.message}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][110]['other'][2] is defined %}{% set a26 = qanswers[index][110]['other'][2] %}{{a26.message}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][110]['other'][3] is defined %}{% set a27 = qanswers[index][110]['other'][3] %}{{a27.message}}{% else %}0{% endif %}</td>
			<td style="border-right:2px solid;">
				{{ messages[index][10]}}
			</td>
			<!-- Question 10 end -->
			<!-- Question 11 begin -->			
			
			<td>{% if qanswers[index][111][1] is defined %}{% set a28 = qanswers[index][111][1] %}{{a28.rating}}{% else %}0{% endif %}</td>
			<td>
				{{ messages[index][11]}}
			</td>
			<!-- Question 10 end -->
			
		</tr>
		{% endfor %}
		<tr id="averageRow" style="border-top:2px solid">					
		</tr>
	</tbody>
	
</table>
{% else %}
<table id="report">
	<thead>		
		<tr>
			<th style="border-right:2px solid;"></th>
			<th colspan="8" style="border-right:2px solid;">
				1. Aus welchem Grund sind Sie heute hier?
			</th>
			<th colspan="11" style="border-right:2px solid;">
				2. Wie sind Sie auf diese Veranstaltung aufmerksam geworden?
			</th>
			<th colspan="3" style="border-right:2px solid;">
				3. Wie bewerten Sie folgende Bereiche am BayWa Stand?
			</th>
			<th style="border-right:2px solid;">
				4. Wie bewerten Sie den BayWa Stand allgemein?
			</th>
			<th style="border-right:2px solid;">
				5. Welche Anregungen/Kritik/Lob oder Verbesserungsvorschläge haben Sie?
			</th>
			<th colspan="7" style="border-right:2px solid;">
				6. Wie alt sind Sie?
			</th>
			<th colspan="11" style="border-right:2px solid;">
				7. Welcher der folgenden Gruppen ordnen Sie sich zu?
			</th>
			<th colspan="12">
				8.Woher kommen Sie? Falls Sie aus Deutschland kommen, nennen Sie uns bitte die 1. Stelle Ihrer PLZ.
			</th>			
		</tr>
		<tr>
			<th style="border-right:2px solid;">Datum</th>
			<!-- Question 1 begin-->
			<th>Informationsbesuch</th>
			<th>Ausflug</th>
			<th>Kontakte knüpfen</th>
			<th>Geschäfte abschließen</th>
			<th>Bekannte treffen</th>
			<th>Arbeit</th>
			<th>Studium/Schule</th>			
			<th style="border-right:2px solid;">Sonstiges</th>
			<!-- Question 1 end-->
			<!-- Question 2 begin-->
			<th>BayWa Agri-Check App</th>
			<th>Internet</th>
			<th>BayWa Newsletter</th>
			<th>Anzeige in einer Zeitung</th>
			<th>Bekannte</th>
			<th>Arbeit</th>
			<th>Studium/Schule</th>
			<th>Persönliche Einladung</th>
			<th>Bekanntheit der Messe</th>
			<th>Flyer/Aushang im BayWa Betrieb</th>
			<th style="border-right:2px solid;">Sonstiges</th>
			<!-- Question 2 end-->
			<!-- Question 3 begin-->
			<th>Qualität/Verfügbarkeit von Informationsmaterial</th>
			<th>Qualität der persönlichen Beratung</th>
			<th style="border-right:2px solid;">Verfügbarkeit eines Beraters</th>
			<!-- Question 3 end-->
			<!-- Question 4 begin -->
			<th style="border-right:2px solid;">Rating</th>						
			<!-- Question 4 end-->
			<!-- Question 5 begin -->
			<th style="border-right:2px solid;">Anregung</th>
			<!-- Question 5 end-->
			<!-- Question 6 begin -->
			<th>Unter 18</th>
			<th>18 bis 29</th>
			<th>30 bis 39</th>
			<th>40 bis 49</th>
			<th>50 bis 59</th>
			<th>60 und älter</th>
			<th style="border-right:2px solid;">keine Angabe</th>			
			
			<!-- Question 6 end-->
			<!-- Question 7 begin -->
			<th>Landwirt</th>
			<th>Tierproduktion</th>
			<th>Pflanzenproduktion</th>
			<th>Energieerzeuger</th>
			<th>Sonstiges 1</th>
			<th>Schüler/Student</th>
			<th>Lohnunternehmer</th>
			<th>Mitarbeiter eines Kommunalbetriebs</th>
			<th>Lieferant</th>
			<th>Beschäftigter der vor- bzw. nachgelagerten Branche</th>
			<th style="border-right:2px solid;">Sonstiges 2</th>		
			<!-- Question 7 end-->
			<!-- Question 8 begin -->
			<th>0</th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			<th>9</th>
			<th>europäisches Ausland</th>
			<th>außerhalb Europas</th>
			<!-- Question 8 end -->			
		</tr>
	</thead>
	<tbody>
		
		{% for index,session in sessions %}
		
		<tr class="values">
			<td style="border-right:2px solid;">{{date('d.m.Y H:i',session)}}</td>
			<!-- Question 1 begin-->
			<td>{% if qanswers[index][1][1] is defined %}{% set b1 = qanswers[index][1][1] %}{{b1.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][1][2] is defined %}{% set b2 = qanswers[index][1][2] %}{{b2.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][1][3] is defined %}{% set b3 = qanswers[index][1][3] %}{{b3.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][1][4] is defined %}{% set b4 = qanswers[index][1][4] %}{{b4.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][1][5] is defined %}{% set b5 = qanswers[index][1][5] %}{{b5.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][1][6] is defined %}{% set b6 = qanswers[index][1][6] %}{{b6.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][1][7] is defined %}{% set b7 = qanswers[index][1][7] %}{{b7.checked}}{% else %}0{% endif %}</td>
			<td style="border-right:2px solid;">{% if qanswers[index][1]['other'][0] is defined %}{% set b8 = qanswers[index][1]['other'][0] %}{{b8.message}}{% endif %}</td>
			<!-- Question 1 end-->
			<!-- Question 2 begin-->
			
			<td>{% if qanswers[index][2][1] is defined %}{% set b9 = qanswers[index][2][1] %}{{b9.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][2][2] is defined %}{% set b10 = qanswers[index][2][2] %}{{b10.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][2][3] is defined %}{% set b11 = qanswers[index][2][3] %}{{b11.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][2][4] is defined %}{% set b12 = qanswers[index][2][4] %}{{b12.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][2][5] is defined %}{% set b13 = qanswers[index][2][5] %}{{b13.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][2][6] is defined %}{% set b14 = qanswers[index][2][6] %}{{b14.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][2][7] is defined %}{% set b15 = qanswers[index][2][7] %}{{b15.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][2][8] is defined %}{% set b16 = qanswers[index][2][8] %}{{b16.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][2][9] is defined %}{% set b17 = qanswers[index][2][9] %}{{b17.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][2][10] is defined %}{% set b18 = qanswers[index][2][10] %}{{b18.checked}}{% else %}0{% endif %}</td>
			<td style="border-right:2px solid;">{% if qanswers[index][2]['other'][0] is defined %}{% set b19 = qanswers[index][2]['other'][0] %}{{b19.message}}{% endif %}</td>
			<!-- Question 2 end-->
			<!-- Question 3 begin-->
			<td>{% if qanswers[index][3][1] is defined %}{% set b20 = qanswers[index][3][1] %}{{b20.rating}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][3][2] is defined %}{% set b21 = qanswers[index][3][2] %}{{b21.rating}}{% else %}0{% endif %}</td>
			<td style="border-right:2px solid;">{% if qanswers[index][3][3] is defined %}{% set b22 = qanswers[index][3][2] %}{{b22.rating}}{% else %}0{% endif %}</td>
			
			<!-- Question 3 end-->
			<!-- Question 4 begin-->
			<td style="border-right:2px solid;">{% if qanswers[index][4][1] is defined %}{% set b23 = qanswers[index][4][1] %}{{b23.rating}}{% else %}0{% endif %}</td>
			<!-- Question 4 end-->
			<!-- Question 5 begin-->
			<td style="border-right:2px solid;">
				{{ messages[index][5]}}
			</td>
			
			<!-- Question 5 end-->															
			<!-- Question 6 begin-->
			<td>{% if qanswers[index][6][1] is defined %}1 {% else %}0{% endif %}</td>
			<td>{% if qanswers[index][6][2] is defined %}1 {% else %}0{% endif %}</td>
			<td>{% if qanswers[index][6][3] is defined %}1 {% else %}0{% endif %}</td>
			<td>{% if qanswers[index][6][4] is defined %}1 {% else %}0{% endif %}</td>
			<td>{% if qanswers[index][6][5] is defined %}1 {% else %}0{% endif %}</td>
			<td>{% if qanswers[index][6][6] is defined %}1 {% else %}0{% endif %}</td>
			<td style="border-right:2px solid;">{% if qanswers[index][6][7] is defined %}1 {% else %}0{% endif %}</td>
			<!-- Question 6 end-->
			<!-- Question 7 begin -->
			<td>{% if qanswers[index][7][1] is defined %}{% set b24 = qanswers[index][7][1] %}{{b24.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][7][2] is defined %}{% set b25 = qanswers[index][7][2] %}{{b25.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][7][3] is defined %}{% set b26 = qanswers[index][7][3] %}{{b26.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][7][4] is defined %}{% set b27 = qanswers[index][7][4] %}{{b27.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][7]['other'][0] is defined %}{% set b28 = qanswers[index][7]['other'][0] %}{{b28.message}}{% endif %}</td>
			<td>{% if qanswers[index][7][5] is defined %}{% set b29 = qanswers[index][7][5] %}{{b29.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][7][6] is defined %}{% set b30 = qanswers[index][7][6] %}{{b30.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][7][7] is defined %}{% set b31 = qanswers[index][7][7] %}{{b31.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][7][8] is defined %}{% set b32 = qanswers[index][7][8] %}{{b32.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][7][9] is defined %}{% set b33 = qanswers[index][7][9] %}{{b33.checked}}{% else %}0{% endif %}</td>			
			<td style="border-right:2px solid;">{% if qanswers[index][7]['other'][1] is defined %}{% set b34 = qanswers[index][7]['other'][1] %}{{b34.message}}{% endif %}</td>
			<!-- Question 7 end -->
			<!-- Question 8 begin -->
			<td>{% if qanswers[index][8][0] is defined %}{% set b35 = qanswers[index][8][0] %}{{b35.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][8][1] is defined %}{% set b36 = qanswers[index][8][1] %}{{b36.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][8][2] is defined %}{% set b37 = qanswers[index][8][2] %}{{b37.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][8][3] is defined %}{% set b38 = qanswers[index][8][3] %}{{b38.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][8][4] is defined %}{% set b39 = qanswers[index][8][4] %}{{b39.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][8][5] is defined %}{% set b40 = qanswers[index][8][5] %}{{b40.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][8][6] is defined %}{% set b41 = qanswers[index][8][6] %}{{b41.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][8][7] is defined %}{% set b42 = qanswers[index][8][7] %}{{b42.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][8][8] is defined %}{% set b43 = qanswers[index][8][8] %}{{b43.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][8][9] is defined %}{% set b44 = qanswers[index][8][9] %}{{b44.checked}}{% else %}0{% endif %}</td>
			<td>{% if qanswers[index][8][10] is defined %}{% set b45 = qanswers[index][8][10] %}{{b45.checked}}{% else %}0{% endif %}</td>			
			<td style="border-right:2px solid;">{% if qanswers[index][8][11] is defined %}{% set b46 = qanswers[index][8][11] %}{{b46.checked}}{% else %}0{% endif %}</td>			
			<!-- Question 8 end -->
			
			
		</tr>
		
		{% endfor %}
		<tr id="averageRow" style="border-top:2px solid">					
		</tr>
	</tbody>
	
</table>

{%- endif -%}	
{%- endif -%}

</div>
	