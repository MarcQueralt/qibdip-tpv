<div class="towns view">
<h2><?php  echo __('Town'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($town['Town']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town Name'); ?></dt>
		<dd>
			<?php echo h($town['Town']['town_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($town['Town']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($town['Town']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Town'), array('action' => 'edit', $town['Town']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Town'), array('action' => 'delete', $town['Town']['id']), null, __('Are you sure you want to delete # %s?', $town['Town']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Towns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Town'), array('action' => 'add')); ?> </li>
	</ul>
</div>
