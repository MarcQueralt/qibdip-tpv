<div class="customerInvoices form">
<?php echo $this->Form->create('CustomerInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer Invoice'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('customer_invoice_date');
		echo $this->Form->input('customer_invoice_number');
		echo $this->Form->input('customer_invoice_status');
		echo $this->Form->input('customer_invoice_comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoice Lines'), array('controller' => 'customer_invoice_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice Line'), array('controller' => 'customer_invoice_lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Order Lines'), array('controller' => 'customer_order_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Payments'), array('controller' => 'customer_payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Payment'), array('controller' => 'customer_payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
