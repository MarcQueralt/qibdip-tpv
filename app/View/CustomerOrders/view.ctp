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
                <li><?php echo $this->Html->link(__('Print Customer Order'), array('action' => 'printer', $customerOrder['CustomerOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer Order'), array('action' => 'delete', $customerOrder['CustomerOrder']['id']), null, __('Are you sure you want to delete # %s?', $customerOrder['CustomerOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Payment'), array('controller' => 'customer_payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Customer Order Lines'); ?></h3>
	<?php if (!empty($customerOrder['CustomerOrderLine'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Order Line Number'); ?></th>
		<th><?php echo __('Order Status Id'); ?></th>
		<th><?php echo __('Order Line Type'); ?></th>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('Order Line Description'); ?></th>
		<th><?php echo __('Order Line Is Left Article'); ?></th>
		<th><?php echo __('Order Line Left Article Description'); ?></th>
		<th><?php echo __('Order Line Due Date'); ?></th>
		<th><?php echo __('Customer Invoice Id'); ?></th>
		<th><?php echo __('Customer Invoice Line Number'); ?></th>
		<th><?php echo __('Order Line Amout'); ?></th>
		<th><?php echo __('Order Line Vat'); ?></th>
		<th><?php echo __('Order Line Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customerOrder['CustomerOrderLine'] as $customerOrderLine): ?>
		<tr>
			<td><?php echo $customerOrderLine['order_line_number']; ?></td>
			<td><?php echo $customerOrderLine['order_status_id']; ?></td>
                        <td><?php echo qibdipTPV_prettyOrderLineType($customerOrderLine['order_line_type']); ?></td>
			<td><?php echo $customerOrderLine['stock_id']; ?></td>
			<td><?php echo $customerOrderLine['order_line_description']; ?></td>
			<td><?php echo $customerOrderLine['order_line_is_left_article']; ?></td>
			<td><?php echo $customerOrderLine['order_line_left_article_description']; ?></td>
			<td><?php echo $customerOrderLine['order_line_due_date']; ?></td>
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
	<h3><?php echo __('Related Customer Payments'); ?></h3>
	<?php if (!empty($customerOrder['CustomerPayment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Payment Date'); ?></th>
		<th><?php echo __('Payment Amount'); ?></th>
		<th><?php echo __('Payment Comments'); ?></th>
		<th><?php echo __('Payment Is Down Payment'); ?></th>
		<th><?php echo __('Customer Order Id'); ?></th>
		<th><?php echo __('Customer Invoice Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customerOrder['CustomerPayment'] as $customerPayment): ?>
		<tr>
			<td><?php echo $customerPayment['id']; ?></td>
			<td><?php echo $customerPayment['payment_date']; ?></td>
			<td><?php echo $customerPayment['payment_amount']; ?></td>
			<td><?php echo $customerPayment['payment_comments']; ?></td>
			<td><?php echo $customerPayment['payment_is_down_payment']; ?></td>
			<td><?php echo $customerPayment['customer_order_id']; ?></td>
			<td><?php echo $customerPayment['customer_invoice_id']; ?></td>
			<td><?php echo $customerPayment['created']; ?></td>
			<td><?php echo $customerPayment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customer_payments', 'action' => 'view', $customerPayment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customer_payments', 'action' => 'edit', $customerPayment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customer_payments', 'action' => 'delete', $customerPayment['id']), null, __('Are you sure you want to delete # %s?', $customerPayment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Payment'), array('controller' => 'customer_payments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
