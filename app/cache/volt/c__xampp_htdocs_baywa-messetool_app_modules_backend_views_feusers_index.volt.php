

	<?php echo $this->getContent(); ?>
	<section>
<div class="container backend"><?php if ($this->session->get('auth')) { ?><?php foreach ($usergroups as $usergroup) { ?>
	<div class="ceElement large">
	<h1><?php echo $usergroup->title; ?></h1>
		<div class="dataTables_wrapper">
			<table  class="display dataTable">
				<thead>
					<tr>						
						<th><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.lastname'); ?></th>
						<th><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.firstname'); ?></th>
						<th><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.title'); ?></th>
						<th><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.email'); ?></th>
						<th><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.phone'); ?></th>
						
						<th><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.city'); ?></th>						
						<th><?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('feusers.company'); ?></th>


					</tr>
				</thead>
				<tbody>
				<?php foreach ($usergroup->getFeusers() as $index => $feuser) { ?>
				<tr class='<?php if (((($index) % 2) == 0)) { ?>even<?php } else { ?>odd<?php } ?>'>					
				<td><?php echo $feuser->last_name; ?></td>
				<td><?php echo $feuser->first_name; ?></td>
				<td><?php echo $feuser->title; ?></td>
				<td><?php echo $feuser->email; ?></td>
				<td><?php echo $feuser->phone; ?></td>				
				<td><?php echo $feuser->city; ?></td>				
				<td><?php echo $feuser->company; ?></td>	
				<td><a href='<?php echo $path; ?><?php echo $feuser->uid; ?>'>>> <?php echo messetool\Modules\Modules\Backend\Controllers\ControllerBase::translate('update'); ?></a></td>

				</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php } ?><?php } ?></div>
	</section>	