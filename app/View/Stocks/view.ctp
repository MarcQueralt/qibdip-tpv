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
			<?php echo $this->Html->link($stock['RawMaterialType']['id'], array('controller' => 'raw_material_types', 'action' => 'view', $stock['RawMaterialType']['id'])); ?>
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
			<?php echo $this->Html->link($stock['SupplierSlip']['id'], array('controller' => 'supplier_slips', 'action' => 'view', $stock['SupplierSlip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Slip Line'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['supplier_slip_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stock['SupplierInvoice']['id'], array('controller' => 'supplier_invoices', 'action' => 'view', $stock['SupplierInvoice']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Customer Invoice Lines'), array('controller' => 'customer_invoice_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice Line'), array('controller' => 'customer_invoice_lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Order Lines'), array('controller' => 'customer_order_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Customer Invoice Lines'); ?></h3>
	<?php if (!empty($stock['CustomerInvoiceLine'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Invoice Id'); ?></th>
		<th><?php echo __('Customer Invoice Line Number'); ?></th>
		<th><?php echo __('Customer Order Id'); ?></th>
		<th><?php echo __('Order Line Number'); ?></th>
		<th><?php echo __('Customer Invoice Line Type'); ?></th>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('Customer Invoice Line Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Customer Invoice Line Amount'); ?></th>
		<th><?php echo __('Customer Invoice Line Vat'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($stock['CustomerInvoiceLine'] as $customerInvoiceLine): ?>
		<tr>
			<td><?php echo $customerInvoiceLine['id']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_id']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_line_number']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_order_id']; ?></td>
			<td><?php echo $customerInvoiceLine['order_line_number']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_line_type']; ?></td>
			<td><?php echo $customerInvoiceLine['stock_id']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_line_description']; ?></td>
			<td><?php echo $customerInvoiceLine['created']; ?></td>
			<td><?php echo $customerInvoiceLine['modified']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_line_amount']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_line_vat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customer_invoice_lines', 'action' => 'view', $customerInvoiceLine['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customer_invoice_lines', 'action' => 'edit', $customerInvoiceLine['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customer_invoice_lines', 'action' => 'delete', $customerInvoiceLine['id']), null, __('Are you sure you want to delete # %s?', $customerInvoiceLine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Invoice Line'), array('controller' => 'customer_invoice_lines', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Customer Order Lines'); ?></h3>
	<?php if (!empty($stock['CustomerOrderLine'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Order Id'); ?></th>
		<th><?php echo __('Order Line Number'); ?></th>
		<th><?php echo __('Order Status Id'); ?></th>
		<th><?php echo __('Order Line Type'); ?></th>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('Order Line Description'); ?></th>
		<th><?php echo __('Order Line Is Left Article'); ?></th>
		<th><?php echo __('Order Line Left Article Description'); ?></th>
		<th><?php echo __('Order Line Due Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Customer Invoice Id'); ?></th>
		<th><?php echo __('Customer Invoice Line Number'); ?></th>
		<th><?php echo __('Order Line Amout'); ?></th>
		<th><?php echo __('Order Line Vat'); ?></th>
		<th><?php echo __('Order Line Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($stock['CustomerOrderLine'] as $customerOrderLine): ?>
		<tr>
			<td><?php echo $customerOrderLine['id']; ?></td>
			<td><?php echo $customerOrderLine['customer_order_id']; ?></td>
			<td><?php echo $customerOrderLine['order_line_number']; ?></td>
			<td><?php echo $customerOrderLine['order_status_id']; ?></td>
			<td><?php echo $customerOrderLine['order_line_type']; ?></td>
			<td><?php echo $customerOrderLine['stock_id']; ?></td>
			<td><?php echo $customerOrderLine['order_line_description']; ?></td>
			<td><?php echo $customerOrderLine['order_line_is_left_article']; ?></td>
			<td><?php echo $customerOrderLine['order_line_left_article_description']; ?></td>
			<td><?php echo $customerOrderLine['order_line_due_date']; ?></td>
			<td><?php echo $customerOrderLine['created']; ?></td>
			<td><?php echo $customerOrderLine['modified']; ?></td>
			<td><?php echo $customerOrderLine['customer_invoice_id']; ?></td>
			<td><?php echo $customerOrderLine['customer_invoice_line_number']; ?></td>
			<td><?php echo $customerOrderLine['order_line_amout']; ?></td>
			<td><?php echo $customerOrderLine['order_line_vat']; ?></td>
			<td><?php echo $customerOrderLine['order_line_comments']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customer_order_lines', 'action' => 'view', $customerOrderLine['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customer_order_lines', 'action' => 'edit', $customerOrderLine['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customer_order_lines', 'action' => 'delete', $customerOrderLine['id']), null, __('Are you sure you want to delete # %s?', $customerOrderLine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
