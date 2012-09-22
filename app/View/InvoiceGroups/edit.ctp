<div class="invoiceGroups form">
<?php echo $this->Form->create('InvoiceGroup'); ?>
	<fieldset>
		<legend><?php echo __('Edit Invoice Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('description');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InvoiceGroup.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('InvoiceGroup.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoice Groups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('controller' => 'customer_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice'), array('controller' => 'customer_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
