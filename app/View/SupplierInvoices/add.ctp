<div class="supplierInvoices form">
<?php echo $this->Form->create('SupplierInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Supplier Invoice'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Supplier Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoice Statuses'), array('controller' => 'supplier_invoice_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice Status'), array('controller' => 'supplier_invoice_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Raw Materials'), array('controller' => 'raw_materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Raw Material'), array('controller' => 'raw_materials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
