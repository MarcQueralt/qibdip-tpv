<div class="series form">
<?php echo $this->Form->create('Series'); ?>
	<fieldset>
		<legend><?php echo __('Add Series'); ?></legend>
	<?php
		echo $this->Form->input('serie_code');
		echo $this->Form->input('serie_description');
		echo $this->Form->input('active',array('default'=>'1'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Series'), array('action' => 'index')); ?></li>
	</ul>
</div>
