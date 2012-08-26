<div class="supplierInvoices index">
	<h2><?php echo __('Supplier Invoices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_invoice_number'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_invoice_date'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_invoice_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_invoice_vat'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_invoice_vat_re'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_invoice_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($supplierInvoices as $supplierInvoice): ?>
	<tr>
		<td><?php echo h($supplierInvoice['SupplierInvoice']['id']); ?>&nbsp;</td>
		<td><?php echo h($supplierInvoice['SupplierInvoice']['supplier_invoice_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($supplierInvoice['Supplier']['supplier_name'], array('controller' => 'suppliers', 'action' => 'view', $supplierInvoice['Supplier']['id'])); ?>
		</td>
		<td><?php echo h($supplierInvoice['SupplierInvoice']['supplier_invoice_date']); ?>&nbsp;</td>
		<td><?php echo h($supplierInvoice['SupplierInvoice']['supplier_invoice_amount']); ?>&nbsp;</td>
		<td><?php echo h($supplierInvoice['SupplierInvoice']['supplier_invoice_vat']); ?>&nbsp;</td>
		<td><?php echo h($supplierInvoice['SupplierInvoice']['supplier_invoice_vat_re']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($supplierInvoice['SupplierInvoiceStatus']['sup_inv_status_name'], array('controller' => 'supplier_invoice_statuses', 'action' => 'view', $supplierInvoice['SupplierInvoiceStatus']['id'])); ?>
		</td>
		<td><?php echo h($supplierInvoice['SupplierInvoice']['created']); ?>&nbsp;</td>
		<td><?php echo h($supplierInvoice['SupplierInvoice']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $supplierInvoice['SupplierInvoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $supplierInvoice['SupplierInvoice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $supplierInvoice['SupplierInvoice']['id']), null, __('Are you sure you want to delete # %s?', $supplierInvoice['SupplierInvoice']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Supplier Invoice'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoice Statuses'), array('controller' => 'supplier_invoice_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice Status'), array('controller' => 'supplier_invoice_statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
