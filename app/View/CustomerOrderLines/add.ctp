<div class="customerOrderLines form">
<?php echo $this->Form->create('CustomerOrderLine'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer Order Line'); ?></legend>
	<?php
		echo $this->Form->input('customer_order_id',array('empty'=>'---'));
		echo $this->Form->input('order_line_number');
		echo $this->Form->input('order_line_type');
		echo $this->Form->input('stock_id');
		echo $this->Form->input('order_line_description');
		echo $this->Form->input('order_line_is_left_article');
		echo $this->Form->input('order_line_left_article_description');
		echo $this->Form->input('order_line_due_date');
		echo $this->Form->input('customer_invoice_id');
		echo $this->Form->input('customer_invoice_line_number');
		echo $this->Form->input('order_line_amount');
		echo $this->Form->input('order_line_vat');
		echo $this->Form->input('order_line_comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customer Order Lines'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
	</ul>
</div>
