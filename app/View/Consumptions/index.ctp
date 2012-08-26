<div class="consumptions index">
	<h2><?php echo __('Consumptions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('article_id'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_material_id'); ?></th>
			<th><?php echo $this->Paginator->sort('consumption_raw_mat_consumed_units'); ?></th>
			<th><?php echo $this->Paginator->sort('consumption_cost_01'); ?></th>
			<th><?php echo $this->Paginator->sort('consumption_cost_02'); ?></th>
			<th><?php echo $this->Paginator->sort('consumption_cost_03'); ?></th>
			<th><?php echo $this->Paginator->sort('consumption_cost_04'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($consumptions as $consumption): ?>
	<tr>
		<td><?php echo h($consumption['Consumption']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($consumption['Article']['article_reference'], array('controller' => 'articles', 'action' => 'view', $consumption['Article']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($consumption['RawMaterial']['id'], array('controller' => 'raw_materials', 'action' => 'view', $consumption['RawMaterial']['id'])); ?>
		</td>
		<td><?php echo h($consumption['Consumption']['consumption_raw_mat_consumed_units']); ?>&nbsp;</td>
		<td><?php echo h($consumption['Consumption']['consumption_cost_01']); ?>&nbsp;</td>
		<td><?php echo h($consumption['Consumption']['consumption_cost_02']); ?>&nbsp;</td>
		<td><?php echo h($consumption['Consumption']['consumption_cost_03']); ?>&nbsp;</td>
		<td><?php echo h($consumption['Consumption']['consumption_cost_04']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consumption['Consumption']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consumption['Consumption']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consumption['Consumption']['id']), null, __('Are you sure you want to delete # %s?', $consumption['Consumption']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Consumption'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Raw Materials'), array('controller' => 'raw_materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Raw Material'), array('controller' => 'raw_materials', 'action' => 'add')); ?> </li>
	</ul>
</div>
