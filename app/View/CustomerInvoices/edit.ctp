<div class="customerInvoices form">
<?php echo $this->Form->create('CustomerInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Customer Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('customer_invoice_date');
		echo $this->Form->input('customer_invoice_number');
		echo $this->Form->input('customer_invoice_comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CustomerInvoice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CustomerInvoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoice Lines'), array('controller' => 'customer_invoice_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice Line'), array('controller' => 'customer_invoice_lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Order Lines'), array('controller' => 'customer_order_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
	</ul>
</div>
