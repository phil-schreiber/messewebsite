var viewportW = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
var viewportH = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
var baseurl;
var module='';
var runAnim=true;
var time=0;
function init(jQuery){
	
	window.setInterval(function(){		
		
		if(time==300){
			window.location.href='http://baywa-messetool.iq-pi.org/';
		}else{
			time++;
		}
		
	},1000);
	
	(function ($, smsTexte, undefined) {
		smsTexte.berater = function(uid,name){
			this.uid = uid;
			this.name = name;
		};
		
		smsTexte.kunde = function(firstname,lastname,phone){
			this.firstname = firstname;
			this.lastname = lastname;
			this.phone = phone;
		};
		
		var selectBox=jQuery('#smsTextsSelect');
		var marker=function(berater,kunde){
			this.replaceObj={
				"#Berater#" :berater.name,
				"#KundeVorname#":kunde.firstname,
				"#KundeNachname#":kunde.lastname,
				"#TelefonnummerKunde#":kunde.phone
			};
		};
		var texte={
			0:"Hallo #Berater#, viele Grüße von der agritechnica sendet #KundeVorname# #KundeNachname#.",
			1:"Hallo #Berater#, ich stehe gerade auf dem BayWa Stand auf der agritechnica. Sind Sie/bist Du heute auch hier anzutreffen? Über einen kurzen Rückruf unter #TelefonnummerKunde# freut sich #KundeVorname# #KundeNachname#.",
			2:"Hallo #Berater#, ich stehe gerade auf dem BayWa Stand auf der agritechnica. Sind Sie/bist Du heute oder morgen auch hier anzutreffen? Über einen kurzen Rückruf unter #TelefonnummerKunde# freut sich #KundeVorname# #KundeNachname#.",
			3:"Hallo #Berater#, ich stehe gerade auf dem BayWa Stand auf der agritechnica. Bitte melden Sie sich/melde Dich doch zeitnah nach der agritechnica bezüglich eines Termins bei mir. Über einen kurzen Rückruf unter #TelefonnummerKunde# freut sich #KundeVorname# #KundeNachname#."			
		};
		
		var insertSelectbox = function(labels) {
			jQuery(selectBox).empty();
			for(var label in labels){				
				var entry = document.createElement('li');
				entry.appendChild(document.createTextNode(labels[label]));
				jQuery(selectBox).append(entry);
			}
		};
					
		smsTexte.create=function(){	
		};
		
		smsTexte.createBox = function(berater,kunde) {
			var finalTexts=[];
			var strings=new marker(berater,kunde);
			
			for(var text in texte){			
				var finalStrng=texte[text];
				for(var key in strings.replaceObj) {										
					finalStrng=finalStrng.replace(key,strings.replaceObj[key]);					
				}
				finalTexts.push(finalStrng);
			}
			insertSelectbox(finalTexts);
		};
		
	  }(jQuery, window.smsTexte = window.smsTexte || {}));
	  
	  
	  
   var virtualKeyboard;
	var goToContact=function(chosenRep){
		
			
			jQuery('html, body').animate({
				scrollTop:jQuery('#contact').offset().top
			},'slow');				
			
			jQuery('#consultantSelect option').each(function(index,element){
				jQuery(element).removeAttr('selected');				
				if(jQuery(element).val()==chosenRep){
					jQuery(element).attr('selected','selected');
					jQuery('.choice').html(jQuery(element).html());
				}
			});
			
	};
	
	
	jQuery('#consultantSelect').change(function(e){				
		jQuery('.choice').html(jQuery('#consultantSelect option:selected').text());
	});
	jQuery('#smsTextsSelect').on('click','li',function(e){
		console.log(jQuery(this));
		jQuery('#smsTexts').html(jQuery(this).text());
		
	});
	/*var initAutocomplete=function(){
		jQuery('#searchName').devbridgeAutocomplete({
				serviceUrl: 'search/index/name/',
				type:'POST',
				minChars:3,
				noCache:true,
				deferRequestBy:10,
				appendTo:"#searchResults",				
				onSelect: function (suggestion) {
					goToContact(suggestion.data);
				}
			});
		
		jQuery('#searchCity').devbridgeAutocomplete({
					serviceUrl: 'search/index/city/',
					type:'POST',
					minChars:3,
					noCache:true,
					deferRequestBy:10,
					onSearchStart:function(){
						jQuery('#searchZip').val('');
						
					},
					onSelect: function (suggestion) {
				
						jQuery('#searchZip').val(suggestion.data);
						 jQuery('#searchZip').keyup();
					}
		});
		jQuery('#searchZip').devbridgeAutocomplete({
					serviceUrl: 'search/index/zip/',
					noCache:true,
					type:'POST',					
					deferRequestBy:10,
					appendTo:"#searchResults",		
					onSelect: function (suggestion) {
						
						goToContact(suggestion.data);
					}
		});
	};*/
	
	jQuery(function () {
		if(typeof(jsKeyboard)==='undefined'){
			window.setTimeout(
					function(){		
					virtualKeyboard=jQuery('#virtualKeyboardWrapper');										
					jsKeyboard.init("virtualKeyboardWrapper");
		 
			},
			1000);
		}else{
			virtualKeyboard=jQuery('#virtualKeyboardWrapper');										
			jsKeyboard.init("virtualKeyboardWrapper");
		 
		}
		/*if(typeof(devbridgeAutocomplete)==='undefined'){
			window.setTimeout(
				function(){
					initAutocomplete();					
				},1000);
		}else{
			initAutocomplete();
		}*/
         
         
     });
	
	jQuery('body').on('click',function(e){
		time=0;
	});
	jQuery('a.pt-trigger').click(function(e){
		e.preventDefault();
	});
	baseurl=document.getElementById('baseurl').value;	
	module=document.getElementById('module') ? document.getElementById('module').value :'';
	jQuery('body').append('<div id="loadingimg"><h3>Einen Moment bitte</h3><div><img src="'+baseurl+'public/images/ajax-loader.gif"></div></<div>');
	/*jQuery('a[href^=#]').on('click', function(e){
		e.preventDefault();
		var href = jQuery(this).attr('href');		
		jQuery('html, body').animate({
			scrollTop:jQuery(href).offset().top
		},'slow');				
	});*/
	
	var removeTouchAnim=function(){
		runAnim=false;
		jQuery('#startImgWrap').removeClass('cbutton--effect-jagoda');		
		jQuery('#startTableWrap').removeClass('cbutton--effect-jagoda2');				
		jQuery("#touchIcon").addClass('hidden');
	};
	
	var addTouchAnim=function(){
		jQuery("#touchIcon").removeClass('hidden');
		runAnim=true;
		jQuery('#startImgWrap').addClass('cbutton--effect-jagoda');		
		jQuery('#startTableWrap').addClass('cbutton--effect-jagoda2');				
		animate_loop("-=100",0);
	};
	
	var i = 0;
	var animate_loop=function(dirChanger,delay){			
            jQuery('#touchIcon').animate({top:dirChanger
            }, 1500, function(){
					if(runAnim){
					if(dirChanger=="-=100"){
						dirChanger="+=100";						
						animate_loop(dirChanger,1000);
					}else if(dirChanger=="+=100"){
						dirChanger="-=100";					
						animate_loop(dirChanger,0);
						
					}
					}
            }).delay(delay);
    };
    animate_loop("-=100",0);
	
	
	
	
	
	jQuery('a[href^=#].navButton,a[href^=#].navLink').on('click', function(e){
			e.preventDefault();			
			var href = jQuery(this).attr('href');		
			jQuery('html, body').animate({
				scrollTop:jQuery(href).offset().top
			},'slow');				
			
		});
	
	
	
	var addFlipEvents=function(){
		jQuery('.flipper a[href^=#]').on('click', function(e){
			e.preventDefault();			
			var href = jQuery(this).attr('href');		
			jQuery('html, body').animate({
				scrollTop:jQuery(href).offset().top
			},'slow');				
			
		});
	};
	
	
	var addStartImgEvents=function(){
		jQuery("#startImgWrap").on("click",function(e){				
			jQuery(this).off('click');
			addFlipEvents();
			removeTouchAnim();
			
			jQuery('#startImgWrap').animate({
				left:"-=60",
				top:"-=60"
			});
			jQuery('.flip-container').animate({
				margin:"+=30"
			},500,function(){
				jQuery('.flip-container').addClass('hover');
			});
			
		});
	};			
	
	addStartImgEvents();
	
	
	jQuery('.list-group-item').on('click',function(e){						
			e.preventDefault();
			jQuery('.pt-page').removeClass('pt-page-current');
			jQuery('#formPage').addClass('pt-page-current');
			PageTransitions.init();
			var chosenRep=jQuery(this).find('input').val();
			goToContact(chosenRep);
	});
	jQuery('#searchResults').on('click','.autocomplete-suggestion',function(){
		jQuery('.pt-page').removeClass('pt-page-current');
		jQuery('#formPage').addClass('pt-page-current');
		PageTransitions.init();
		var chosenRep=jQuery(this).attr('data-index');
			goToContact(chosenRep);
	});
	jQuery('#contactForm').submit(function(e){
		e.preventDefault();
		var params=jQuery(this).serialize();
		if(termsAgreed()){
			ajaxIt("message","create",params,dummyEmpty);
		}else{
			alert("Sie müssen der Datenverarbeitung zustimmen.")
		}
	});
	
	jQuery('#searchForm').submit(function(e){
		e.preventDefault();
		var params=jQuery(this).serialize();
		ajaxIt("search","index",params,showResults);
	});
	jQuery('.survey').on('submit',function(e){
		e.preventDefault();
		var data=jQuery(this).serialize();
		ajaxIt("survey","create",data,dummyEmpty);
	});
	jQuery(document).on('scroll',function(e){
		jQuery('.virtualKeyboard').each(function(index,el){
			if(jQuery(el).css('right')==='0px'){
			 jQuery(el).animate({
				right:"-50vw"
			 });
			}
		});
		
	});
	jQuery('input[type="text"], textarea').on('focus',function(e){
		jQuery(virtualKeyboard).show();
		if(jQuery(jQuery(this).context.form).attr('id') !=='searchForm'){
			jQuery('#virtualKeyboard').append(jQuery(virtualKeyboard));
			jQuery('#virtualKeyboard').animate({
				right:0
			});
		}else{
			jQuery('#virtualKeyboard2').append(virtualKeyboard);
			jQuery('#virtualKeyboard2').animate({
				right:0
			});
		}
	});
	jQuery(':input[type="radio"],:input[type="checkbox"],:input[type="reset"],:input[type="submit"]').on('focus',function(e){
		jQuery('.virtualKeyboard').animate({
			right:"-50vw"
		});
	});
	jQuery('#q_7_1').change(function() {
		
		if(this.checked){
			jQuery('#q_7_1_b_table').show();
		}else{
			jQuery('#q_7_1_b_table').hide();
		}

	 }); 
	 
	 jQuery('.updateDate').change(function(e){
			
			var params='onspotdate='+jQuery(this).val()+'&checked='+this.checked;
			ajaxIt("feusers","update",params,dummyEmpty);
	 });
	 
	 
	 
	 /*var dd = new DropDown( jQuery('#searchResults') );*/
	 
}

function smstextBox(){			
	var berater=new window.smsTexte.berater(jQuery('#consultantSelect option:selected').val(),jQuery('#consultantSelect option:selected').text());
	var kunde=new window.smsTexte.kunde(jQuery('input[name="firstname"]').val(),jQuery('input[name="lastname"]').val(),jQuery('input[name="phone"]').val());
	new smsTexte.createBox(berater,kunde);
	
}


function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						jQuery(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

function showResults(data){
	jQuery('#searchResults').html('');
	var suggestions=jQuery.parseJSON(data).suggestions;
	var suggestionsStrng='';
	for(var i=0; i<suggestions.length;i++){
		suggestionsStrng+='<div class="autocomplete-suggestion" data-index="' + suggestions[i].data + '">' + suggestions[i].html + '</div>';
		/*suggestionsStrng+=suggestions[i].html;*/
		
	}
	jQuery('#searchResults').append('<div class="autocomplete-suggestions">'+suggestionsStrng+'</div>' );
	
	/*jQuery('#searchResults').html('<ul id="resultList" class="dropdown">'+suggestionsStrng+'</ul>');*/
}



var dummyEmpty=function(){	
};

var ajaxIt=function(controller,action,formdata,successhandler, parameters){
	 parameters = typeof parameters !== 'undefined' ? '/'+parameters : '';
	if(successhandler !== dummyEmpty){
	jQuery('#loadingimg').show();
	}

	jQuery.ajax({
		url: baseurl+module+controller+'/'+action+parameters,
		cache: false,
		async: true,
		data: formdata,   
		type: 'POST',
		success: function(data) {
			jQuery('#loadingimg').hide();	
			successhandler(data);
		},
		error: function(e){			
			jQuery('#loadingimg').hide();
			}
		});
		
};

$(document).ready(function(jQuery){
	
	init(jQuery);
	
});

function letsRoll(){
	if(typeof(pluginInit) !== 'undefined'){
		jQuery('#loadingimg').hide();	
		pluginInit();
		
	}else{	
		window.setTimeout(letsRoll,10);
	}
}

function formIsValid(){
	var fields =['firstname','lastname','phone','zip','city'];
	var fieldLength=fields.length;
	for(var i=0;i<fieldLength;i++){
		var x = document.forms["contactForm"][fields[i]].value;
		if (x == null || x == "") {			
			return false;
		}
	}
	return true;
}

function termsAgreed(){
	var x = document.forms["contactForm"]["terms"].checked;
	if (!x) {			
			return false;
		}
	return true;
}