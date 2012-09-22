<div class="serviceTypes view">
<h2><?php  echo __('Service Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serviceType['ServiceType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($serviceType['ServiceType']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service Type'), array('action' => 'edit', $serviceType['ServiceType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service Type'), array('action' => 'delete', $serviceType['ServiceType']['id']), null, __('Are you sure you want to delete # %s?', $serviceType['ServiceType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
