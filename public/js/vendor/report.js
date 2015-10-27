function pluginInit(){	
	window.clearInterval(timerInterval);
	var rowCountRawArray;
	var rowCountAverageArray;
	var rowCount=0;
	if(jQuery('#report').hasClass('mitarbeiter')){
		rowCountRawArray=[19,20];
		rowCountAverageArray=[2,4,5,6,7,8,9,10,11,12,13,14,16,17,22,23,24,25,26,27,28,29,31,32,33,34,35,37];
		rowCount=38;
	}else{
		rowCountRawArray=[2,3,4,5,6,7,8,10,11,12,13,14,15,16,17,18,19,26,27,28,29,30,31,32,33,34,35,36,38,39,40,41,42,44,45,46,47,48,49,50,51,52,53,54,55];
		rowCountAverageArray=[21,22,23,24];
		rowCount=55;
	}
	
	
	
	var averageRow= document.getElementById('averageRow');
    for(var i=0;i<rowCount;i++){
		 var newCell=averageRow.insertCell(0);
		 //newCell.innerHTML=rowCount-i;
	 }
	jQuery('#averageRow td:nth-of-type(1)').html('Durchschnitt bzw. Anzahl');
	
	for(var j=0;j<rowCountRawArray.length;j++){
		var sum = 0;	
		var cells = document.querySelectorAll("#report tr.values td:nth-of-type("+rowCountRawArray[j]+")");
		for (var i = 0; i < cells.length; i++){
			 sum+=parseFloat(cells[i].firstChild.data);
		}
		jQuery('#averageRow td:nth-of-type('+rowCountRawArray[j]+')').html(sum);
	}
	
	for(var j=0;j<rowCountAverageArray.length;j++){
		var sum = 0;	
		var counter=0;
		var cells = document.querySelectorAll("#report tr.values td:nth-of-type("+rowCountAverageArray[j]+")");
		for (var i = 0; i < cells.length; i++){
			var value=parseFloat(cells[i].firstChild.data);
			 sum+=value;
			 if(value!==0){
				 counter++;
			 }
			 
		}
		var ave=Math.round((sum/counter)*100)/100;
		jQuery('#averageRow td:nth-of-type('+rowCountAverageArray[j]+')').html(ave);
	}
	
	
	
	
	
	
	
}