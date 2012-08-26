<div class="articles view">
<h2><?php  echo __('Article'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($article['Article']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Type'); ?></dt>
		<dd>
			<?php echo h($article['Article']['stock_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article Reference'); ?></dt>
		<dd>
			<?php echo h($article['Article']['article_reference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article Model'); ?></dt>
		<dd>
			<?php echo h($article['Article']['article_model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article Size'); ?></dt>
		<dd>
			<?php echo h($article['Article']['article_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Comment'); ?></dt>
		<dd>
			<?php echo h($article['Article']['stock_comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Userfield01'); ?></dt>
		<dd>
			<?php echo h($article['Article']['stock_userfield01']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Userfield02'); ?></dt>
		<dd>
			<?php echo h($article['Article']['stock_userfield02']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Userfield03'); ?></dt>
		<dd>
			<?php echo h($article['Article']['stock_userfield03']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Buy Price'); ?></dt>
		<dd>
			<?php echo h($article['Article']['stock_buy_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Vat'); ?></dt>
		<dd>
			<?php echo h($article['Article']['stock_vat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Vat Re'); ?></dt>
		<dd>
			<?php echo h($article['Article']['stock_vat_re']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Sale Price'); ?></dt>
		<dd>
			<?php echo h($article['Article']['stock_sale_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($article['Article']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($article['Article']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Slip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($article['SupplierSlip']['supplier_slip_num'], array('controller' => 'supplier_slips', 'action' => 'view', $article['SupplierSlip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Slip Line'); ?></dt>
		<dd>
			<?php echo h($article['Article']['supplier_slip_line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($article['SupplierInvoice']['supplier_invoice_number'], array('controller' => 'supplier_invoices', 'action' => 'view', $article['SupplierInvoice']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Article'), array('action' => 'edit', $article['Article']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Article'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Slips'), array('controller' => 'supplier_slips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Slip'), array('controller' => 'supplier_slips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoices'), array('controller' => 'supplier_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumptions'), array('controller' => 'consumptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumption'), array('controller' => 'consumptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Consumptions'); ?></h3>
	<?php if (!empty($article['Consumption'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Article Id'); ?></th>
		<th><?php echo __('Raw Material Id'); ?></th>
		<th><?php echo __('Consumption Raw Mat Consumed Units'); ?></th>
		<th><?php echo __('Consumption Cost 01'); ?></th>
		<th><?php echo __('Consumption Cost 02'); ?></th>
		<th><?php echo __('Consumption Cost 03'); ?></th>
		<th><?php echo __('Consumption Cost 04'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($article['Consumption'] as $consumption): ?>
		<tr>
			<td><?php echo $consumption['id']; ?></td>
			<td><?php echo $consumption['article_id']; ?></td>
			<td><?php echo $consumption['raw_material_id']; ?></td>
			<td><?php echo $consumption['consumption_raw_mat_consumed_units']; ?></td>
			<td><?php echo $consumption['consumption_cost_01']; ?></td>
			<td><?php echo $consumption['consumption_cost_02']; ?></td>
			<td><?php echo $consumption['consumption_cost_03']; ?></td>
			<td><?php echo $consumption['consumption_cost_04']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consumptions', 'action' => 'view', $consumption['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consumptions', 'action' => 'edit', $consumption['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consumptions', 'action' => 'delete', $consumption['id']), null, __('Are you sure you want to delete # %s?', $consumption['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Consumption'), array('controller' => 'consumptions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
