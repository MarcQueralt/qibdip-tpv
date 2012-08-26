<div class="supplierInvoiceStatuses form">
<?php echo $this->Form->create('SupplierInvoiceStatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Supplier Invoice Status'); ?></legend>
	<?php
		echo $this->Form->input('sup_inv_status_name');
		echo $this->Form->input('sup_inv_is_final_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Supplier Invoice Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Supplier Invoices'), array('controller' => 'supplier_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
