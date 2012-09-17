<div class="rawMaterials view">
<h2><?php  echo __('Raw Material'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Raw Material Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rawMaterial['RawMaterialType']['raw_mat_type_name'], array('controller' => 'raw_material_types', 'action' => 'view', $rawMaterial['RawMaterialType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Raw Mat Units'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['raw_mat_units']); ?>
			&nbsp;
		</dd>
                <dt><?php echo qibdipTPV_raw_uf01(); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['raw_mat_userfield01']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Raw Mat Unit Price'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['raw_mat_unit_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Comment'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['stock_comment']); ?>
			&nbsp;
		</dd>
                <dt><?php echo qibdipTPV_stock_uf01(); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['stock_userfield01']); ?>
			&nbsp;
		</dd>
                <dt><?php echo qibdipTPV_stock_uf02(); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['stock_userfield02']); ?>
			&nbsp;
		</dd>
                <dt><?php echo qibdipTPV_stock_uf03(); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['stock_userfield03']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Buy Price'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['stock_buy_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Vat'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['stock_vat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Vat Re'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['stock_vat_re']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Sale Price'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['stock_sale_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Slip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rawMaterial['SupplierSlip']['extended_number'], array('controller' => 'supplier_slips', 'action' => 'view', $rawMaterial['SupplierSlip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Slip Line'); ?></dt>
		<dd>
			<?php echo h($rawMaterial['RawMaterial']['supplier_slip_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rawMaterial['SupplierInvoice']['extended_number'], array('controller' => 'supplier_invoices', 'action' => 'view', $rawMaterial['SupplierInvoice']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Raw Material'), array('action' => 'edit', $rawMaterial['RawMaterial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Raw Material'), array('action' => 'delete', $rawMaterial['RawMaterial']['id']), null, __('Are you sure you want to delete # %s?', $rawMaterial['RawMaterial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Raw Materials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Raw Material'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Consumptions'); ?></h3>
	<?php if (!empty($rawMaterial['Consumption'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Article Id'); ?></th>
		<th><?php echo __('Raw Material Id'); ?></th>
		<th><?php echo __('Consumption Raw Mat Consumed Units'); ?></th>
		<th><?php echo __('Consumption Cost 01'); ?></th>
		<th><?php echo __('Consumption Cost 02'); ?></th>
		<th><?php echo __('Consumption Cost 03'); ?></th>
		<th><?php echo __('Consumption Cost 04'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rawMaterial['Consumption'] as $consumption): ?>
		<tr>
			<td><?php echo $consumption['id']; ?></td>
			<td><?php echo $consumption['article_id']; ?></td>
			<td><?php echo $consumption['raw_material_id']; ?></td>
			<td><?php echo $consumption['consumption_raw_mat_consumed_units']; ?></td>
			<td><?php echo $consumption['consumption_cost_01']; ?></td>
			<td><?php echo $consumption['consumption_cost_02']; ?></td>
			<td><?php echo $consumption['consumption_cost_03']; ?></td>
			<td><?php echo $consumption['consumption_cost_04']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consumptions', 'action' => 'view', $consumption['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consumptions', 'action' => 'edit', $consumption['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consumptions', 'action' => 'delete', $consumption['id']), null, __('Are you sure you want to delete # %s?', $consumption['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Consumption'), array('controller' => 'consumptions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
