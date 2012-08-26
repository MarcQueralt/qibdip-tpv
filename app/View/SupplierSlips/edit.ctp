<div class="supplierSlips form">
<?php echo $this->Form->create('SupplierSlip'); ?>
	<fieldset>
		<legend><?php echo __('Edit Supplier Slip'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('supplier_slip_num');
		echo $this->Form->input('supplier_id');
		echo $this->Form->input('supplier_slip_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SupplierSlip.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SupplierSlip.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Supplier Slips'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
	</ul>
</div>
