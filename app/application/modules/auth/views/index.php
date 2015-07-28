<h1><?php echo lang('index_heading');?></h1>
<p><?php echo lang('index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table cellpadding=0 cellspacing=10>
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_groups_th');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
	<?php foreach ($user as $users):?>
		<tr>
            <td><?php echo htmlspecialchars($users->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($users->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($users->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($users->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($users->active) ? anchor("auth/deactivate/".$users->id, lang('index_active_link')) : anchor("auth/activate/". $users->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("auth/edit_user/".$users->id, 'Edit') ;?></td>
		</tr>
	<?php endforeach;?>
</table>

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>