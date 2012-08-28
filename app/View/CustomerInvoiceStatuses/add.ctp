<div class="customerInvoiceStatuses form">
<?php echo $this->Form->create('CustomerInvoiceStatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer Invoice Status'); ?></legend>
	<?php
		echo $this->Form->input('cus_inv_status_name');
		echo $this->Form->input('cus_inv_is_final_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customer Invoice Statuses'), array('action' => 'index')); ?></li>
	</ul>
</div>
