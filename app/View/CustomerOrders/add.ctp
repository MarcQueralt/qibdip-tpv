<?php echo $this->Html->script('jquery', FALSE); ?>
<div class="customerOrders form">
<?php echo $this->Form->create('CustomerOrder'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer Order Header'); ?></legend>
	<?php
                echo $this->element('customerId',array('customerId'=>isset($this->passedArgs[0])?$this->passedArgs[0]:null));
		echo $this->Form->input('order_status_id');
		echo $this->Form->input('order_date',array('dateFormat'=>'DMY'));
		echo $this->Form->input('order_comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customer Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
