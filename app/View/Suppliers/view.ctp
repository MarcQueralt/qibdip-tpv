<div class="suppliers view">
<h2><?php  echo __('Supplier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Name'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['supplier_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Address'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['supplier_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town'); ?></dt>
		<dd>
			<?php echo $this->Html->link($supplier['Town']['town_name'], array('controller' => 'towns', 'action' => 'view', $supplier['Town']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Vat Number'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['supplier_vat_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Phone1'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['supplier_phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Phone2'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['supplier_phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Supplier'), array('action' => 'edit', $supplier['Supplier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supplier'), array('action' => 'delete', $supplier['Supplier']['id']), null, __('Are you sure you want to delete # %s?', $supplier['Supplier']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Towns'), array('controller' => 'towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('controller' => 'towns', 'action' => 'add')); ?> </li>
	</ul>
</div>
