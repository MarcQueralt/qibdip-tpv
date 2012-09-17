<div class="articles index">
	<h2><?php echo __('Articles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('article_reference'); ?></th>
			<th><?php echo $this->Paginator->sort('article_model'); ?></th>
			<th><?php echo $this->Paginator->sort('article_size'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_comment'); ?></th>
                        <th><?php echo $this->Paginator->sort('stock_userfield01',qibdipTPV_stock_uf01()); ?></th>
                        <th><?php echo $this->Paginator->sort('stock_userfield02',qibdipTPV_stock_uf02()); ?></th>
                        <th><?php echo $this->Paginator->sort('stock_userfield03',qibdipTPV_stock_uf03()); ?></th>
			<th><?php echo $this->Paginator->sort('stock_buy_price'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_vat'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_vat_re'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_sale_price'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_slip_id'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_slip_line'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_invoice_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($articles as $article): ?>
	<tr>
		<td><?php echo h($article['Article']['id']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['article_reference']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['article_model']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['article_size']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['stock_comment']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['stock_userfield01']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['stock_userfield02']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['stock_userfield03']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['stock_buy_price']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['stock_vat']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['stock_vat_re']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['stock_sale_price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($article['SupplierSlip']['extended_number'], array('controller' => 'supplier_slips', 'action' => 'view', $article['SupplierSlip']['id'])); ?>
		</td>
		<td><?php echo h($article['Article']['supplier_slip_line']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($article['SupplierInvoice']['id'], array('controller' => 'supplier_invoices', 'action' => 'view', $article['SupplierInvoice']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $article['Article']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $article['Article']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Supplier Slips'), array('controller' => 'supplier_slips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Slip'), array('controller' => 'supplier_slips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Invoices'), array('controller' => 'supplier_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
