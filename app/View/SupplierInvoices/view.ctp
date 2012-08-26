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
			<?php echo $this->Html->link($supplierInvoice['Supplier']['supplier_name'], array('controller' => 'suppliers', 'action' => 'view', $supplierInvoice['Supplier']['id'])); ?>
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
			<?php echo $this->Html->link($supplierInvoice['SupplierInvoiceStatus']['sup_inv_status_name'], array('controller' => 'supplier_invoice_statuses', 'action' => 'view', $supplierInvoice['SupplierInvoiceStatus']['id'])); ?>
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
	</ul>
</div>
