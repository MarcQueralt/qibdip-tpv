<div class="series form">
<?php echo $this->Form->create('Series'); ?>
	<fieldset>
		<legend><?php echo __('Edit Series'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('serie_code');
		echo $this->Form->input('serie_description');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Series.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Series.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Series'), array('action' => 'index')); ?></li>
	</ul>
</div>