<div class="customerInvoices view">
<h2><?php  echo __('Customer Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customerInvoice['CustomerInvoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerInvoice['Customer']['customer_name'], array('controller' => 'customers', 'action' => 'view', $customerInvoice['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice Date'); ?></dt>
		<dd>
			<?php echo h($customerInvoice['CustomerInvoice']['customer_invoice_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice Number'); ?></dt>
		<dd>
			<?php echo h($customerInvoice['CustomerInvoice']['customer_invoice_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice Comments'); ?></dt>
		<dd>
			<?php echo h($customerInvoice['CustomerInvoice']['customer_invoice_comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customerInvoice['CustomerInvoice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customerInvoice['CustomerInvoice']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer Invoice'), array('action' => 'edit', $customerInvoice['CustomerInvoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer Invoice'), array('action' => 'delete', $customerInvoice['CustomerInvoice']['id']), null, __('Are you sure you want to delete # %s?', $customerInvoice['CustomerInvoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoice Lines'), array('controller' => 'customer_invoice_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice Line'), array('controller' => 'customer_invoice_lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Order Lines'), array('controller' => 'customer_order_lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Customer Invoice Lines'); ?></h3>
	<?php if (!empty($customerInvoice['CustomerInvoiceLine'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Invoice Id'); ?></th>
		<th><?php echo __('Customer Invoice Line Number'); ?></th>
		<th><?php echo __('Customer Order Id'); ?></th>
		<th><?php echo __('Order Line Number'); ?></th>
		<th><?php echo __('Customer Invoice Line Type'); ?></th>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('Customer Invoice Line Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Customer Invoice Line Amount'); ?></th>
		<th><?php echo __('Customer Invoice Line Vat'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customerInvoice['CustomerInvoiceLine'] as $customerInvoiceLine): ?>
		<tr>
			<td><?php echo $customerInvoiceLine['id']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_id']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_line_number']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_order_id']; ?></td>
			<td><?php echo $customerInvoiceLine['order_line_number']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_line_type']; ?></td>
			<td><?php echo $customerInvoiceLine['stock_id']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_line_description']; ?></td>
			<td><?php echo $customerInvoiceLine['created']; ?></td>
			<td><?php echo $customerInvoiceLine['modified']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_line_amount']; ?></td>
			<td><?php echo $customerInvoiceLine['customer_invoice_line_vat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customer_invoice_lines', 'action' => 'view', $customerInvoiceLine['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customer_invoice_lines', 'action' => 'edit', $customerInvoiceLine['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customer_invoice_lines', 'action' => 'delete', $customerInvoiceLine['id']), null, __('Are you sure you want to delete # %s?', $customerInvoiceLine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Invoice Line'), array('controller' => 'customer_invoice_lines', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Customer Order Lines'); ?></h3>
	<?php if (!empty($customerInvoice['CustomerOrderLine'])): ?>
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
		foreach ($customerInvoice['CustomerOrderLine'] as $customerOrderLine): ?>
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
