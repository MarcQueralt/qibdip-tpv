<div class="consumptions form">
<?php echo $this->Form->create('Consumption'); ?>
	<fieldset>
		<legend><?php echo __('Edit Consumption'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('article_id');
		echo $this->Form->input('raw_material_id');
		echo $this->Form->input('consumption_raw_mat_consumed_units');
		echo $this->Form->input('consumption_cost_01');
		echo $this->Form->input('consumption_cost_02');
		echo $this->Form->input('consumption_cost_03');
		echo $this->Form->input('consumption_cost_04');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Consumption.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Consumption.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Consumptions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Raw Materials'), array('controller' => 'raw_materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Raw Material'), array('controller' => 'raw_materials', 'action' => 'add')); ?> </li>
	</ul>
</div>
