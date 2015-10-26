{{ content() }}
<section id="survey">
		<a name="survey"></a>
		<header>
			<div class="logo">
				<a href="http://agritechnica2015.denkfabrik-group.com/">{{image('images/baywa-logo.png', "class":"logo")}}</a>
			</div>
			<div class="headerWrap">
				<h1>{{tr('surveyHeaderB')}}</h1>
				
			</div>
			<div id="virtualKeyboard" class="virtualKeyboard"></div>
			<div class='clearfix'></div>
			
		</header>
		<div id="surveyForm" class="form">
			<div id="surveyFormWrapper" class="pt-wrapper">
				<div class="pt-page pt-page-1">
					<table width="100%">
						<tr><td>{{tr('surveyHeaderInfoB')}}</td></tr>
						<tr><td style="height:25vh;">&nbsp;</td></tr>
						
						<tr>
							<td>
								
						<a href="" class="navButton pt-trigger"   data-animation="32" data-goto="2"><span>{{tr('surveyButtonStart')}}</span></a>
					
							</td>
						</tr>
					
					</table>
				</div>
				<div class="pt-page pt-page-2">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:9.1%">
						</div>
					<h3>{{tr('question_1_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_101">
						<table class="formTable" style="width:100%;">
							<tr>
								
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="1">
										<input id="rating_1_5" type="radio" name="rating_1" value="5">
										<label for="rating_1_5">5</label>
										<input id="rating_1_4" type="radio" name="rating_1" value="4">
										<label for="rating_1_4">4</label>
										<input id="rating_1_3" type="radio" name="rating_1" value="3">
										<label for="rating_1_3">3</label>
										<input id="rating_1_2" type="radio" name="rating_1" value="2">
										<label for="rating_1_2">2</label>
										<input id="rating_1_1" type="radio" name="rating_1" value="1">
										<label for="rating_1_1">1</label>
										
									  </span>
								</td>
							</tr>
							<tr>
								<td>
									<div style="width:26vw">
									<label>{{tr('surveyAnswerSuggestions')}}</label><br>
									<textarea name="message"></textarea>
									</div>
								</td>
							</tr>
								<tr>
								<td>
									
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="3" class="pt-trigger" style="margin-right:1vw;">
									
								</td>
							</tr>
						</table>
						<input type="hidden" name="uniqueid" value="{{uniqueId}}">
						<input type="hidden" name="question" value="101">
					</form>
				</div>
				<div class="pt-page pt-page-3">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:18.2%">
						</div>
					<h3>{{tr('question_2_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_102">
							<table class="formTable fullTable" >
							<tr>
								<td>
									<label>{{tr('q_2_1_b_title')}}</label><br><br>
									<label for="q_2_1">{{tr('q_2_1_b')}}</label>
								</td>
								<td>
									<br><br>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="1">
										<input id="rating_2_5" type="radio" name="rating_1" value="5">
										<label for="rating_2_5">5</label>
										<input id="rating_2_4" type="radio" name="rating_1" value="4">
										<label for="rating_2_4">4</label>
										<input id="rating_2_3" type="radio" name="rating_1" value="3">
										<label for="rating_2_3">3</label>
										<input id="rating_2_2" type="radio" name="rating_1" value="2">
										<label for="rating_2_2">2</label>
										<input id="rating_2_1" type="radio" name="rating_1" value="1">
										<label for="rating_2_1">1</label>
										
									  </span>
								</td>							
								<td>
									<label for="q_2_6">{{tr('q_2_6_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="6">
										<input id="rating_3_5" type="radio" name="rating_6" value="5">
										<label for="rating_3_5">5</label>
										<input id="rating_3_4" type="radio" name="rating_6" value="4">
										<label for="rating_3_4">4</label>
										<input id="rating_3_3" type="radio" name="rating_6" value="3">
										<label for="rating_3_3">3</label>
										<input id="rating_3_2" type="radio" name="rating_6" value="2">
										<label for="rating_3_2">2</label>
										<input id="rating_3_1" type="radio" name="rating_6" value="1">
										<label for="rating_3_1">1</label>
										
									  </span>
								</td>
							</tr>
							<tr>
								<td>
									<label for="q_2_2">{{tr('q_2_2_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="2">
										<input id="rating_4_5" type="radio" name="rating_2" value="5">
										<label for="rating_4_5">5</label>
										<input id="rating_4_4" type="radio" name="rating_2" value="4">
										<label for="rating_4_4">4</label>
										<input id="rating_4_3" type="radio" name="rating_2" value="3">
										<label for="rating_4_3">3</label>
										<input id="rating_4_2" type="radio" name="rating_2" value="2">
										<label for="rating_4_2">2</label>
										<input id="rating_4_1" type="radio" name="rating_2" value="1">
										<label for="rating_4_1">1</label>
										
									  </span>
								</td>
								<td>
									<label for="q_2_7">{{tr('q_2_7_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="7">
										<input id="rating_5_5" type="radio" name="rating_7" value="5">
										<label for="rating_5_5">5</label>
										<input id="rating_5_4" type="radio" name="rating_7" value="4">
										<label for="rating_5_4">4</label>
										<input id="rating_5_3" type="radio" name="rating_7" value="3">
										<label for="rating_5_3">3</label>
										<input id="rating_5_2" type="radio" name="rating_7" value="2">
										<label for="rating_5_2">2</label>
										<input id="rating_5_1" type="radio" name="rating_7" value="1">
										<label for="rating_5_1">1</label>
										
									  </span>
								</td>
							</tr>
							<tr>
								<td>
									<label for="q_2_3">{{tr('q_2_3_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="3">
										<input id="rating_6_5" type="radio" name="rating_3" value="5">
										<label for="rating_6_5">5</label>
										<input id="rating_6_4" type="radio" name="rating_3" value="4">
										<label for="rating_6_4">4</label>
										<input id="rating_6_3" type="radio" name="rating_3" value="3">
										<label for="rating_6_3">3</label>
										<input id="rating_6_2" type="radio" name="rating_3" value="2">
										<label for="rating_6_2">2</label>
										<input id="rating_6_1" type="radio" name="rating_3" value="1">
										<label for="rating_6_1">1</label>
										
									  </span>
								</td>
								<td>
									<label for="q_2_8">{{tr('q_2_8_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="8">
										<input id="rating_7_5" type="radio" name="rating_8" value="5">
										<label for="rating_7_5">5</label>
										<input id="rating_7_4" type="radio" name="rating_8" value="4">
										<label for="rating_7_4">4</label>
										<input id="rating_7_3" type="radio" name="rating_8" value="3">
										<label for="rating_7_3">3</label>
										<input id="rating_7_2" type="radio" name="rating_8" value="2">
										<label for="rating_7_2">2</label>
										<input id="rating_7_1" type="radio" name="rating_8" value="1">
										<label for="rating_7_1">1</label>
										
									  </span>
								</td>
							</tr>
							<tr>
								<td>
									<label for="q_2_4">{{tr('q_2_4_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="4">
										<input id="rating_8_5" type="radio" name="rating_4" value="5">
										<label for="rating_8_5">5</label>
										<input id="rating_8_4" type="radio" name="rating_4" value="4">
										<label for="rating_8_4">4</label>
										<input id="rating_8_3" type="radio" name="rating_4" value="3">
										<label for="rating_8_3">3</label>
										<input id="rating_8_2" type="radio" name="rating_4" value="2">
										<label for="rating_8_2">2</label>
										<input id="rating_8_1" type="radio" name="rating_4" value="1">
										<label for="rating_8_1">1</label>
										
									  </span>
								</td>
								<td>
									<label for="q_2_9">{{tr('q_2_9_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="9">
										<input id="rating_9_5" type="radio" name="rating_9" value="5">
										<label for="rating_9_5">5</label>
										<input id="rating_9_4" type="radio" name="rating_9" value="4">
										<label for="rating_9_4">4</label>
										<input id="rating_9_3" type="radio" name="rating_9" value="3">
										<label for="rating_9_3">3</label>
										<input id="rating_9_2" type="radio" name="rating_9" value="2">
										<label for="rating_9_2">2</label>
										<input id="rating_9_1" type="radio" name="rating_9" value="1">
										<label for="rating_9_1">1</label>
										
									  </span>
								</td>
							</tr>
							<tr>
								<td>
									<label for="q_2_5">{{tr('q_2_5_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="5">
										<input id="rating_10_5" type="radio" name="rating_5" value="5">
										<label for="rating_10_5">5</label>
										<input id="rating_10_4" type="radio" name="rating_5" value="4">
										<label for="rating_10_4">4</label>
										<input id="rating_10_3" type="radio" name="rating_5" value="3">
										<label for="rating_10_3">3</label>
										<input id="rating_10_2" type="radio" name="rating_5" value="2">
										<label for="rating_10_2">2</label>
										<input id="rating_10_1" type="radio" name="rating_5" value="1">
										<label for="rating_10_1">1</label>
										
									  </span>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<br>
										<input type="hidden" name="uniqueid" value="{{uniqueId}}">
										<input type="hidden" name="question" value="102">
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="4" class="pt-trigger" style="margin-right:1vw;">
										<br>		
								</td>
								
								<td colspan="2">
									<label>{{tr('surveyAnswerSuggestions')}}</label><br>
									<textarea name="message" style="width:26vw"></textarea>
								</td>
								
								
							</tr>
							
							
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-4">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:27.3%">
						</div>
					<h3>{{tr('question_3_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_103">
						<table class="formTable" style="width:100%;">
							<tr>							
								<td>
									
									<label for="q_3_1">{{tr('q_3_1_b')}}</label>
									
								</td>
								<td>
									
									<span class="starRating">
										<input type="hidden" name="rating[]" value="1">
										<input id="rating_11_5" type="radio" name="rating_1" value="5">
										<label for="rating_11_5">5</label>
										<input id="rating_11_4" type="radio" name="rating_1" value="4">
										<label for="rating_11_4">4</label>
										<input id="rating_11_3" type="radio" name="rating_1" value="3">
										<label for="rating_11_3">3</label>
										<input id="rating_11_2" type="radio" name="rating_1" value="2">
										<label for="rating_11_2">2</label>
										<input id="rating_11_1" type="radio" name="rating_1" value="1">
										<label for="rating_11_1">1</label>
										
									  </span>
									
								</td>
							</tr>
							<tr>
								<td>
									
									<label for="q_3_2">{{tr('q_3_2_b')}}</label>
									
								</td>
								<td>
									
									<span class="starRating">
										<input type="hidden" name="rating[]" value="2">
										<input id="rating_12_5" type="radio" name="rating_2" value="5">
										<label for="rating_12_5">5</label>
										<input id="rating_12_4" type="radio" name="rating_2" value="4">
										<label for="rating_12_4">4</label>
										<input id="rating_12_3" type="radio" name="rating_2" value="3">
										<label for="rating_12_3">3</label>
										<input id="rating_12_2" type="radio" name="rating_2" value="2">
										<label for="rating_12_2">2</label>
										<input id="rating_12_1" type="radio" name="rating_2" value="1">
										<label for="rating_12_1">1</label>
										
									  </span>
									
								</td>
							</tr>
					
							<tr>
								<td colspan="3">
										<input type="hidden" name="uniqueid" value="{{uniqueId}}">
										<input type="hidden" name="question" value="103">
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="5" class="pt-trigger" style="margin-right:1vw;">
										<br><br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-5">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:36.4%">
						</div>
						<h3>{{tr('question_4_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_104">
						<table class="formTable" style="width:100%;">
							<tr>
								<td>
									<label for="q_4_1_b"><input type="radio" id="q_4_1_b" name="item" value="1"> {{tr('q_4_1_b')}}</label>
								</td>
								<td>
									<label for="q_4_2_b"><input type="radio" id="q_4_2_b" name="item" value="2"> {{tr('q_4_2_b')}}</label>
								</td>
								
							</tr>
							<tr>
								<td colspan="2">
									<label>{{tr('q_4_b_add')}}</label><br>
									<textarea name="message" style="width:26vw"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
										<input type="hidden" name="uniqueid" value="{{uniqueId}}">
										<input type="hidden" name="question" value="104">
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="6" class="pt-trigger" style="margin-right:1vw;">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-6">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:45.5%">
						</div>
						<h3>{{tr('question_5_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_105">
						<table class="formTable" style="width:100%;">
							<tr>
								<td>
									<label for="q_5_1_b"><input type="radio" id="q_5_1_b" name="item" value="1"> {{tr('q_5_1_b')}}</label>
								</td>
								<td>
									<label for="q_5_2_b"><input type="radio" id="q_5_2_b" name="item" value="2"> {{tr('q_5_2_b')}}</label>
								</td>
								
							</tr>
							<tr>
								<td colspan="2">
									<label>{{tr('q_5_b_add')}}</label><br>
									<textarea name="message" style="width:26vw"></textarea>
								</td>
							</tr>
							
							<tr>
								<td colspan="3">
										<input type="hidden" name="uniqueid" value="{{uniqueId}}">
										<input type="hidden" name="question" value="105">
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="7" class="pt-trigger" style="margin-right:1vw;">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-7">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:54.6%">
						</div>
						<h3>{{tr('question_6_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_106">
						<table class="formTable" style="width:100%;">
							<tr>
								<td colspan="2">
									
									<textarea name="message" style="width:26vw"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="3">
										<input type="hidden" name="uniqueid" value="{{uniqueId}}">
										<input type="hidden" name="question" value="106">
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="8" class="pt-trigger" style="margin-right:1vw;">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-8">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:63.7%">
						</div>
						<h3>{{tr('question_7_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_107">
						<table class="formTable" style="width:100%;" id="dayTable">
							<tr>
								<td>
									<label for="q_7_1_b">{{tr('q_7_1_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="1">
										<input id="rating_13_5" type="radio" name="rating_1" value="5">
										<label for="rating_13_5">5</label>
										<input id="rating_13_4" type="radio" name="rating_1" value="4">
										<label for="rating_13_4">4</label>
										<input id="rating_13_3" type="radio" name="rating_1" value="3">
										<label for="rating_13_3">3</label>
										<input id="rating_13_2" type="radio" name="rating_1" value="2">
										<label for="rating_13_2">2</label>
										<input id="rating_13_1" type="radio" name="rating_1" value="1">
										<label for="rating_13_1">1</label>
										
									  </span>
								</td>
								<td>
									<label for="q_7_5_b" style="margin-left: 7vw;">{{tr('q_7_5_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="5">
										<input id="rating_17_5" type="radio" name="rating_5" value="5">
										<label for="rating_17_5">5</label>
										<input id="rating_17_4" type="radio" name="rating_5" value="4">
										<label for="rating_17_4">4</label>
										<input id="rating_17_3" type="radio" name="rating_5" value="3">
										<label for="rating_17_3">3</label>
										<input id="rating_17_2" type="radio" name="rating_5" value="2">
										<label for="rating_17_2">2</label>
										<input id="rating_17_1" type="radio" name="rating_5" value="1">
										<label for="rating_17_1">1</label>
										
									  </span>
								</td>
							</tr>
							<tr><td>
									<label for="q_7_2_b">{{tr('q_7_2_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="2">
										<input id="rating_14_5" type="radio" name="rating_2" value="5">
										<label for="rating_14_5">5</label>
										<input id="rating_14_4" type="radio" name="rating_2" value="4">
										<label for="rating_14_4">4</label>
										<input id="rating_14_3" type="radio" name="rating_2" value="3">
										<label for="rating_14_3">3</label>
										<input id="rating_14_2" type="radio" name="rating_2" value="2">
										<label for="rating_14_2">2</label>
										<input id="rating_14_1" type="radio" name="rating_2" value="1">
										<label for="rating_14_1">1</label>
										
									  </span>
								</td>
								<td>
									<label for="q_7_6_b" style="margin-left: 7vw;">{{tr('q_7_6_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="6">
										<input id="rating_18_5" type="radio" name="rating_6" value="5">
										<label for="rating_18_5">5</label>
										<input id="rating_18_4" type="radio" name="rating_6" value="4">
										<label for="rating_18_4">4</label>
										<input id="rating_18_3" type="radio" name="rating_6" value="3">
										<label for="rating_18_3">3</label>
										<input id="rating_18_2" type="radio" name="rating_6" value="2">
										<label for="rating_18_2">2</label>
										<input id="rating_18_1" type="radio" name="rating_6" value="1">
										<label for="rating_18_1">1</label>
										
									  </span>
								</td>
								
							</tr>
							<tr>
								<td>
									<label for="q_7_3_b">{{tr('q_7_3_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="3">
										<input id="rating_15_5" type="radio" name="rating_3" value="5">
										<label for="rating_15_5">5</label>
										<input id="rating_15_4" type="radio" name="rating_3" value="4">
										<label for="rating_15_4">4</label>
										<input id="rating_15_3" type="radio" name="rating_3" value="3">
										<label for="rating_15_3">3</label>
										<input id="rating_15_2" type="radio" name="rating_3" value="2">
										<label for="rating_15_2">2</label>
										<input id="rating_15_1" type="radio" name="rating_3" value="1">
										<label for="rating_15_1">1</label>
										
									  </span>
								</td>
								<td>
									<label for="q_7_7_b" style="margin-left: 7vw;">{{tr('q_7_7_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="7">
										<input id="rating_19_5" type="radio" name="rating_7" value="5">
										<label for="rating_19_5">5</label>
										<input id="rating_19_4" type="radio" name="rating_7" value="4">
										<label for="rating_19_4">4</label>
										<input id="rating_19_3" type="radio" name="rating_7" value="3">
										<label for="rating_19_3">3</label>
										<input id="rating_19_2" type="radio" name="rating_7" value="2">
										<label for="rating_19_2">2</label>
										<input id="rating_19_1" type="radio" name="rating_7" value="1">
										<label for="rating_19_1">1</label>
										
									  </span>
								</td>
								
							</tr>
							<tr>
								<td >
									<label for="q_7_4_b">{{tr('q_7_4_b')}}</label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="4">
										<input id="rating_16_5" type="radio" name="rating_4" value="5">
										<label for="rating_16_5">5</label>
										<input id="rating_16_4" type="radio" name="rating_4" value="4">
										<label for="rating_16_4">4</label>
										<input id="rating_16_3" type="radio" name="rating_4" value="3">
										<label for="rating_16_3">3</label>
										<input id="rating_16_2" type="radio" name="rating_4" value="2">
										<label for="rating_16_2">2</label>
										<input id="rating_16_1" type="radio" name="rating_4" value="1">
										<label for="rating_16_1">1</label>
										
									  </span>
								</td>
								
							</tr>
							<tr>
								<td colspan="2">
										<input type="hidden" name="uniqueid" value="{{uniqueId}}">
										<input type="hidden" name="question" value="107">
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="9" class="pt-trigger" style="margin-right:1vw">
										<br>
								</td>
							</tr>
							
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-9">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:72.8%">
						</div>
						<h3>{{tr('question_8_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_108">
						<table class="formTable" id="plzTable" style="width:100%;">
							
								<tr>
									<td>
										<span class="starRating">
											<input type="hidden" name="rating[]" value="1">
											<input id="rating_20_5" type="radio" name="rating_1" value="5">
											<label for="rating_20_5">5</label>
											<input id="rating_20_4" type="radio" name="rating_1" value="4">
											<label for="rating_20_4">4</label>
											<input id="rating_20_3" type="radio" name="rating_1" value="3">
											<label for="rating_20_3">3</label>
											<input id="rating_20_2" type="radio" name="rating_1" value="2">
											<label for="rating_20_2">2</label>
											<input id="rating_20_1" type="radio" name="rating_1" value="1">
											<label for="rating_20_1">1</label>

										  </span>
									</td>								
								</tr>
								<tr>
								<td colspan="6">
										<input type="hidden" name="uniqueid" value="{{uniqueId}}">
										<input type="hidden" name="question" value="108">
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="10" class="pt-trigger" style="margin-right:1vw;">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-10">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:81.9%">
						</div>
						<h3>{{tr('question_9_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_109">
						<table class="formTable" id="plzTable" style="width:100%;">
							
								<tr>
									<td>
										<span class="starRating">
											<input type="hidden" name="rating[]" value="1">
											<input id="rating_21_5" type="radio" name="rating_1" value="5">
											<label for="rating_21_5">5</label>
											<input id="rating_21_4" type="radio" name="rating_1" value="4">
											<label for="rating_21_4">4</label>
											<input id="rating_21_3" type="radio" name="rating_1" value="3">
											<label for="rating_21_3">3</label>
											<input id="rating_21_2" type="radio" name="rating_1" value="2">
											<label for="rating_21_2">2</label>
											<input id="rating_21_1" type="radio" name="rating_1" value="1">
											<label for="rating_21_1">1</label>

										  </span>
									</td>								
								</tr>
								<tr>
									<td colspan="2">
										<label>{{tr('surveyAnswerSuggestions')}}</label><br>
										<textarea name="message" style="width:26vw"></textarea>
									</td>
								</tr>
								<tr>
								<td colspan="6">
										<input type="hidden" name="uniqueid" value="{{uniqueId}}">
										<input type="hidden" name="question" value="109">
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="11" class="pt-trigger" style="margin-right:1vw;">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>				
				<div class="pt-page pt-page-11">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:91%">
						</div>
					<h3>{{tr('question_10_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_110">
						<table class="formTable" id="plzTable" style="width:100%;">
							
								<tr>
									<td>
										<label for="q_10_1_b">{{tr('q_10_1_b')}}</label> <br><input type="text" id="q_10_1_b" name="openitem[]"> 
									</td>							
										<td>
										<label for="q_10_2_b">{{tr('q_10_2_b')}}</label><br> <input type="text" id="q_10_2_b" name="openitem[]"> 
									</td>							
								</tr>
								<tr>
									<td>
										<label for="q_10_3_b">{{tr('q_10_3_b')}}</label><br> <input type="text" id="q_10_3_b" name="openitem[]"> 
									</td>							
										<td>
										<label for="q_10_4_b">{{tr('q_10_4_b')}}</label><br> <input type="text" id="q_10_4_b" name="openitem[]"> 
									</td>							
								</tr>
								<tr>
									<td>
										<input type="hidden" name="uniqueid" value="{{uniqueId}}">
										<input type="hidden" name="question" value="110">
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="12" class="pt-trigger" style="margin-right:1vw;">
										<br>
									</td>
									<td >
										<label>{{tr('q_10_b_add')}}</label><br>
										<textarea name="message" style="width:26vw;height:10vh"></textarea>
									</td>
								</tr>
								
								
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-12">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:100%">
						</div>
						<h3>{{tr('question_11_b')}}</h3>
					</div>
					<form autocomplete="off" class="survey" name="question_111">
						<table class="formTable" id="plzTable" style="width:100%;">
							
								<tr>
									<td>
										<span class="starRating">
											<input type="hidden" name="rating[]" value="1">
											<input id="rating_22_5" type="radio" name="rating_1" value="5">
											<label for="rating_22_5">5</label>
											<input id="rating_22_4" type="radio" name="rating_1" value="4">
											<label for="rating_22_4">4</label>
											<input id="rating_22_3" type="radio" name="rating_1" value="3">
											<label for="rating_22_3">3</label>
											<input id="rating_22_2" type="radio" name="rating_1" value="2">
											<label for="rating_22_2">2</label>
											<input id="rating_22_1" type="radio" name="rating_1" value="1">
											<label for="rating_22_1">1</label>

										  </span>
									</td>								
								</tr>
								<tr>
									<td colspan="2">
										<label>{{tr('q_11_b_add')}}</label><br>
										<textarea name="message" style="width:26vw"></textarea>
									</td>
								</tr>
								<tr>
								<td colspan="6">
										<input type="hidden" name="uniqueid" value="{{uniqueId}}">
										<input type="hidden" name="question" value="111">
										<input type="submit" value="{{tr('surveyButtonGoon')}}" data-animation="32" data-goto="13" class="pt-trigger" style="margin-right:1vw;">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-13">
					<table class="formTable">
						<tr><td>
					<br>
					<h3>{{tr('thankYouB')}}</h3><br><br>
					<a href="http://agritechnica2015.denkfabrik-group.com/backend/de/survey/" class="navButton"  id="consultantNotFound"><span class="icon i_right_primary"></span><span class="btn_label">Zurück zum Anfang der Befragung.</span></a>
					</td>
					</tr>
					</table>
				</div>
			</div>
		</div>
		
	</section>
		
<div id="virtualKeyboardWrapper"></div>