<div class="options form">
<?php echo $this->Form->create('Option'); ?>
	<fieldset>
		<legend><?php echo __('Edit Option'); ?></legend>
	<?php
		echo $this->Form->input('vat');
		echo $this->Form->input('vat_re');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Options'), array('action' => 'index')); ?></li>
	</ul>
</div>
