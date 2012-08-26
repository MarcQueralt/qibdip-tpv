<div class="customerInvoiceLines form">
<?php echo $this->Form->create('CustomerInvoiceLine'); ?>
	<fieldset>
		<legend><?php echo __('Edit Customer Invoice Line'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_invoice_id');
		echo $this->Form->input('customer_invoice_line_number');
		echo $this->Form->input('customer_order_id');
		echo $this->Form->input('order_line_number');
		echo $this->Form->input('customer_invoice_line_type');
		echo $this->Form->input('stock_id');
		echo $this->Form->input('customer_invoice_line_description');
		echo $this->Form->input('customer_invoice_line_amount');
		echo $this->Form->input('customer_invoice_line_vat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CustomerInvoiceLine.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CustomerInvoiceLine.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Invoice Lines'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('controller' => 'customer_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice'), array('controller' => 'customer_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
