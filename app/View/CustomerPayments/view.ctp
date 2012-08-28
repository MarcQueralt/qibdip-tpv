<div class="customerPayments view">
<h2><?php  echo __('Customer Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customerPayment['CustomerPayment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Date'); ?></dt>
		<dd>
			<?php echo h($customerPayment['CustomerPayment']['payment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Amount'); ?></dt>
		<dd>
			<?php echo h($customerPayment['CustomerPayment']['payment_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Comments'); ?></dt>
		<dd>
			<?php echo h($customerPayment['CustomerPayment']['payment_comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Is Down Payment'); ?></dt>
		<dd>
			<?php echo h($customerPayment['CustomerPayment']['payment_is_down_payment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerPayment['CustomerOrder']['id'], array('controller' => 'customer_orders', 'action' => 'view', $customerPayment['CustomerOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerPayment['CustomerInvoice']['id'], array('controller' => 'customer_invoices', 'action' => 'view', $customerPayment['CustomerInvoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customerPayment['CustomerPayment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customerPayment['CustomerPayment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer Payment'), array('action' => 'edit', $customerPayment['CustomerPayment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer Payment'), array('action' => 'delete', $customerPayment['CustomerPayment']['id']), null, __('Are you sure you want to delete # %s?', $customerPayment['CustomerPayment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Payment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Orders'), array('controller' => 'customer_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Invoices'), array('controller' => 'customer_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Invoice'), array('controller' => 'customer_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
