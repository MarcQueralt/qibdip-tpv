<div class="supplierInvoices form">
<?php echo $this->Form->create('SupplierInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Supplier Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('supplier_invoice_number');
		echo $this->Form->input('supplier_id');
		echo $this->Form->input('supplier_invoice_date');
		echo $this->Form->input('supplier_invoice_amount');
		echo $this->Form->input('supplier_invoice_vat');
		echo $this->Form->input('supplier_invoice_vat_re');
		echo $this->Form->input('supplier_invoice_status_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SupplierInvoice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SupplierInvoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Supplier Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoice Statuses'), array('controller' => 'supplier_invoice_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice Status'), array('controller' => 'supplier_invoice_statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>