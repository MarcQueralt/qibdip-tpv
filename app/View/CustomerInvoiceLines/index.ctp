<div class="customerInvoiceLines index">
	<h2><?php echo __('Customer Invoice Lines'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_invoice_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_invoice_line_number'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_line_number'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_invoice_line_type'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_invoice_line_description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_invoice_line_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_invoice_line_vat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($customerInvoiceLines as $customerInvoiceLine): ?>
	<tr>
		<td><?php echo h($customerInvoiceLine['CustomerInvoiceLine']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerInvoiceLine['CustomerInvoice']['customer_invoice_number'], array('controller' => 'customer_invoices', 'action' => 'view', $customerInvoiceLine['CustomerInvoice']['id'])); ?>
		</td>
		<td><?php echo h($customerInvoiceLine['CustomerInvoiceLine']['customer_invoice_line_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerInvoiceLine['CustomerOrder']['id'], array('controller' => 'customer_orders', 'action' => 'view', $customerInvoiceLine['CustomerOrder']['id'])); ?>
		</td>
		<td><?php echo h($customerInvoiceLine['CustomerInvoiceLine']['order_line_number']); ?>&nbsp;</td>
		<td><?php echo h($customerInvoiceLine['CustomerInvoiceLine']['customer_invoice_line_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerInvoiceLine['Stock']['id'], array('controller' => 'stocks', 'action' => 'view', $customerInvoiceLine['Stock']['id'])); ?>
		</td>
		<td><?php echo h($customerInvoiceLine['CustomerInvoiceLine']['customer_invoice_line_description']); ?>&nbsp;</td>
		<td><?php echo h($customerInvoiceLine['CustomerInvoiceLine']['created']); ?>&nbsp;</td>
		<td><?php echo h($customerInvoiceLine['CustomerInvoiceLine']['modified']); ?>&nbsp;</td>
		<td><?php echo h($customerInvoiceLine['CustomerInvoiceLine']['customer_invoice_line_amount']); ?>&nbsp;</td>
		<td><?php echo h($customerInvoiceLine['CustomerInvoiceLine']['customer_invoice_line_vat']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customerInvoiceLine['CustomerInvoiceLine']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customerInvoiceLine['CustomerInvoiceLine']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customerInvoiceLine['CustomerInvoiceLine']['id']), null, __('Are you sure you want to delete # %s?', $customerInvoiceLine['CustomerInvoiceLine']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer Invoice Line'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('controller' => 'customer_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice'), array('controller' => 'customer_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
