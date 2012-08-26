<div class="customerOrders view">
<h2><?php  echo __('Customer Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customerOrder['CustomerOrder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerOrder['Customer']['customer_name'], array('controller' => 'customers', 'action' => 'view', $customerOrder['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerOrder['OrderStatus']['order_status_name'], array('controller' => 'order_statuses', 'action' => 'view', $customerOrder['OrderStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Date'); ?></dt>
		<dd>
			<?php echo h($customerOrder['CustomerOrder']['order_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Comments'); ?></dt>
		<dd>
			<?php echo h($customerOrder['CustomerOrder']['order_comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customerOrder['CustomerOrder']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customerOrder['CustomerOrder']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer Order'), array('action' => 'edit', $customerOrder['CustomerOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer Order'), array('action' => 'delete', $customerOrder['CustomerOrder']['id']), null, __('Are you sure you want to delete # %s?', $customerOrder['CustomerOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Statuses'), array('controller' => 'order_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Status'), array('controller' => 'order_statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
