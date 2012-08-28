<div class="options view">
<h2><?php  echo __('Option'); ?></h2>
	<dl>
		<dt><?php echo __('Vat'); ?></dt>
		<dd>
			<?php echo h($option['Option']['vat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vat Re'); ?></dt>
		<dd>
			<?php echo h($option['Option']['vat_re']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Option'), array('action' => 'edit', $option['Option']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Options'), array('action' => 'index')); ?> </li>
	</ul>
</div>
