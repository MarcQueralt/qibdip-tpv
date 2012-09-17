<?php
$this->Number->addFormat('QBD', array(
    'before' => '',
    'after' => '',
    'zero' => '',
    'thousands' => '.',
    'decimals' => ',',
));
?>
<div class="supplierSlips index">
    <h2><?php echo __('Supplier Slips'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('extended_number'); ?></th>
            <th><?php echo $this->Paginator->sort('supplier_name'); ?></th>
            <th><?php echo $this->Paginator->sort('supplier_slip_date'); ?></th>
            <th><?php echo $this->Paginator->sort('sum_amount'); ?></th>
            <th><?php echo $this->Paginator->sort('sum_vat'); ?></th>
            <th><?php echo $this->Paginator->sort('sum_vat_re'); ?></th>
            <th><?php echo $this->Paginator->sort('total_amount'); ?></th>
            <th><?php echo $this->Paginator->sort('count_lines'); ?></th>
            <th><?php echo $this->Paginator->sort('count_pending_lines'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($supplierSlips as $supplierSlip): ?>
            <tr>
                <td><?php echo h($supplierSlip['SupplierSlip']['id']); ?>&nbsp;</td>
                <td><?php echo h($supplierSlip['SupplierSlip']['extended_number']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($supplierSlip['Supplier']['supplier_name'], array('controller' => 'suppliers', 'action' => 'view', $supplierSlip['Supplier']['id'])); ?>
                </td>
                <td><?php echo h($supplierSlip['SupplierSlip']['supplier_slip_date']); ?>&nbsp;</td>
                <td style="text-align: right;"><?php echo $this->Number->currency($supplierSlip['SupplierSlip']['sum_amount'], 'QBD'); ?></td>
                <td style="text-align: right;"><?php echo $this->Number->currency($supplierSlip['SupplierSlip']['sum_vat'], 'QBD'); ?></td>
                <td style="text-align: right;"><?php echo $this->Number->currency($supplierSlip['SupplierSlip']['sum_vat_re'], 'QBD'); ?></td>
                <td style="text-align: right;"><?php echo $this->Number->currency($supplierSlip['SupplierSlip']['total_amount'], 'QBD'); ?></td>
                <td style="text-align: right;"><?php echo $supplierSlip['SupplierSlip']['count_lines']; ?></td>
                <td style="text-align: right;"><?php echo $supplierSlip['SupplierSlip']['count_pending_lines']; ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $supplierSlip['SupplierSlip']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $supplierSlip['SupplierSlip']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $supplierSlip['SupplierSlip']['id']), null, __('Are you sure you want to delete # %s?', $supplierSlip['SupplierSlip']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Supplier Slip'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Raw Materials'), array('controller' => 'raw_materials', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Raw Material'), array('controller' => 'raw_materials', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
    </ul>
</div>
