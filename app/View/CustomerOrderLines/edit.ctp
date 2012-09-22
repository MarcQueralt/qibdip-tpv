<div class="customerOrderLines form">
<?php echo $this->Form->create('CustomerOrderLine'); ?>
	<fieldset>
		<legend><?php echo __('Edit Customer Order Line'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_order_id');
		echo $this->Form->input('order_line_number');
                echo $this->Form->input('service_type_id',array('empty'=>'---'));
		echo $this->Form->input('order_status_id');
		echo $this->Form->input('order_line_type');
		echo $this->Form->input('stock_id');
		echo $this->Form->input('order_line_description');
		echo $this->Form->input('order_line_is_left_article');
		echo $this->Form->input('order_line_left_article_description');
		echo $this->Form->input('order_line_due_date');
		echo $this->Form->input('customer_invoice_id');
		echo $this->Form->input('customer_invoice_line_number');
		echo $this->Form->input('order_line_amout');
		echo $this->Form->input('order_line_vat');
		echo $this->Form->input('order_line_comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CustomerOrderLine.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CustomerOrderLine.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Order Lines'), array('action' => 'index')); ?></li>
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
