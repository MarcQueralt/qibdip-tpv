<div class="supplierInvoices view">
<h2><?php  echo __('Supplier Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($supplierInvoice['SupplierInvoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Invoice Number'); ?></dt>
		<dd>
			<?php echo h($supplierInvoice['SupplierInvoice']['supplier_invoice_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($supplierInvoice['Supplier']['id'], array('controller' => 'suppliers', 'action' => 'view', $supplierInvoice['Supplier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Invoice Date'); ?></dt>
		<dd>
			<?php echo h($supplierInvoice['SupplierInvoice']['supplier_invoice_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Invoice Amount'); ?></dt>
		<dd>
			<?php echo h($supplierInvoice['SupplierInvoice']['supplier_invoice_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Invoice Vat'); ?></dt>
		<dd>
			<?php echo h($supplierInvoice['SupplierInvoice']['supplier_invoice_vat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Invoice Vat Re'); ?></dt>
		<dd>
			<?php echo h($supplierInvoice['SupplierInvoice']['supplier_invoice_vat_re']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Invoice Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($supplierInvoice['SupplierInvoiceStatus']['id'], array('controller' => 'supplier_invoice_statuses', 'action' => 'view', $supplierInvoice['SupplierInvoiceStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($supplierInvoice['SupplierInvoice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($supplierInvoice['SupplierInvoice']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Supplier Invoice'), array('action' => 'edit', $supplierInvoice['SupplierInvoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supplier Invoice'), array('action' => 'delete', $supplierInvoice['SupplierInvoice']['id']), null, __('Are you sure you want to delete # %s?', $supplierInvoice['SupplierInvoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Articles'); ?></h3>
	<?php if (!empty($supplierInvoice['Article'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Stock Type'); ?></th>
		<th><?php echo __('Article Model'); ?></th>
		<th><?php echo __('Article Size'); ?></th>
		<th><?php echo __('Stock Comment'); ?></th>
		<th><?php echo __('Stock Userfield01'); ?></th>
		<th><?php echo __('Stock Userfield02'); ?></th>
		<th><?php echo __('Stock Userfield03'); ?></th>
		<th><?php echo __('Stock Buy Price'); ?></th>
		<th><?php echo __('Stock Vat'); ?></th>
		<th><?php echo __('Stock Vat Re'); ?></th>
		<th><?php echo __('Stock Sale Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Supplier Slip Id'); ?></th>
		<th><?php echo __('Supplier Slip Line'); ?></th>
		<th><?php echo __('Supplier Invoice Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($supplierInvoice['Article'] as $article): ?>
		<tr>
			<td><?php echo $article['id']; ?></td>
			<td><?php echo $article['stock_type']; ?></td>
			<td><?php echo $article['article_model']; ?></td>
			<td><?php echo $article['article_size']; ?></td>
			<td><?php echo $article['stock_comment']; ?></td>
			<td><?php echo $article['stock_userfield01']; ?></td>
			<td><?php echo $article['stock_userfield02']; ?></td>
			<td><?php echo $article['stock_userfield03']; ?></td>
			<td><?php echo $article['stock_buy_price']; ?></td>
			<td><?php echo $article['stock_vat']; ?></td>
			<td><?php echo $article['stock_vat_re']; ?></td>
			<td><?php echo $article['stock_sale_price']; ?></td>
			<td><?php echo $article['created']; ?></td>
			<td><?php echo $article['modified']; ?></td>
			<td><?php echo $article['supplier_slip_id']; ?></td>
			<td><?php echo $article['supplier_slip_line']; ?></td>
			<td><?php echo $article['supplier_invoice_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articles', 'action' => 'view', $article['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articles', 'action' => 'edit', $article['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articles', 'action' => 'delete', $article['id']), null, __('Are you sure you want to delete # %s?', $article['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Raw Materials'); ?></h3>
	<?php if (!empty($supplierInvoice['RawMaterial'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Stock Type'); ?></th>
		<th><?php echo __('Raw Material Type Id'); ?></th>
		<th><?php echo __('Raw Mat Units'); ?></th>
		<th><?php echo __('Raw Mat Userfield01'); ?></th>
		<th><?php echo __('Raw Mat Unit Price'); ?></th>
		<th><?php echo __('Stock Comment'); ?></th>
		<th><?php echo __('Stock Userfield01'); ?></th>
		<th><?php echo __('Stock Userfield02'); ?></th>
		<th><?php echo __('Stock Userfield03'); ?></th>
		<th><?php echo __('Stock Buy Price'); ?></th>
		<th><?php echo __('Stock Vat'); ?></th>
		<th><?php echo __('Stock Vat Re'); ?></th>
		<th><?php echo __('Stock Sale Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Supplier Slip Id'); ?></th>
		<th><?php echo __('Supplier Slip Line'); ?></th>
		<th><?php echo __('Supplier Invoice Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($supplierInvoice['RawMaterial'] as $rawMaterial): ?>
		<tr>
			<td><?php echo $rawMaterial['id']; ?></td>
			<td><?php echo $rawMaterial['stock_type']; ?></td>
			<td><?php echo $rawMaterial['raw_material_type_id']; ?></td>
			<td><?php echo $rawMaterial['raw_mat_units']; ?></td>
			<td><?php echo $rawMaterial['raw_mat_userfield01']; ?></td>
			<td><?php echo $rawMaterial['raw_mat_unit_price']; ?></td>
			<td><?php echo $rawMaterial['stock_comment']; ?></td>
			<td><?php echo $rawMaterial['stock_userfield01']; ?></td>
			<td><?php echo $rawMaterial['stock_userfield02']; ?></td>
			<td><?php echo $rawMaterial['stock_userfield03']; ?></td>
			<td><?php echo $rawMaterial['stock_buy_price']; ?></td>
			<td><?php echo $rawMaterial['stock_vat']; ?></td>
			<td><?php echo $rawMaterial['stock_vat_re']; ?></td>
			<td><?php echo $rawMaterial['stock_sale_price']; ?></td>
			<td><?php echo $rawMaterial['created']; ?></td>
			<td><?php echo $rawMaterial['modified']; ?></td>
			<td><?php echo $rawMaterial['supplier_slip_id']; ?></td>
			<td><?php echo $rawMaterial['supplier_slip_line']; ?></td>
			<td><?php echo $rawMaterial['supplier_invoice_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'raw_materials', 'action' => 'view', $rawMaterial['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'raw_materials', 'action' => 'edit', $rawMaterial['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'raw_materials', 'action' => 'delete', $rawMaterial['id']), null, __('Are you sure you want to delete # %s?', $rawMaterial['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Raw Material'), array('controller' => 'raw_materials', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stocks'); ?></h3>
	<?php if (!empty($supplierInvoice['Stock'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Stock Type'); ?></th>
		<th><?php echo __('Article Model'); ?></th>
		<th><?php echo __('Article Size'); ?></th>
		<th><?php echo __('Raw Material Type Id'); ?></th>
		<th><?php echo __('Raw Mat Units'); ?></th>
		<th><?php echo __('Raw Mat Userfield01'); ?></th>
		<th><?php echo __('Raw Mat Unit Price'); ?></th>
		<th><?php echo __('Stock Comment'); ?></th>
		<th><?php echo __('Stock Userfield01'); ?></th>
		<th><?php echo __('Stock Userfield02'); ?></th>
		<th><?php echo __('Stock Userfield03'); ?></th>
		<th><?php echo __('Stock Buy Price'); ?></th>
		<th><?php echo __('Stock Vat'); ?></th>
		<th><?php echo __('Stock Vat Re'); ?></th>
		<th><?php echo __('Stock Sale Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Supplier Slip Id'); ?></th>
		<th><?php echo __('Supplier Slip Line'); ?></th>
		<th><?php echo __('Supplier Invoice Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($supplierInvoice['Stock'] as $stock): ?>
		<tr>
			<td><?php echo $stock['id']; ?></td>
			<td><?php echo $stock['stock_type']; ?></td>
			<td><?php echo $stock['article_model']; ?></td>
			<td><?php echo $stock['article_size']; ?></td>
			<td><?php echo $stock['raw_material_type_id']; ?></td>
			<td><?php echo $stock['raw_mat_units']; ?></td>
			<td><?php echo $stock['raw_mat_userfield01']; ?></td>
			<td><?php echo $stock['raw_mat_unit_price']; ?></td>
			<td><?php echo $stock['stock_comment']; ?></td>
			<td><?php echo $stock['stock_userfield01']; ?></td>
			<td><?php echo $stock['stock_userfield02']; ?></td>
			<td><?php echo $stock['stock_userfield03']; ?></td>
			<td><?php echo $stock['stock_buy_price']; ?></td>
			<td><?php echo $stock['stock_vat']; ?></td>
			<td><?php echo $stock['stock_vat_re']; ?></td>
			<td><?php echo $stock['stock_sale_price']; ?></td>
			<td><?php echo $stock['created']; ?></td>
			<td><?php echo $stock['modified']; ?></td>
			<td><?php echo $stock['supplier_slip_id']; ?></td>
			<td><?php echo $stock['supplier_slip_line']; ?></td>
			<td><?php echo $stock['supplier_invoice_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stocks', 'action' => 'view', $stock['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stocks', 'action' => 'edit', $stock['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stocks', 'action' => 'delete', $stock['id']), null, __('Are you sure you want to delete # %s?', $stock['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
