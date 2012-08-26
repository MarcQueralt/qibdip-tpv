<div class="supplierInvoiceStatuses view">
<h2><?php  echo __('Supplier Invoice Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($supplierInvoiceStatus['SupplierInvoiceStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sup Inv Status Name'); ?></dt>
		<dd>
			<?php echo h($supplierInvoiceStatus['SupplierInvoiceStatus']['sup_inv_status_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sup Inv Is Final Status'); ?></dt>
		<dd>
			<?php echo h($supplierInvoiceStatus['SupplierInvoiceStatus']['sup_inv_is_final_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($supplierInvoiceStatus['SupplierInvoiceStatus']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($supplierInvoiceStatus['SupplierInvoiceStatus']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Supplier Invoice Status'), array('action' => 'edit', $supplierInvoiceStatus['SupplierInvoiceStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supplier Invoice Status'), array('action' => 'delete', $supplierInvoiceStatus['SupplierInvoiceStatus']['id']), null, __('Are you sure you want to delete # %s?', $supplierInvoiceStatus['SupplierInvoiceStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoice Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoices'), array('controller' => 'supplier_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Supplier Invoices'); ?></h3>
	<?php if (!empty($supplierInvoiceStatus['SupplierInvoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Supplier Invoice Number'); ?></th>
		<th><?php echo __('Supplier Invoice Supplier Id'); ?></th>
		<th><?php echo __('Supplier Invoice Date'); ?></th>
		<th><?php echo __('Supplier Invoice Amount'); ?></th>
		<th><?php echo __('Supplier Invoice Vat'); ?></th>
		<th><?php echo __('Supplier Invoice Vat Re'); ?></th>
		<th><?php echo __('Supplier Invoice Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($supplierInvoiceStatus['SupplierInvoice'] as $supplierInvoice): ?>
		<tr>
			<td><?php echo $supplierInvoice['id']; ?></td>
			<td><?php echo $supplierInvoice['supplier_invoice_number']; ?></td>
			<td><?php echo $supplierInvoice['supplier_invoice_supplier_id']; ?></td>
			<td><?php echo $supplierInvoice['supplier_invoice_date']; ?></td>
			<td><?php echo $supplierInvoice['supplier_invoice_amount']; ?></td>
			<td><?php echo $supplierInvoice['supplier_invoice_vat']; ?></td>
			<td><?php echo $supplierInvoice['supplier_invoice_vat_re']; ?></td>
			<td><?php echo $supplierInvoice['supplier_invoice_status_id']; ?></td>
			<td><?php echo $supplierInvoice['created']; ?></td>
			<td><?php echo $supplierInvoice['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'supplier_invoices', 'action' => 'view', $supplierInvoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'supplier_invoices', 'action' => 'edit', $supplierInvoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'supplier_invoices', 'action' => 'delete', $supplierInvoice['id']), null, __('Are you sure you want to delete # %s?', $supplierInvoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
