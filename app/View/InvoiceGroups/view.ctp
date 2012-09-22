<div class="invoiceGroups view">
<h2><?php  echo __('Invoice Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoiceGroup['InvoiceGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($invoiceGroup['InvoiceGroup']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($invoiceGroup['InvoiceGroup']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($invoiceGroup['InvoiceGroup']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($invoiceGroup['InvoiceGroup']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($invoiceGroup['InvoiceGroup']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice Group'), array('action' => 'edit', $invoiceGroup['InvoiceGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoice Group'), array('action' => 'delete', $invoiceGroup['InvoiceGroup']['id']), null, __('Are you sure you want to delete # %s?', $invoiceGroup['InvoiceGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoice Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('controller' => 'customer_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice'), array('controller' => 'customer_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
