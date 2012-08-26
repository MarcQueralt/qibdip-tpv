<div class="customerOrderLines view">
<h2><?php  echo __('Customer Order Line'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerOrderLine['CustomerOrder']['id'], array('controller' => 'customer_orders', 'action' => 'view', $customerOrderLine['CustomerOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Line Number'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['order_line_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerOrderLine['OrderStatus']['order_status_name'], array('controller' => 'order_statuses', 'action' => 'view', $customerOrderLine['OrderStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Line Type'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['order_line_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerOrderLine['Stock']['id'], array('controller' => 'stocks', 'action' => 'view', $customerOrderLine['Stock']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Line Description'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['order_line_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Line Is Left Article'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['order_line_is_left_article']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Line Left Article Description'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['order_line_left_article_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Line Due Date'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['order_line_due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerOrderLine['CustomerInvoice']['customer_invoice_number'], array('controller' => 'customer_invoices', 'action' => 'view', $customerOrderLine['CustomerInvoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice Line Number'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['customer_invoice_line_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Line Amout'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['order_line_amout']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Line Vat'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['order_line_vat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Line Comments'); ?></dt>
		<dd>
			<?php echo h($customerOrderLine['CustomerOrderLine']['order_line_comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer Order Line'), array('action' => 'edit', $customerOrderLine['CustomerOrderLine']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer Order Line'), array('action' => 'delete', $customerOrderLine['CustomerOrderLine']['id']), null, __('Are you sure you want to delete # %s?', $customerOrderLine['CustomerOrderLine']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Order Lines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order Line'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Statuses'), array('controller' => 'order_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Status'), array('controller' => 'order_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('controller' => 'customer_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice'), array('controller' => 'customer_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
