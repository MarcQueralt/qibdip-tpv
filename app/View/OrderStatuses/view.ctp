<div class="orderStatuses view">
<h2><?php  echo __('Order Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderStatus['OrderStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Status Name'); ?></dt>
		<dd>
			<?php echo h($orderStatus['OrderStatus']['order_status_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Status Is Final'); ?></dt>
		<dd>
			<?php echo h($orderStatus['OrderStatus']['order_status_is_final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($orderStatus['OrderStatus']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($orderStatus['OrderStatus']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order Status'), array('action' => 'edit', $orderStatus['OrderStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order Status'), array('action' => 'delete', $orderStatus['OrderStatus']['id']), null, __('Are you sure you want to delete # %s?', $orderStatus['OrderStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Order Lines'), array('controller' => 'customer_order_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Customer Order Lines'); ?></h3>
	<?php if (!empty($orderStatus['CustomerOrderLine'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Order Id'); ?></th>
		<th><?php echo __('Order Line Number'); ?></th>
		<th><?php echo __('Order Status Id'); ?></th>
		<th><?php echo __('Order Line Type'); ?></th>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('Order Line Description'); ?></th>
		<th><?php echo __('Order Line Is Left Article'); ?></th>
		<th><?php echo __('Order Line Left Article Description'); ?></th>
		<th><?php echo __('Order Line Due Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Customer Invoice Id'); ?></th>
		<th><?php echo __('Customer Invoice Line Number'); ?></th>
		<th><?php echo __('Order Line Amout'); ?></th>
		<th><?php echo __('Order Line Vat'); ?></th>
		<th><?php echo __('Order Line Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($orderStatus['CustomerOrderLine'] as $customerOrderLine): ?>
		<tr>
			<td><?php echo $customerOrderLine['id']; ?></td>
			<td><?php echo $customerOrderLine['customer_order_id']; ?></td>
			<td><?php echo $customerOrderLine['order_line_number']; ?></td>
			<td><?php echo $customerOrderLine['order_status_id']; ?></td>
			<td><?php echo $customerOrderLine['order_line_type']; ?></td>
			<td><?php echo $customerOrderLine['stock_id']; ?></td>
			<td><?php echo $customerOrderLine['order_line_description']; ?></td>
			<td><?php echo $customerOrderLine['order_line_is_left_article']; ?></td>
			<td><?php echo $customerOrderLine['order_line_left_article_description']; ?></td>
			<td><?php echo $customerOrderLine['order_line_due_date']; ?></td>
			<td><?php echo $customerOrderLine['created']; ?></td>
			<td><?php echo $customerOrderLine['modified']; ?></td>
			<td><?php echo $customerOrderLine['customer_invoice_id']; ?></td>
			<td><?php echo $customerOrderLine['customer_invoice_line_number']; ?></td>
			<td><?php echo $customerOrderLine['order_line_amout']; ?></td>
			<td><?php echo $customerOrderLine['order_line_vat']; ?></td>
			<td><?php echo $customerOrderLine['order_line_comments']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customer_order_lines', 'action' => 'view', $customerOrderLine['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customer_order_lines', 'action' => 'edit', $customerOrderLine['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customer_order_lines', 'action' => 'delete', $customerOrderLine['id']), null, __('Are you sure you want to delete # %s?', $customerOrderLine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Customer Orders'); ?></h3>
	<?php if (!empty($orderStatus['CustomerOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Order Status Id'); ?></th>
		<th><?php echo __('Order Date'); ?></th>
		<th><?php echo __('Order Comments'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($orderStatus['CustomerOrder'] as $customerOrder): ?>
		<tr>
			<td><?php echo $customerOrder['id']; ?></td>
			<td><?php echo $customerOrder['customer_id']; ?></td>
			<td><?php echo $customerOrder['order_status_id']; ?></td>
			<td><?php echo $customerOrder['order_date']; ?></td>
			<td><?php echo $customerOrder['order_comments']; ?></td>
			<td><?php echo $customerOrder['created']; ?></td>
			<td><?php echo $customerOrder['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customer_orders', 'action' => 'view', $customerOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customer_orders', 'action' => 'edit', $customerOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customer_orders', 'action' => 'delete', $customerOrder['id']), null, __('Are you sure you want to delete # %s?', $customerOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
