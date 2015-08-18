<?php echo $this->getContent(); ?>
<section id="survey">
		<a name="survey"></a>
		<header>
			<div class="logo">
				<?php echo $this->tag->image(array('images/baywa-logo.png', 'class' => 'logo')); ?>
			</div>
			<div class="headerWrap">
				<h1><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyHeader'); ?></h1>
				
			</div>
			<div id="virtualKeyboard" class="virtualKeyboard"></div>
			<div class='clearfix'></div>
			
		</header>
		<div id="surveyForm" class="form">
			<div id="surveyFormWrapper" class="pt-wrapper">
				<div class="pt-page pt-page-1 pt-page-current">
					<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyHeaderInfo'); ?>
					<div style="position:relative;">
						<a href="" class="navButton pt-trigger"   data-animation="32" data-goto="2"><span><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyButtonStart'); ?></span></a>
					</div>
				</div>
				<div class="pt-page pt-page-2">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:12.5%">
						</div>
						<h3><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('question_1'); ?></h3>
					</div>					
					<form autocomplete="off" class="survey" name="question_1">
						<table class="formTable">							
							<tr>
								<td>
									<label for="q_1_1"><input type="checkbox" id="q_1_1" name="item[]" value="1"> <?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_1_1'); ?></label>
								</td>
								<td>
									<label for="q_1_2"><input type="checkbox" id="q_1_2" name="item[]" value="2"> <?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_1_2'); ?></label>
								</td>
								<td>
									<label for="q_1_3"><input type="checkbox" id="q_1_3" name="item[]" value="3"> <?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_1_3'); ?></label>
								</td>
							</tr>
							<tr>
								<td>
									<label for="q_1_4"><input type="checkbox" id="q_1_4" name="item[]" value="4"> <?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_1_4'); ?></label>
								</td>
								<td>
									<label for="q_1_5"><input type="checkbox" id="q_1_5" name="item[]" value="5"> <?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_1_5'); ?></label>
								</td>
								<td>
									<label for="q_1_6"><input type="checkbox" id="q_1_6" name="item[]" value="6"> <?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_1_6'); ?></label>
								</td>
							</tr>
							<tr>
								<td>
									<label for="q_1_7"><input type="checkbox" id="q_1_7" name="item[]" value="7"> <?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_1_7'); ?></label>
								</td>
								
								<td>
									<label for="q_1_8"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_1_8'); ?> <input type="text" id="q_1_8" name="openitem[]"> </label> 
								</td>								
							</tr>
							<tr>
								<td colspan="3" style="text-align:center">
									
										<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyButtonGoon'); ?>" data-animation="32" data-goto="3" class="pt-trigger">
									
								</td>
							</tr>

						</table>
						<input type="hidden" name="uniqueid" value="<?php echo $uniqueId; ?>">
						<input type="hidden" name="question" value="1">
					</form>
				</div>
				<div class="pt-page pt-page-3">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:25%">
						</div>
						<h3><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('question_2'); ?></h3>
					</div>
					<form autocomplete="off" class="survey" name="question_2">
						<table class="formTable">							
							<tr>
								<td>
									<input type="checkbox" id="q_2_1" name="item[]" value="1"> <label for="q_2_1"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_1'); ?></label>
								</td>
								<td>
									<input type="checkbox" id="q_2_2" name="item[]" value="2"> <label for="q_2_2"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_2'); ?></label>
								</td>
								<td>
									<input type="checkbox" id="q_2_3" name="item[]" value="3"> <label for="q_2_3"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_3'); ?></label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" id="q_2_4" name="item[]" value="4"> <label for="q_2_4"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_4'); ?></label>
								</td>
								<td>
									<input type="checkbox" id="q_2_5" name="item[]" value="5"> <label for="q_2_5"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_5'); ?></label>
								</td>
								<td>
									<input type="checkbox" id="q_2_6" name="item[]" value="6"> <label for="q_2_6"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_6'); ?></label>
								</td>
							</tr>
								<tr>
								<td>
									<input type="checkbox" id="q_2_7" name="item[]" value="7"> <label for="q_2_7"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_7'); ?></label>
								</td>
								<td>
									<input type="checkbox" id="q_2_8" name="item[]" value="8"> <label for="q_2_8"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_8'); ?></label>
								</td>
								<td>
									<input type="checkbox" id="q_2_9" name="item[]" value="9"> <label for="q_2_9"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_9'); ?></label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" id="q_2_10" name="item[]" value="10"> <label for="q_2_10"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_10'); ?></label>
								</td>								
								<td>
									<label for="q_2_11"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_2_11'); ?></label> <input type="text" id="q_2_11" name="openitem[]"> 
								</td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:center">
										<input type="hidden" name="uniqueid" value="<?php echo $uniqueId; ?>">
									<input type="hidden" name="question" value="2">
										<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyButtonGoon'); ?>" data-animation="32" data-goto="4" class="pt-trigger">
									
								</td>
							</tr>
							
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-4">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:37.5%">
						</div>
						<h3><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('question_3'); ?></h3>
					</div>
					<form autocomplete="off" class="survey" name="question_3">
						<table class="formTable">							
							<tr>
								<td>
									<label for="q_3_1"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_3_1'); ?></label>
								</td>
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
									<label for="q_3_2"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_3_2'); ?></label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="2">
										<input id="rating_2_5" type="radio" name="rating_2" value="5">
										<label for="rating_2_5">5</label>
										<input id="rating_2_4" type="radio" name="rating_2" value="4">
										<label for="rating_2_4">4</label>
										<input id="rating_2_3" type="radio" name="rating_2" value="3">
										<label for="rating_2_3">3</label>
										<input id="rating_2_2" type="radio" name="rating_2" value="2">
										<label for="rating_2_2">2</label>
										<input id="rating_2_1" type="radio" name="rating_2" value="1">
										<label for="rating_2_1">1</label>
										
									  </span>
								</td>
							</tr>
							<tr>
								<td>
									<label for="q_3_3"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_3_3'); ?></label>
								</td>
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="3">
										<input id="rating_3_5" type="radio" name="rating_3" value="5">
										<label for="rating_3_5">5</label>
										<input id="rating_3_4" type="radio" name="rating_3" value="4">
										<label for="rating_3_4">4</label>
										<input id="rating_3_3" type="radio" name="rating_3" value="3">
										<label for="rating_3_3">3</label>
										<input id="rating_3_2" type="radio" name="rating_3" value="2">
										<label for="rating_3_2">2</label>
										<input id="rating_3_1" type="radio" name="rating_3" value="1">
										<label for="rating_3_1">1</label>
										
									  </span>
								</td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:center">
										<input type="hidden" name="uniqueid" value="<?php echo $uniqueId; ?>">
										<input type="hidden" name="question" value="3">
										<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyButtonGoon'); ?>" data-animation="32" data-goto="5" class="pt-trigger">
										<br><br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-5">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:50%">
						</div>
						<h3><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('question_4'); ?></h3>
					</div>
					<form autocomplete="off" class="survey" name="question_4">
						<table class="formTable">							
							<tr>
								
								<td>
									<span class="starRating">
										<input type="hidden" name="rating[]" value="1">
										<input id="rating_4_5" type="radio" name="rating_1" value="5">
										<label for="rating_4_5">5</label>
										<input id="rating_4_4" type="radio" name="rating_1" value="4">
										<label for="rating_4_4">4</label>
										<input id="rating_4_3" type="radio" name="rating_1" value="3">
										<label for="rating_4_3">3</label>
										<input id="rating_4_2" type="radio" name="rating_1" value="2">
										<label for="rating_4_2">2</label>
										<input id="rating_4_1" type="radio" name="rating_1" value="1">
										<label for="rating_4_1">1</label>
										
									  </span>
								</td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:center">
										<input type="hidden" name="uniqueid" value="<?php echo $uniqueId; ?>">
										<input type="hidden" name="question" value="4">
										<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyButtonGoon'); ?>" data-animation="32" data-goto="6" class="pt-trigger">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-6">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:62.5%">
						</div>
						<h3><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('question_5'); ?></h3>
					</div>
					<form autocomplete="off" class="survey" name="question_5">
						<table class="formTable">							
							<tr>
								<td colspan="2"><br>
									<textarea name="message"></textarea>
								</td>
							</tr>
							<tr>
								<td>
									
								</td>
								<td>
									
								</td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:center">
										<input type="hidden" name="uniqueid" value="<?php echo $uniqueId; ?>">
										<input type="hidden" name="question" value="5">
										<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyButtonGoon'); ?>" data-animation="32" data-goto="7" class="pt-trigger">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-7">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:75%">
						</div>
						<h3><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('question_6'); ?></h3>
					</div>
					<form autocomplete="off" class="survey" name="question_6">
						<table class="formTable">							
							<tr>
								<td>
									<input type="radio" id="q_6_1" name="item" value="1"> <label for="q_6_1"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_6_1'); ?></label>
								</td>
								<td>
									<input type="radio" id="q_6_2" name="item" value="2"> <label for="q_6_2"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_6_2'); ?></label>
								</td>
								<td>
									<input type="radio" id="q_6_3" name="item" value="3"> <label for="q_6_3"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_6_3'); ?></label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="radio" id="q_6_4" name="item" value="4"> <label for="q_6_4"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_6_4'); ?></label>
								</td>
								<td>
									<input type="radio" id="q_6_5" name="item" value="5"> <label for="q_6_5"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_6_5'); ?></label>
								</td>
								<td>
									<input type="radio" id="q_6_6" name="item" value="6"> <label for="q_6_6"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_6_6'); ?></label>
								</td>
							
							</tr>
							<tr>
									<td>
									<input type="radio" id="q_6_7" name="item" value="7"> <label for="q_6_7"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_6_7'); ?></label>
								</td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:center">
										<input type="hidden" name="uniqueid" value="<?php echo $uniqueId; ?>">
										<input type="hidden" name="question" value="6">
										<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyButtonGoon'); ?>" data-animation="32" data-goto="8" class="pt-trigger">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-8">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:87.5%">
						</div>
						<h3><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('question_7'); ?></h3>
					</div>
					<form autocomplete="off" class="survey" name="question_7">
						<table class="formTable">							
							<tr>
								<td colspan="3">
									<input type="checkbox" id="q_7_1" name="item[]" value="1"> <label for="q_7_1"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_1_a'); ?></label>
									<table id="q_7_1_b_table" style="display:none;border:#fff 1px dotted">
										<tr>
											<td colspan="4"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_1_b'); ?></td>
										<tr>
											<td>
												<input type="checkbox" id="q_7_2" name="item[]" value="2"> <label for="q_7_2"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_2'); ?></label>
											</td>
											<td>
												<input type="checkbox" id="q_7_3" name="item[]" value="3"> <label for="q_7_3"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_3'); ?></label>
											</td>
											<td>
												<input type="checkbox" id="q_7_4" name="item[]" value="4"> <label for="q_7_4"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_4'); ?></label>
											</td>
											<td>
												<label for="q_7_5"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_5'); ?></label> <input type="text" id="q_7_5" name="openitem[]"> 
											</td>
										</tr>
									</table>
								</td>	
							</tr>
							<tr>
								<td>
									<input type="checkbox" id="q_7_6" name="item[]" value="6"> <label for="q_7_6"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_6'); ?></label>
								</td>
								<td>
									<input type="checkbox" id="q_7_7" name="item[]" value="7"> <label for="q_7_7"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_7'); ?></label>
								</td>
								<td>
									<input type="checkbox" id="q_7_8" name="item[]" value="8"> <label for="q_7_8"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_8'); ?></label>
								</td>									
							</tr>
							<tr>
								<td>
									<input type="checkbox" id="q_7_9" name="item[]" value="9"> <label for="q_7_9"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_9'); ?></label>
								</td>
								<td>
									<input type="checkbox" id="q_7_10" name="item[]" value="10"> <label for="q_7_10"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_10'); ?></label>
								</td>
								<td>
									<label for="q_7_11"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_7_11'); ?></label> <input type="text" id="q_7_11" name="openitem[]"> 
								</td>									
							</tr>
							
							<tr>
								<td colspan="3" style="text-align:center">
										<input type="hidden" name="uniqueid" value="<?php echo $uniqueId; ?>">
										<input type="hidden" name="question" value="7">
										<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyButtonGoon'); ?>" data-animation="32" data-goto="9" class="pt-trigger">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-9">
					<div class="statusbar outer">
						<div class="statusbar inner" style="width:100%">
						</div>
						<h3><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('question_8'); ?></h3>
					</div>
					<form autocomplete="off" class="survey" name="question_8">
						<table class="formTable" id="plzTable">
							
								<tr>
									<td>
										<input type="radio" id="q_8_1" name="item" value="0"> <label for="q_8_1"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_1'); ?></label>
									</td>
									<td>
										<input type="radio" id="q_8_2" name="item" value="1"> <label for="q_8_2"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_2'); ?></label>
									</td>
									<td>
										<input type="radio" id="q_8_3" name="item" value="2"> <label for="q_8_3"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_3'); ?></label>
									</td>									
									<td>
										<input type="radio" id="q_8_4" name="item" value="3"> <label for="q_8_4"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_4'); ?></label>
									</td>
									<td>
										<input type="radio" id="q_8_5" name="item" value="4"> <label for="q_8_5"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_5'); ?></label>
									</td>
									<td>
										<input type="radio" id="q_8_6" name="item" value="5"> <label for="q_8_6"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_6'); ?></label>
									</td>									
									<td>
										<input type="radio" id="q_8_7" name="item" value="6"> <label for="q_8_7"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_7'); ?></label>
									</td>
									<td>
										<input type="radio" id="q_8_8" name="item" value="7"> <label for="q_8_8"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_8'); ?></label>
									</td>
									<td>
										<input type="radio" id="q_8_9" name="item" value="8"> <label for="q_8_9"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_9'); ?></label>
									</td>
									<td>
										<input type="radio" id="q_8_10" name="item" value="9"> <label for="q_8_10"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_10'); ?></label>
									</td>
								</tr>
								<tr>									
									<td colspan="5">
										<input type="radio" id="q_8_11" name="item" value="10"> <label for="q_8_11"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_11'); ?></label>
									</td>
									<td colspan="5">
										<input type="radio" id="q_8_12" name="item" value="11"> <label for="q_8_12"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('q_8_12'); ?></label>
									</td>	
								</tr>
								<tr>
								<td colspan="10" style="text-align:center">
										<input type="hidden" name="uniqueid" value="<?php echo $uniqueId; ?>">
										<input type="hidden" name="question" value="8">
										<input type="submit" value="<?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('surveyButtonGoon'); ?>" data-animation="32" data-goto="10" class="pt-trigger">
										<br>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="pt-page pt-page-10">
					<br>
					<h3><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('thankYou'); ?></h3><br><br>
					<a href="http://baywa-messetool.iq-pi.org/" class="navButton"  id="consultantNotFound"><span class="icon i_right_primary"></span><span class="btn_label"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('backHome'); ?></span></a>
				</div>
			</div>
		</div>
		<a href="http://baywa-messetool.iq-pi.org/" class="navButton small backToTop"  ><span class="icon i_up_primary"></span><span class="btn_label"><?php echo messetool\Modules\Modules\Frontend\Controllers\ControllerBase::translate('backHome'); ?></span></a>
	</section>
		
<div id="virtualKeyboardWrapper"></div>