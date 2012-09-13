<div class="towns view">
<h2><?php  echo __('Town'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($town['Town']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town Name'); ?></dt>
		<dd>
			<?php echo h($town['Town']['town_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($town['Town']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($town['Town']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Town'), array('action' => 'edit', $town['Town']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Town'), array('action' => 'delete', $town['Town']['id']), null, __('Are you sure you want to delete # %s?', $town['Town']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Towns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($town['Customer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Name'); ?></th>
		<th><?php echo __('Customer Address'); ?></th>
		<th><?php echo __('Customer Vat Number'); ?></th>
		<th><?php echo __('Customer Phone1'); ?></th>
		<th><?php echo __('Customer Phone2'); ?></th>
		<th><?php echo __('Customer Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($town['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['customer_name']; ?></td>
			<td><?php echo $customer['customer_address']; ?></td>
			<td><?php echo $customer['customer_vat_number']; ?></td>
			<td><?php echo $customer['customer_phone1']; ?></td>
			<td><?php echo $customer['customer_phone2']; ?></td>
			<td><?php echo $customer['customer_email']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customers', 'action' => 'view', $customer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customers', 'action' => 'edit', $customer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customers', 'action' => 'delete', $customer['id']), null, __('Are you sure you want to delete # %s?', $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Suppliers'); ?></h3>
	<?php if (!empty($town['Supplier'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Supplier Name'); ?></th>
		<th><?php echo __('Supplier Address'); ?></th>
		<th><?php echo __('Supplier Vat Number'); ?></th>
		<th><?php echo __('Supplier Phone1'); ?></th>
		<th><?php echo __('Supplier Phone2'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($town['Supplier'] as $supplier): ?>
		<tr>
			<td><?php echo $supplier['id']; ?></td>
			<td><?php echo $supplier['supplier_name']; ?></td>
			<td><?php echo $supplier['supplier_address']; ?></td>
			<td><?php echo $supplier['supplier_vat_number']; ?></td>
			<td><?php echo $supplier['supplier_phone1']; ?></td>
			<td><?php echo $supplier['supplier_phone2']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'suppliers', 'action' => 'view', $supplier['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'suppliers', 'action' => 'edit', $supplier['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'suppliers', 'action' => 'delete', $supplier['id']), null, __('Are you sure you want to delete # %s?', $supplier['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
