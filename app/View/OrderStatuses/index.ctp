<div class="orderStatuses index">
	<h2><?php echo __('Order Statuses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_status_name'); ?></th>
			<th><?php echo $this->Paginator->sort('order_status_is_final'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($orderStatuses as $orderStatus): ?>
	<tr>
		<td><?php echo h($orderStatus['OrderStatus']['id']); ?>&nbsp;</td>
		<td><?php echo h($orderStatus['OrderStatus']['order_status_name']); ?>&nbsp;</td>
		<td><?php echo h($orderStatus['OrderStatus']['order_status_is_final']); ?>&nbsp;</td>
		<td><?php echo h($orderStatus['OrderStatus']['created']); ?>&nbsp;</td>
		<td><?php echo h($orderStatus['OrderStatus']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $orderStatus['OrderStatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $orderStatus['OrderStatus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $orderStatus['OrderStatus']['id']), null, __('Are you sure you want to delete # %s?', $orderStatus['OrderStatus']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Order Status'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Order Lines'), array('controller' => 'customer_order_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
