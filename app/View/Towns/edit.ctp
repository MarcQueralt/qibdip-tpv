<div class="towns form">
<?php echo $this->Form->create('Town'); ?>
	<fieldset>
		<legend><?php echo __('Edit Town'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('town_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Town.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Town.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Towns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
	</ul>
</div>
