<div class="customerInvoiceStatuses index">
	<h2><?php echo __('Customer Invoice Statuses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cus_inv_status_name'); ?></th>
			<th><?php echo $this->Paginator->sort('cus_inv_is_final_status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($customerInvoiceStatuses as $customerInvoiceStatus): ?>
	<tr>
		<td><?php echo h($customerInvoiceStatus['CustomerInvoiceStatus']['id']); ?>&nbsp;</td>
		<td><?php echo h($customerInvoiceStatus['CustomerInvoiceStatus']['cus_inv_status_name']); ?>&nbsp;</td>
		<td><?php echo h($customerInvoiceStatus['CustomerInvoiceStatus']['cus_inv_is_final_status']); ?>&nbsp;</td>
		<td><?php echo h($customerInvoiceStatus['CustomerInvoiceStatus']['created']); ?>&nbsp;</td>
		<td><?php echo h($customerInvoiceStatus['CustomerInvoiceStatus']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customerInvoiceStatus['CustomerInvoiceStatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customerInvoiceStatus['CustomerInvoiceStatus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customerInvoiceStatus['CustomerInvoiceStatus']['id']), null, __('Are you sure you want to delete # %s?', $customerInvoiceStatus['CustomerInvoiceStatus']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer Invoice Status'), array('action' => 'add')); ?></li>
	</ul>
</div>
