<div class="series view">
<h2><?php  echo __('Series'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($series['Series']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serie Code'); ?></dt>
		<dd>
			<?php echo h($series['Series']['serie_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serie Description'); ?></dt>
		<dd>
			<?php echo h($series['Series']['serie_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($series['Series']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($series['Series']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($series['Series']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Series'), array('action' => 'edit', $series['Series']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Series'), array('action' => 'delete', $series['Series']['id']), null, __('Are you sure you want to delete # %s?', $series['Series']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Series'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Series'), array('action' => 'add')); ?> </li>
	</ul>
</div>
