<div class="stocks view">
<h2><?php  echo __('Stock'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Type'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article Reference'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['article_reference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article Model'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['article_model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article Size'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['article_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Raw Material Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stock['RawMaterialType']['raw_mat_type_name'], array('controller' => 'raw_material_types', 'action' => 'view', $stock['RawMaterialType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Raw Mat Units'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['raw_mat_units']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Raw Mat Userfield01'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['raw_mat_userfield01']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Raw Mat Unit Price'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['raw_mat_unit_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Comment'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Userfield01'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_userfield01']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Userfield02'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_userfield02']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Userfield03'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_userfield03']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Buy Price'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_buy_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Vat'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_vat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Vat Re'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_vat_re']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Sale Price'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stock_sale_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Slip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stock['SupplierSlip']['supplier_slip_num'], array('controller' => 'supplier_slips', 'action' => 'view', $stock['SupplierSlip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Slip Line'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['supplier_slip_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stock['SupplierInvoice']['supplier_invoice_number'], array('controller' => 'supplier_invoices', 'action' => 'view', $stock['SupplierInvoice']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stock'), array('action' => 'edit', $stock['Stock']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stock'), array('action' => 'delete', $stock['Stock']['id']), null, __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Raw Material Types'), array('controller' => 'raw_material_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Raw Material Type'), array('controller' => 'raw_material_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Slips'), array('controller' => 'supplier_slips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Slip'), array('controller' => 'supplier_slips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoices'), array('controller' => 'supplier_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
