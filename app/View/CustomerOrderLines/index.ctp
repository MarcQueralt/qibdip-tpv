<div class="customerOrderLines index">
	<h2><?php echo __('Customer Order Lines'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_line_number'); ?></th>
			<th><?php echo $this->Paginator->sort('order_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_line_type'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_line_description'); ?></th>
			<th><?php echo $this->Paginator->sort('order_line_is_left_article'); ?></th>
			<th><?php echo $this->Paginator->sort('order_line_left_article_description'); ?></th>
			<th><?php echo $this->Paginator->sort('order_line_due_date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_invoice_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_invoice_line_number'); ?></th>
			<th><?php echo $this->Paginator->sort('order_line_amout'); ?></th>
			<th><?php echo $this->Paginator->sort('order_line_vat'); ?></th>
			<th><?php echo $this->Paginator->sort('order_line_comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($customerOrderLines as $customerOrderLine): ?>
	<tr>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerOrderLine['CustomerOrder']['id'], array('controller' => 'customer_orders', 'action' => 'view', $customerOrderLine['CustomerOrder']['id'])); ?>
		</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['order_line_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerOrderLine['OrderStatus']['order_status_name'], array('controller' => 'order_statuses', 'action' => 'view', $customerOrderLine['OrderStatus']['id'])); ?>
		</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['order_line_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerOrderLine['Stock']['id'], array('controller' => 'stocks', 'action' => 'view', $customerOrderLine['Stock']['id'])); ?>
		</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['order_line_description']); ?>&nbsp;</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['order_line_is_left_article']); ?>&nbsp;</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['order_line_left_article_description']); ?>&nbsp;</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['order_line_due_date']); ?>&nbsp;</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['created']); ?>&nbsp;</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerOrderLine['CustomerInvoice']['customer_invoice_number'], array('controller' => 'customer_invoices', 'action' => 'view', $customerOrderLine['CustomerInvoice']['id'])); ?>
		</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['customer_invoice_line_number']); ?>&nbsp;</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['order_line_amout']); ?>&nbsp;</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['order_line_vat']); ?>&nbsp;</td>
		<td><?php echo h($customerOrderLine['CustomerOrderLine']['order_line_comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customerOrderLine['CustomerOrderLine']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customerOrderLine['CustomerOrderLine']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customerOrderLine['CustomerOrderLine']['id']), null, __('Are you sure you want to delete # %s?', $customerOrderLine['CustomerOrderLine']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer Order Line'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Statuses'), array('controller' => 'order_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Status'), array('controller' => 'order_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('controller' => 'customer_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice'), array('controller' => 'customer_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
