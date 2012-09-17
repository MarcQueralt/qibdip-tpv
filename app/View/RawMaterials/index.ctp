<div class="rawMaterials index">
	<h2><?php echo __('Raw Materials'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_material_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_mat_units'); ?></th>
                        <th><?php echo $this->Paginator->sort('raw_mat_userfield01',  qibdipTPV_raw_uf01()); ?></th>
			<th><?php echo $this->Paginator->sort('stock_comment'); ?></th>
                        <th><?php echo $this->Paginator->sort('stock_userfield01',  qibdipTPV_stock_uf01()); ?></th>
                        <th><?php echo $this->Paginator->sort('stock_userfield02',  qibdipTPV_stock_uf02()); ?></th>
                        <th><?php echo $this->Paginator->sort('stock_userfield03', qibdipTPV_stock_uf03()); ?></th>
			<th><?php echo $this->Paginator->sort('stock_buy_price'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_vat'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_vat_re'); ?></th>
			<th><?php echo $this->Paginator->sort('raw_mat_unit_price'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_sale_price'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_slip_id'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_slip_line'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_invoice_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($rawMaterials as $rawMaterial): ?>
	<tr>
		<td><?php echo h($rawMaterial['RawMaterial']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rawMaterial['RawMaterialType']['raw_mat_type_name'], array('controller' => 'raw_material_types', 'action' => 'view', $rawMaterial['RawMaterialType']['id'])); ?>
		</td>
		<td><?php echo h($rawMaterial['RawMaterial']['raw_mat_units']); ?>&nbsp;</td>
		<td><?php echo h($rawMaterial['RawMaterial']['raw_mat_userfield01']); ?>&nbsp;</td>
		<td><?php echo h($rawMaterial['RawMaterial']['stock_comment']); ?>&nbsp;</td>
		<td><?php echo h($rawMaterial['RawMaterial']['stock_userfield01']); ?>&nbsp;</td>
		<td><?php echo h($rawMaterial['RawMaterial']['stock_userfield02']); ?>&nbsp;</td>
		<td><?php echo h($rawMaterial['RawMaterial']['stock_userfield03']); ?>&nbsp;</td>
		<td style="text-align: right;"><?php echo h($rawMaterial['RawMaterial']['stock_buy_price']); ?>&nbsp;</td>
		<td style="text-align: right;"><?php echo h($rawMaterial['RawMaterial']['stock_vat']); ?>&nbsp;</td>
		<td style="text-align: right;"><?php echo h($rawMaterial['RawMaterial']['stock_vat_re']); ?>&nbsp;</td>
		<td style="text-align: right;"><?php echo h($rawMaterial['RawMaterial']['raw_mat_unit_price']); ?>&nbsp;</td>
		<td style="text-align: right;"><?php echo h($rawMaterial['RawMaterial']['stock_sale_price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rawMaterial['SupplierSlip']['id'], array('controller' => 'supplier_slips', 'action' => 'view', $rawMaterial['SupplierSlip']['id'])); ?>
		</td>
		<td><?php echo h($rawMaterial['RawMaterial']['supplier_slip_line']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rawMaterial['SupplierInvoice']['id'], array('controller' => 'supplier_invoices', 'action' => 'view', $rawMaterial['SupplierInvoice']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rawMaterial['RawMaterial']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rawMaterial['RawMaterial']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rawMaterial['RawMaterial']['id']), null, __('Are you sure you want to delete # %s?', $rawMaterial['RawMaterial']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Raw Material'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Raw Material Types'), array('controller' => 'raw_material_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Raw Material Type'), array('controller' => 'raw_material_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Slips'), array('controller' => 'supplier_slips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Slip'), array('controller' => 'supplier_slips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoices'), array('controller' => 'supplier_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumptions'), array('controller' => 'consumptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumption'), array('controller' => 'consumptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
