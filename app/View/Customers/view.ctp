<div class="customers view">
<h2><?php  echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Address'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customer['Town']['town_name'], array('controller' => 'towns', 'action' => 'view', $customer['Town']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Vat Number'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_vat_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Phone1'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Phone2'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Email'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Towns'), array('controller' => 'towns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('controller' => 'towns', 'action' => 'add')); ?> </li>
	</ul>
</div>
