<div class="stocks index">
	<h2><?php echo __('Stocks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_type'); ?></th>
			<th><?php echo $this->Paginator->sort('article_reference'); ?></th>
			<th><?php echo $this->Paginator->sort('article_model'); ?></th>
			<th><?php echo $this->Paginator->sort('article_size'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_material_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_mat_units'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_mat_userfield01'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_mat_unit_price'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_comment'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_userfield01'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_userfield02'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_userfield03'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_buy_price'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_vat'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_vat_re'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_sale_price'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_slip_id'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_slip_line'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_invoice_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($stocks as $stock): ?>
	<tr>
		<td><?php echo h($stock['Stock']['id']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_type']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['article_reference']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['article_model']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['article_size']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stock['RawMaterialType']['id'], array('controller' => 'raw_material_types', 'action' => 'view', $stock['RawMaterialType']['id'])); ?>
		</td>
		<td><?php echo h($stock['Stock']['raw_mat_units']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['raw_mat_userfield01']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['raw_mat_unit_price']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_comment']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_userfield01']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_userfield02']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_userfield03']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_buy_price']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_vat']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_vat_re']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['stock_sale_price']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['created']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stock['SupplierSlip']['id'], array('controller' => 'supplier_slips', 'action' => 'view', $stock['SupplierSlip']['id'])); ?>
		</td>
		<td><?php echo h($stock['Stock']['supplier_slip_line']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stock['SupplierInvoice']['id'], array('controller' => 'supplier_invoices', 'action' => 'view', $stock['SupplierInvoice']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stock['Stock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stock['Stock']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stock['Stock']['id']), null, __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?></li>
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
