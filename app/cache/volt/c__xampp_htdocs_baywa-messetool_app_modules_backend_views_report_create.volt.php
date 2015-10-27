	<?php echo $this->getContent(); ?>
	
<div><?php if ($this->session->get('auth')) { ?><h3>Teilnehmer gesamt: <?php echo $total; ?></h3><?php if ($mitarbeiterbefragung) { ?><table id="report" class="mitarbeiter">
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
		
		<?php foreach ($sessions as $index => $session) { ?>
		
		<tr class="values">
			<!-- Question 1 begin-->
			<td><?php echo $messages[$index][1]; ?></td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][101][1])) { ?>  <?php $a1 = $qanswers[$index][101][1]; ?><?php echo $a1->rating; ?><?php } ?></td>
			<!-- Question 1 end-->
			<!-- Question 2 begin-->
			<td><?php echo $messages[$index][2]; ?></td>
			<td><?php if (isset($qanswers[$index][102][1])) { ?><?php $a2 = $qanswers[$index][102][1]; ?><?php echo $a2->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][102][2])) { ?><?php $a3 = $qanswers[$index][102][2]; ?><?php echo $a3->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][102][3])) { ?><?php $a4 = $qanswers[$index][102][3]; ?><?php echo $a4->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][102][4])) { ?><?php $a5 = $qanswers[$index][102][4]; ?><?php echo $a5->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][102][5])) { ?><?php $a6 = $qanswers[$index][102][5]; ?><?php echo $a6->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][102][6])) { ?><?php $a7 = $qanswers[$index][102][6]; ?><?php echo $a7->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][102][7])) { ?><?php $a8 = $qanswers[$index][102][7]; ?><?php echo $a8->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][102][8])) { ?><?php $a9 = $qanswers[$index][102][8]; ?><?php echo $a9->rating; ?><?php } else { ?>0<?php } ?></td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][102][9])) { ?><?php $a10 = $qanswers[$index][102][9]; ?><?php echo $a10->rating; ?><?php } else { ?>0<?php } ?></td>
			<!-- Question 2 end-->
			<!-- Question 3 begin-->
			<td><?php if (isset($qanswers[$index][103][1])) { ?><?php $a11 = $qanswers[$index][102][1]; ?><?php echo $a11->rating; ?><?php } else { ?>0<?php } ?></td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][103][2])) { ?><?php $a12 = $qanswers[$index][103][2]; ?><?php echo $a12->rating; ?><?php } else { ?>0<?php } ?></td>						
			<!-- Question 3 end-->
			<!-- Question 4 begin-->
			<td><?php echo $messages[$index][4]; ?></td>
			<td><?php if (isset($qanswers[$index][104][1])) { ?>1 <?php } else { ?>0<?php } ?></td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][104][2])) { ?>1 <?php } else { ?>0<?php } ?></td>												
			<!-- Question 4 end-->
			<!-- Question 5 begin-->
			<td>
				<?php echo $messages[$index][5]; ?>
			</td>
			<td><?php if (isset($qanswers[$index][105][1])) { ?><?php $a13 = $qanswers[$index][105][1]; ?><?php echo $a13->checked; ?> <?php } else { ?>0<?php } ?></td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][105][2])) { ?><?php $a14 = $qanswers[$index][105][2]; ?><?php echo $a14->checked; ?> <?php } else { ?>0<?php } ?></td>												
			<!-- Question 5 end-->															
			<!-- Question 6 begin-->
			<td>
				<?php echo $messages[$index][6]; ?>
			</td>
			<!-- Question 6 end-->
			<!-- Question 7 begin -->
			<td><?php if (isset($qanswers[$index][107][1])) { ?><?php $a15 = $qanswers[$index][107][1]; ?><?php echo $a15->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][107][2])) { ?><?php $a16 = $qanswers[$index][107][2]; ?><?php echo $a16->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][107][3])) { ?><?php $a17 = $qanswers[$index][107][3]; ?><?php echo $a17->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][107][4])) { ?><?php $a18 = $qanswers[$index][107][4]; ?><?php echo $a18->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][107][5])) { ?><?php $a19 = $qanswers[$index][107][5]; ?><?php echo $a19->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][107][6])) { ?><?php $a20 = $qanswers[$index][107][6]; ?><?php echo $a20->rating; ?><?php } else { ?>0<?php } ?></td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][107][7])) { ?><?php $a21 = $qanswers[$index][107][7]; ?><?php echo $a21->rating; ?><?php } else { ?>0<?php } ?></td>
			<!-- Question 7 end -->
			<!-- Question 8 begin -->
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][108][1])) { ?><?php $a22 = $qanswers[$index][108][1]; ?><?php echo $a22->rating; ?><?php } else { ?>0<?php } ?></td>
			<!-- Question 8 end -->
			<!-- Question 9 begin -->
			<td>
				<?php echo $messages[$index][9]; ?>
			</td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][109][1])) { ?><?php $a23 = $qanswers[$index][109][1]; ?><?php echo $a23->rating; ?><?php } else { ?>0<?php } ?></td>
			<!-- Question 9 end -->
			<!-- Question 10 begin -->			
			<td><?php if (isset($qanswers[$index][110]['other'][0])) { ?><?php $a24 = $qanswers[$index][110]['other'][0]; ?><?php echo $a24->message; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][110]['other'][1])) { ?><?php $a25 = $qanswers[$index][110]['other'][1]; ?><?php echo $a24->message; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][110]['other'][2])) { ?><?php $a26 = $qanswers[$index][110]['other'][2]; ?><?php echo $a26->message; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][110]['other'][3])) { ?><?php $a27 = $qanswers[$index][110]['other'][3]; ?><?php echo $a27->message; ?><?php } else { ?>0<?php } ?></td>
			<td style="border-right:2px solid;">
				<?php echo $messages[$index][10]; ?>
			</td>
			<!-- Question 10 end -->
			<!-- Question 11 begin -->			
			
			<td><?php if (isset($qanswers[$index][111][1])) { ?><?php $a28 = $qanswers[$index][111][1]; ?><?php echo $a28->rating; ?><?php } else { ?>0<?php } ?></td>
			<td>
				<?php echo $messages[$index][11]; ?>
			</td>
			<!-- Question 10 end -->
			
		</tr>
		<?php } ?>
		<tr id="averageRow" style="border-top:2px solid">					
		</tr>
	</tbody>
	
</table>
<?php } else { ?>
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
		
		<?php foreach ($sessions as $index => $session) { ?>
		
		<tr class="values">
			<td style="border-right:2px solid;"><?php echo date('d.m.Y H:i', $session); ?></td>
			<!-- Question 1 begin-->
			<td><?php if (isset($qanswers[$index][1][1])) { ?><?php $b1 = $qanswers[$index][1][1]; ?><?php echo $b1->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][1][2])) { ?><?php $b2 = $qanswers[$index][1][2]; ?><?php echo $b2->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][1][3])) { ?><?php $b3 = $qanswers[$index][1][3]; ?><?php echo $b3->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][1][4])) { ?><?php $b4 = $qanswers[$index][1][4]; ?><?php echo $b4->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][1][5])) { ?><?php $b5 = $qanswers[$index][1][5]; ?><?php echo $b5->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][1][6])) { ?><?php $b6 = $qanswers[$index][1][6]; ?><?php echo $b6->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][1][7])) { ?><?php $b7 = $qanswers[$index][1][7]; ?><?php echo $b7->checked; ?><?php } else { ?>0<?php } ?></td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][1]['other'][0])) { ?><?php $b8 = $qanswers[$index][1]['other'][0]; ?><?php echo $b8->message; ?><?php } ?></td>
			<!-- Question 1 end-->
			<!-- Question 2 begin-->
			
			<td><?php if (isset($qanswers[$index][2][1])) { ?><?php $b9 = $qanswers[$index][2][1]; ?><?php echo $b9->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][2][2])) { ?><?php $b10 = $qanswers[$index][2][2]; ?><?php echo $b10->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][2][3])) { ?><?php $b11 = $qanswers[$index][2][3]; ?><?php echo $b11->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][2][4])) { ?><?php $b12 = $qanswers[$index][2][4]; ?><?php echo $b12->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][2][5])) { ?><?php $b13 = $qanswers[$index][2][5]; ?><?php echo $b13->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][2][6])) { ?><?php $b14 = $qanswers[$index][2][6]; ?><?php echo $b14->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][2][7])) { ?><?php $b15 = $qanswers[$index][2][7]; ?><?php echo $b15->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][2][8])) { ?><?php $b16 = $qanswers[$index][2][8]; ?><?php echo $b16->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][2][9])) { ?><?php $b17 = $qanswers[$index][2][9]; ?><?php echo $b17->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][2][10])) { ?><?php $b18 = $qanswers[$index][2][10]; ?><?php echo $b18->checked; ?><?php } else { ?>0<?php } ?></td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][2]['other'][0])) { ?><?php $b19 = $qanswers[$index][2]['other'][0]; ?><?php echo $b19->message; ?><?php } ?></td>
			<!-- Question 2 end-->
			<!-- Question 3 begin-->
			<td><?php if (isset($qanswers[$index][3][1])) { ?><?php $b20 = $qanswers[$index][3][1]; ?><?php echo $b20->rating; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][3][2])) { ?><?php $b21 = $qanswers[$index][3][2]; ?><?php echo $b21->rating; ?><?php } else { ?>0<?php } ?></td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][3][3])) { ?><?php $b22 = $qanswers[$index][3][2]; ?><?php echo $b22->rating; ?><?php } else { ?>0<?php } ?></td>
			
			<!-- Question 3 end-->
			<!-- Question 4 begin-->
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][4][1])) { ?><?php $b23 = $qanswers[$index][4][1]; ?><?php echo $b23->rating; ?><?php } else { ?>0<?php } ?></td>
			<!-- Question 4 end-->
			<!-- Question 5 begin-->
			<td style="border-right:2px solid;">
				<?php echo $messages[$index][5]; ?>
			</td>
			
			<!-- Question 5 end-->															
			<!-- Question 6 begin-->
			<td><?php if (isset($qanswers[$index][6][1])) { ?>1 <?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][6][2])) { ?>1 <?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][6][3])) { ?>1 <?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][6][4])) { ?>1 <?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][6][5])) { ?>1 <?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][6][6])) { ?>1 <?php } else { ?>0<?php } ?></td>
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][6][7])) { ?>1 <?php } else { ?>0<?php } ?></td>
			<!-- Question 6 end-->
			<!-- Question 7 begin -->
			<td><?php if (isset($qanswers[$index][7][1])) { ?><?php $b24 = $qanswers[$index][7][1]; ?><?php echo $b24->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][7][2])) { ?><?php $b25 = $qanswers[$index][7][2]; ?><?php echo $b25->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][7][3])) { ?><?php $b26 = $qanswers[$index][7][3]; ?><?php echo $b26->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][7][4])) { ?><?php $b27 = $qanswers[$index][7][4]; ?><?php echo $b27->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][7]['other'][0])) { ?><?php $b28 = $qanswers[$index][7]['other'][0]; ?><?php echo $b28->message; ?><?php } ?></td>
			<td><?php if (isset($qanswers[$index][7][5])) { ?><?php $b29 = $qanswers[$index][7][5]; ?><?php echo $b29->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][7][6])) { ?><?php $b30 = $qanswers[$index][7][6]; ?><?php echo $b30->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][7][7])) { ?><?php $b31 = $qanswers[$index][7][7]; ?><?php echo $b31->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][7][8])) { ?><?php $b32 = $qanswers[$index][7][8]; ?><?php echo $b32->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][7][9])) { ?><?php $b33 = $qanswers[$index][7][9]; ?><?php echo $b33->checked; ?><?php } else { ?>0<?php } ?></td>			
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][7]['other'][1])) { ?><?php $b34 = $qanswers[$index][7]['other'][1]; ?><?php echo $b34->message; ?><?php } ?></td>
			<!-- Question 7 end -->
			<!-- Question 8 begin -->
			<td><?php if (isset($qanswers[$index][8][0])) { ?><?php $b35 = $qanswers[$index][8][0]; ?><?php echo $b35->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][8][1])) { ?><?php $b36 = $qanswers[$index][8][1]; ?><?php echo $b36->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][8][2])) { ?><?php $b37 = $qanswers[$index][8][2]; ?><?php echo $b37->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][8][3])) { ?><?php $b38 = $qanswers[$index][8][3]; ?><?php echo $b38->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][8][4])) { ?><?php $b39 = $qanswers[$index][8][4]; ?><?php echo $b39->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][8][5])) { ?><?php $b40 = $qanswers[$index][8][5]; ?><?php echo $b40->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][8][6])) { ?><?php $b41 = $qanswers[$index][8][6]; ?><?php echo $b41->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][8][7])) { ?><?php $b42 = $qanswers[$index][8][7]; ?><?php echo $b42->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][8][8])) { ?><?php $b43 = $qanswers[$index][8][8]; ?><?php echo $b43->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][8][9])) { ?><?php $b44 = $qanswers[$index][8][9]; ?><?php echo $b44->checked; ?><?php } else { ?>0<?php } ?></td>
			<td><?php if (isset($qanswers[$index][8][10])) { ?><?php $b45 = $qanswers[$index][8][10]; ?><?php echo $b45->checked; ?><?php } else { ?>0<?php } ?></td>			
			<td style="border-right:2px solid;"><?php if (isset($qanswers[$index][8][11])) { ?><?php $b46 = $qanswers[$index][8][11]; ?><?php echo $b46->checked; ?><?php } else { ?>0<?php } ?></td>			
			<!-- Question 8 end -->
			
			
		</tr>
		
		<?php } ?>
		<tr id="averageRow" style="border-top:2px solid">					
		</tr>
	</tbody>
	
</table><?php } ?><?php } ?></div>
	