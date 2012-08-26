<div class="consumptions view">
<h2><?php  echo __('Consumption'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consumption['Consumption']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumption['Article']['article_reference'], array('controller' => 'articles', 'action' => 'view', $consumption['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Raw Material'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumption['RawMaterial']['id'], array('controller' => 'raw_materials', 'action' => 'view', $consumption['RawMaterial']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumption Raw Mat Consumed Units'); ?></dt>
		<dd>
			<?php echo h($consumption['Consumption']['consumption_raw_mat_consumed_units']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumption Cost 01'); ?></dt>
		<dd>
			<?php echo h($consumption['Consumption']['consumption_cost_01']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumption Cost 02'); ?></dt>
		<dd>
			<?php echo h($consumption['Consumption']['consumption_cost_02']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumption Cost 03'); ?></dt>
		<dd>
			<?php echo h($consumption['Consumption']['consumption_cost_03']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumption Cost 04'); ?></dt>
		<dd>
			<?php echo h($consumption['Consumption']['consumption_cost_04']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consumption'), array('action' => 'edit', $consumption['Consumption']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consumption'), array('action' => 'delete', $consumption['Consumption']['id']), null, __('Are you sure you want to delete # %s?', $consumption['Consumption']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumption'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Raw Materials'), array('controller' => 'raw_materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Raw Material'), array('controller' => 'raw_materials', 'action' => 'add')); ?> </li>
	</ul>
</div>
