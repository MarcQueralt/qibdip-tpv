<div class="supplierSlips view">
<h2><?php  echo __('Supplier Slip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($supplierSlip['SupplierSlip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Slip Num'); ?></dt>
		<dd>
			<?php echo h($supplierSlip['SupplierSlip']['supplier_slip_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($supplierSlip['Supplier']['supplier_name'], array('controller' => 'suppliers', 'action' => 'view', $supplierSlip['Supplier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Slip Date'); ?></dt>
		<dd>
			<?php echo h($supplierSlip['SupplierSlip']['supplier_slip_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($supplierSlip['SupplierSlip']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($supplierSlip['SupplierSlip']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Supplier Slip'), array('action' => 'edit', $supplierSlip['SupplierSlip']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supplier Slip'), array('action' => 'delete', $supplierSlip['SupplierSlip']['id']), null, __('Are you sure you want to delete # %s?', $supplierSlip['SupplierSlip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Slips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Slip'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
	</ul>
</div>
