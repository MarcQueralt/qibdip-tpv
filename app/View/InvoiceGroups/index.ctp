<div class="invoiceGroups index">
	<h2><?php echo __('Invoice Groups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($invoiceGroups as $invoiceGroup): ?>
	<tr>
		<td><?php echo h($invoiceGroup['InvoiceGroup']['id']); ?>&nbsp;</td>
		<td><?php echo h($invoiceGroup['InvoiceGroup']['code']); ?>&nbsp;</td>
		<td><?php echo h($invoiceGroup['InvoiceGroup']['description']); ?>&nbsp;</td>
		<td><?php echo h($invoiceGroup['InvoiceGroup']['active']); ?>&nbsp;</td>
		<td><?php echo h($invoiceGroup['InvoiceGroup']['created']); ?>&nbsp;</td>
		<td><?php echo h($invoiceGroup['InvoiceGroup']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $invoiceGroup['InvoiceGroup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $invoiceGroup['InvoiceGroup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $invoiceGroup['InvoiceGroup']['id']), null, __('Are you sure you want to delete # %s?', $invoiceGroup['InvoiceGroup']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Invoice Group'), array('action' => 'add')); ?></li>
	</ul>
</div>
