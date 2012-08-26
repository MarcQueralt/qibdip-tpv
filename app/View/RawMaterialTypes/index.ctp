<div class="rawMaterialTypes index">
	<h2><?php echo __('Raw Material Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_mat_type_name'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_mat_type_is_partial_consume'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_mat_measuring_unit'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($rawMaterialTypes as $rawMaterialType): ?>
	<tr>
		<td><?php echo h($rawMaterialType['RawMaterialType']['id']); ?>&nbsp;</td>
		<td><?php echo h($rawMaterialType['RawMaterialType']['raw_mat_type_name']); ?>&nbsp;</td>
		<td><?php echo h($rawMaterialType['RawMaterialType']['raw_mat_type_is_partial_consume']); ?>&nbsp;</td>
		<td><?php echo h($rawMaterialType['RawMaterialType']['raw_mat_measuring_unit']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rawMaterialType['RawMaterialType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rawMaterialType['RawMaterialType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rawMaterialType['RawMaterialType']['id']), null, __('Are you sure you want to delete # %s?', $rawMaterialType['RawMaterialType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Raw Material Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
