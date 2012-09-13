<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php
		echo $this->Form->input('customer_name');
		echo $this->Form->input('customer_address');
		echo $this->Form->input('town_id',array('empty'=>'---'));
		echo $this->Form->input('customer_vat_number');
		echo $this->Form->input('customer_phone1');
		echo $this->Form->input('customer_phone2');
		echo $this->Form->input('customer_email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
	</ul>
</div>
