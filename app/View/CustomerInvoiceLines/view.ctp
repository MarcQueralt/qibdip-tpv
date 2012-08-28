<div class="customerInvoiceLines view">
<h2><?php  echo __('Customer Invoice Line'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceLine['CustomerInvoiceLine']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerInvoiceLine['CustomerInvoice']['id'], array('controller' => 'customer_invoices', 'action' => 'view', $customerInvoiceLine['CustomerInvoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice Line Number'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceLine['CustomerInvoiceLine']['customer_invoice_line_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerInvoiceLine['CustomerOrder']['id'], array('controller' => 'customer_orders', 'action' => 'view', $customerInvoiceLine['CustomerOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Line Number'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceLine['CustomerInvoiceLine']['order_line_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice Line Type'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceLine['CustomerInvoiceLine']['customer_invoice_line_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerInvoiceLine['Stock']['id'], array('controller' => 'stocks', 'action' => 'view', $customerInvoiceLine['Stock']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice Line Description'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceLine['CustomerInvoiceLine']['customer_invoice_line_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceLine['CustomerInvoiceLine']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceLine['CustomerInvoiceLine']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice Line Amount'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceLine['CustomerInvoiceLine']['customer_invoice_line_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice Line Vat'); ?></dt>
		<dd>
			<?php echo h($customerInvoiceLine['CustomerInvoiceLine']['customer_invoice_line_vat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer Invoice Line'), array('action' => 'edit', $customerInvoiceLine['CustomerInvoiceLine']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer Invoice Line'), array('action' => 'delete', $customerInvoiceLine['CustomerInvoiceLine']['id']), null, __('Are you sure you want to delete # %s?', $customerInvoiceLine['CustomerInvoiceLine']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoice Lines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice Line'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('controller' => 'customer_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice'), array('controller' => 'customer_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
