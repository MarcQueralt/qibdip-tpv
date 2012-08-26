<div class="customerOrders form">
<?php echo $this->Form->create('CustomerOrder'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer Order'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('order_status_id');
		echo $this->Form->input('order_date');
		echo $this->Form->input('order_comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customer Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Statuses'), array('controller' => 'order_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Status'), array('controller' => 'order_statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
