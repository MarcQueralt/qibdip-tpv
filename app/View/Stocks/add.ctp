<div class="stocks form">
<?php echo $this->Form->create('Stock'); ?>
	<fieldset>
		<legend><?php echo __('Add Stock'); ?></legend>
	<?php
		echo $this->Form->input('stock_type');
		echo $this->Form->input('article_reference');
		echo $this->Form->input('article_model');
		echo $this->Form->input('article_size');
		echo $this->Form->input('raw_material_type_id');
		echo $this->Form->input('raw_mat_units');
		echo $this->Form->input('raw_mat_userfield01');
		echo $this->Form->input('raw_mat_unit_price');
		echo $this->Form->input('stock_comment');
		echo $this->Form->input('stock_userfield01');
		echo $this->Form->input('stock_userfield02');
		echo $this->Form->input('stock_userfield03');
		echo $this->Form->input('stock_buy_price');
		echo $this->Form->input('stock_vat');
		echo $this->Form->input('stock_vat_re');
		echo $this->Form->input('stock_sale_price');
		echo $this->Form->input('supplier_slip_id');
		echo $this->Form->input('supplier_slip_line');
		echo $this->Form->input('supplier_invoice_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Raw Material Types'), array('controller' => 'raw_material_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Raw Material Type'), array('controller' => 'raw_material_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Slips'), array('controller' => 'supplier_slips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Slip'), array('controller' => 'supplier_slips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoices'), array('controller' => 'supplier_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
