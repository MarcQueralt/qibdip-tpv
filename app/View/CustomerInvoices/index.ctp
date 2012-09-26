<div class="customerInvoices index">
    <h2><?php echo __('Customer Invoices'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('customer_id'); ?></th>
            <th><?php echo $this->Paginator->sort('customer_invoice_date'); ?></th>
            <th><?php echo $this->Paginator->sort('extended_number'); ?></th>
            <th><?php echo $this->Paginator->sort('customer_invoice_status_id'); ?></th>
            <th><?php echo $this->Paginator->sort('sum_amount'); ?></th>
            <th><?php echo $this->Paginator->sort('sum_vat'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($customerInvoices as $customerInvoice): ?>
            <tr>
                <td><?php echo h($customerInvoice['CustomerInvoice']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($customerInvoice['Customer']['customer_name'], array('controller' => 'customers', 'action' => 'view', $customerInvoice['Customer']['id'])); ?>
                </td>
                <td><?php echo h($customerInvoice['CustomerInvoice']['customer_invoice_date']); ?>&nbsp;</td>
                <td><?php echo h($customerInvoice['CustomerInvoice']['extended_number']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($customerInvoice['InvoiceStatus']['cus_inv_status_name'], array('controller' => 'customer_invoice_statuses', 'action' => 'view', $customerInvoice['InvoiceStatus']['id'])); ?>
                </td>
                <td><?php echo h($customerInvoice['CustomerInvoice']['sum_amount']); ?>&nbsp;</td>
                <td><?php echo h($customerInvoice['CustomerInvoice']['sum_vat']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $customerInvoice['CustomerInvoice']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customerInvoice['CustomerInvoice']['id'])); ?>
                    <?php echo $this->Html->link(__('Print'), array('action' => 'printer', $customerInvoice['CustomerInvoice']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customerInvoice['CustomerInvoice']['id']), null, __('Are you sure you want to delete # %s?', $customerInvoice['CustomerInvoice']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Customer Invoice'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('New Customer Order Line'), array('controller' => 'customer_order_lines', 'action' => 'add')); ?> </li>
    </ul>
</div>
