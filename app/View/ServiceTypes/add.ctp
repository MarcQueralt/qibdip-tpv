<div class="serviceTypes form">
<?php echo $this->Form->create('ServiceType'); ?>
	<fieldset>
		<legend><?php echo __('Add Service Type'); ?></legend>
	<?php
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Service Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
