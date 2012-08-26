<div class="rawMaterialTypes form">
<?php echo $this->Form->create('RawMaterialType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Raw Material Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('raw_mat_type_name');
		echo $this->Form->input('raw_mat_type_is_partial_consume');
		echo $this->Form->input('raw_mat_measuring_unit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RawMaterialType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RawMaterialType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Raw Material Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
