<div class="customerInvoiceStatuses view">
<h2><?php  echo __('Customer Invoice Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceStatus['CustomerInvoiceStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cus Inv Status Name'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceStatus['CustomerInvoiceStatus']['cus_inv_status_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cus Inv Is Final Status'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceStatus['CustomerInvoiceStatus']['cus_inv_is_final_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceStatus['CustomerInvoiceStatus']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceStatus['CustomerInvoiceStatus']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer Invoice Status'), array('action' => 'edit', $customerInvoiceStatus['CustomerInvoiceStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer Invoice Status'), array('action' => 'delete', $customerInvoiceStatus['CustomerInvoiceStatus']['id']), null, __('Are you sure you want to delete # %s?', $customerInvoiceStatus['CustomerInvoiceStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoice Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice Status'), array('action' => 'add')); ?> </li>
	</ul>
</div>
