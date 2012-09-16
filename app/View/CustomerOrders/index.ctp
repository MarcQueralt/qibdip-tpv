<?php $this->Number->addFormat('QBD',array(
    'before'=>'',
    'after'=>'',
    'zero'=>'',
    'thousands'=>'.',
    'decimals'=>',',
));?>
<div class="customerOrders index">
    <h2><?php echo __('Customer Orders'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('customer_id'); ?></th>
            <th><?php echo $this->Paginator->sort('order_status_id'); ?></th>
            <th><?php echo $this->Paginator->sort('order_date'); ?></th>
            <th><?php echo $this->Paginator->sort('total_amount'); ?></th>
            <th><?php echo $this->Paginator->sort('due_amount'); ?></th>
            <th><?php echo $this->Paginator->sort('count_left_articles'); ?></th>
            <th><?php echo $this->Paginator->sort('count_lines'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($customerOrders as $customerOrder): ?>
            <tr>
                <td><?php echo $this->Html->link(h($customerOrder['CustomerOrder']['id']), array('action' => 'view', $customerOrder['CustomerOrder']['id'])); ?></td>
                <td><?php echo h($customerOrder['Customer']['customer_name']); ?></td>
                <td><?php echo h($customerOrder['OrderStatus']['order_status_name']); ?></td>
                <td><?php echo h($customerOrder['CustomerOrder']['order_date']); ?>&nbsp;</td>
                <td style="text-align: right;"><?php echo $this->Number->currency($customerOrder['CustomerOrder']['total_amount'],'QBD'); ?>&nbsp;</td>
                <td style="text-align: right;"><?php echo $this->Number->currency($customerOrder['CustomerOrder']['due_amount'],'QBD'); ?>&nbsp;</td>
                <td style="text-align: right;"><?php echo ($customerOrder['CustomerOrder']['count_left_articles']); ?>&nbsp;</td>
                <td style="text-align: right;"><?php echo h($customerOrder['CustomerOrder']['count_lines']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $customerOrder['CustomerOrder']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customerOrder['CustomerOrder']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customerOrder['CustomerOrder']['id']), null, __('Are you sure you want to delete # %s?', $customerOrder['CustomerOrder']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Customer Order'), array('action' => 'add')); ?></li>
    </ul>
</div>
