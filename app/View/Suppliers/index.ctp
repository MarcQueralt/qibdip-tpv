<div class="suppliers index">
	<h2><?php echo __('Suppliers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_name'); ?></th>
                        <th><?php echo $this->Paginator->sort('supplier_abr'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_address'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('town'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_vat_number'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_phone1'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_phone2'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($suppliers as $supplier): ?>
	<tr>
		<td><?php echo h($supplier['Supplier']['id']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['supplier_name']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['supplier_abr']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['supplier_address']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['zip']); ?>&nbsp;</td>
                <td><?php echo h($supplier['Supplier']['town']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['supplier_vat_number']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['supplier_phone1']); ?>&nbsp;</td>
		<td><?php echo h($supplier['Supplier']['supplier_phone2']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $supplier['Supplier']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $supplier['Supplier']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $supplier['Supplier']['id']), null, __('Are you sure you want to delete # %s?', $supplier['Supplier']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Supplier'), array('action' => 'add')); ?></li>
	</ul>
</div>
