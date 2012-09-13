<div class="customerOrders index">
	<h2><?php echo __('Customer Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_date'); ?></th>
			<th><?php echo $this->Paginator->sort('order_comments'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($customerOrders as $customerOrder): ?>
	<tr>
		<td><?php echo h($customerOrder['CustomerOrder']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerOrder['Customer']['customer_name'], array('controller' => 'customers', 'action' => 'view', $customerOrder['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($customerOrder['OrderStatus']['order_status_name'], array('controller' => 'order_statuses', 'action' => 'view', $customerOrder['OrderStatus']['id'])); ?>
		</td>
		<td><?php echo h($customerOrder['CustomerOrder']['order_date']); ?>&nbsp;</td>
		<td><?php echo h($customerOrder['CustomerOrder']['order_comments']); ?>&nbsp;</td>
		<td><?php echo h($customerOrder['CustomerOrder']['created']); ?>&nbsp;</td>
		<td><?php echo h($customerOrder['CustomerOrder']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customerOrder['CustomerOrder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customerOrder['CustomerOrder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customerOrder['CustomerOrder']['id']), null, __('Are you sure you want to delete # %s?', $customerOrder['CustomerOrder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Statuses'), array('controller' => 'order_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Status'), array('controller' => 'order_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoice Lines'), array('controller' => 'customer_invoice_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice Line'), array('controller' => 'customer_invoice_lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Order Lines'), array('controller' => 'customer_order_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Payments'), array('controller' => 'customer_payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Payment'), array('controller' => 'customer_payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
