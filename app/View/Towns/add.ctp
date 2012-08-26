<div class="towns form">
<?php echo $this->Form->create('Town'); ?>
	<fieldset>
		<legend><?php echo __('Add Town'); ?></legend>
	<?php
		echo $this->Form->input('town_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Towns'), array('action' => 'index')); ?></li>
	</ul>
</div>
