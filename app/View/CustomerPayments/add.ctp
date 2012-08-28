<div class="customerPayments form">
<?php echo $this->Form->create('CustomerPayment'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer Payment'); ?></legend>
	<?php
		echo $this->Form->input('payment_date');
		echo $this->Form->input('payment_amount');
		echo $this->Form->input('payment_comments');
		echo $this->Form->input('payment_is_down_payment');
		echo $this->Form->input('customer_order_id');
		echo $this->Form->input('customer_invoice_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customer Payments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('controller' => 'customer_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice'), array('controller' => 'customer_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
