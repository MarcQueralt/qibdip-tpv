<div class="customerInvoices form">
<?php echo $this->Form->create('CustomerInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Customer Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->hidden('customer_id');
		echo $this->Form->hidden('customer_invoice_date');
		echo $this->Form->input('serie_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Abort'), array('controller' => 'customerOrders', 'action' => 'view',$this->Form->value('CustomerInvoice.customer_order_id'))); ?> </li>
        </ul>
</div>
