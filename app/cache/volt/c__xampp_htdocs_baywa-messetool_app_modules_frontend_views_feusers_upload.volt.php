<div id="messages"><?php echo $this->flashSession->output(); ?></div>

<?php echo $this->getContent(); ?>
<section>
	<div class="container"><?php if ($this->session->get('auth')) { ?><div class="ceElement medium">
			<h1><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('addressFoldersCreateTitle'); ?></h1>
	<div id="mapWrapper" class="<?php echo $filehideshow; ?>">

	<div class='listelementContainer'>
	<?php echo $this->tag->form(array($language . '/addressfolders/create/', 'method' => 'post', 'enctype' => 'multipart/form-data')); ?>


	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('firstRowContainsFieldName'); ?></label><br>
		<?php echo $this->tag->checkField(array('firstRowFieldNames')); ?>

		<br><br>	
		<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('dateFieldsWrapped'); ?></label><br>
		<?php echo $this->tag->selectStatic(array('dataFieldWrap', array('0' => '" (' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('quotesign') . ')', '1' => '\' (' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('invertedcomma') . ')'))); ?>


		<br><br>
		<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('divider'); ?></label><br>
		<?php echo $this->tag->selectStatic(array('divider', array('0' => '; (' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('semicolon') . ')', '1' => ', (' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('comma') . ')', '2' => ': (' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('colon') . ')', '3' => '	 (' . messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('tabs') . ')'))); ?>

		<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('csv'); ?></label><br>
	<?php echo $this->tag->fileField(array('addresslistFile')); ?>
	<br><br>

		<?php echo $this->tag->submitButton(array(messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('ok'), 'id' => 'uploadAndShowMap')); ?>

	</form>
	</div>
	</div>

	<div id="mapWrapper" class="<?php echo $maphideshow; ?>">
		<div class='listelementContainer'>
		<?php echo $this->tag->form(array($language . '/addressfolders/create/', 'method' => 'post')); ?>


	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('addressFolderSelectLabel'); ?></label><br>
		<?php echo $this->tag->select(array('addressFoldersUid', $addressfolders, 'using' => array('uid', 'title'), 'useEmpty' => true, 'emptyText' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('pleaseSelect'), 'emptyValue' => '0')); ?>
	<br><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('or'); ?><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('addressFolderNewLabel'); ?> (<?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('overwritesPreviousSelection'); ?>)</label><br>
		<?php echo $this->tag->textField(array('addressfolderCreate', 'size' => 32)); ?>
	<br><br>
	<label><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('deleteAllExistingAddresses'); ?></label><br>
		<?php echo $this->tag->checkField(array('deleteallexisting')); ?>

		<br><br>	

		<table id="mapTable">
			<thead><th>Dateifelder</th><th>&nbsp;</th><th>Datenbankfelder</th></thead>
		<?php foreach ($uploadfields as $index => $uploadfield) { ?>
		<tr>
			<td><?php echo $uploadfield; ?></td>
			<td> >> </td>
			<td>
				<?php echo $this->tag->select(array('adressFieldsMap[]', array('0' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('pleaseSelect'), '1' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('firstname'), '2' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('lastname'), '3' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('title'), '4' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('salutation'), '5' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('email'), '6' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('company'), '7' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('phone'), '8' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('address'), '9' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('place'), '10' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('zip'), '11' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('userlanguage'), '12' => messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('gender')))); ?>
			</td>

		</tr>
		<?php } ?>
		</table>

		<br><br>
		<?php echo $this->tag->hiddenField(array('dataFieldWrap', 'value' => $dataFieldWrap)); ?>
		<?php echo $this->tag->hiddenField(array('divider', 'value' => $divider)); ?>
		<?php echo $this->tag->hiddenField(array('time', 'value' => $tstamp)); ?>
		<?php echo $this->tag->hiddenField(array('firstRowFieldNames', 'value' => $firstRowFieldNames)); ?>
		<?php echo $this->tag->hiddenField(array('filename', 'value' => $filename)); ?>
		<?php echo $this->tag->submitButton(array(messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('ok'))); ?>

	</form>
	</div>
	</div>
	</div><?php } ?></div>
</section>