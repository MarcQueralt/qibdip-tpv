<?php $this->Number->addFormat('QBD',array(
    'before'=>'',
    'after'=>'',
    'zero'=>'',
    'thousands'=>'.',
    'decimals'=>',',
));?>
<div class="customers view">
    <h2><?php echo __('Customer'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($customer['Customer']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Customer Name'); ?></dt>
        <dd>
            <?php echo h($customer['Customer']['customer_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Customer Address'); ?></dt>
        <dd>
            <?php echo h($customer['Customer']['customer_address']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Town'); ?></dt>
        <dd>
            <?php echo h($customer['Town']['town_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Customer Vat Number'); ?></dt>
        <dd>
            <?php echo h($customer['Customer']['customer_vat_number']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Customer Phone1'); ?></dt>
        <dd>
            <?php echo h($customer['Customer']['customer_phone1']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Customer Phone2'); ?></dt>
        <dd>
            <?php echo h($customer['Customer']['customer_phone2']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Customer Email'); ?></dt>
        <dd>
            <?php echo h($customer['Customer']['customer_email']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($customer['Customer']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($customer['Customer']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Customer Invoices'); ?></h3>
    <?php if (!empty($customer['CustomerInvoice'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Customer Invoice Date'); ?></th>
                <th><?php echo __('Customer Invoice Number'); ?></th>
                <th><?php echo __('Customer Invoice Status'); ?></th>
                <th><?php echo __('Customer Invoice Comments'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($customer['CustomerInvoice'] as $customerInvoice):
                ?>
                <tr>
                    <td><?php echo $customerInvoice['id']; ?></td>
                    <td><?php echo $customerInvoice['customer_invoice_date']; ?></td>
                    <td><?php echo $customerInvoice['customer_invoice_number']; ?></td>
                    <td><?php echo $customerInvoice['customer_invoice_status']; ?></td>
                    <td><?php echo $customerInvoice['customer_invoice_comments']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'customer_invoices', 'action' => 'view', $customerInvoice['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'customer_invoices', 'action' => 'edit', $customerInvoice['id'])); ?>
        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customer_invoices', 'action' => 'delete', $customerInvoice['id']), null, __('Are you sure you want to delete # %s?', $customerInvoice['id'])); ?>
                    </td>
                </tr>
        <?php endforeach; ?>
        </table>
<?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Customer Invoice'), array('controller' => 'customer_invoices', 'action' => 'add', $customer['Customer']['id'])); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Customer Orders'); ?></h3>
<?php if (!empty($customer['CustomerOrder'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Order Status'); ?></th>
                <th><?php echo __('Order Date'); ?></th>
                <th><?php echo __('Total Amount'); ?></th>
                <th><?php echo __('Due Amount'); ?></th>
                <th><?php echo __('Left Articles'); ?></th>
                <th><?php echo __('Lines'); ?></th>
                <th><?php echo __('Order Comments'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($customer['CustomerOrder'] as $customerOrder):
                ?>
                <tr>
                    <td></pre><?php echo $customerOrder['id']; ?></td>
                    <td><?php echo $customerOrder['OrderStatus']['order_status_name']; ?></td>
                    <td><?php echo $customerOrder['order_date']; ?></td>
<td style="text-align: right;"><?php echo $this->Number->currency($customerOrder['total_amount']+1,'QBD'); ?></td>
<td style="text-align: right;"><?php echo $this->Number->currency($customerOrder['due_amount'],'QBD'); ?></td>
<td style="text-align: right;"><?php echo $customerOrder['count_left_articles']; ?></td>
<td style="text-align: right;"><?php echo $customerOrder['count_lines']; ?></td>
                    <td><?php echo $customerOrder['order_comments']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'customer_orders', 'action' => 'view', $customerOrder['id'])); ?>
        <?php echo $this->Html->link(__('Edit'), array('controller' => 'customer_orders', 'action' => 'edit', $customerOrder['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customer_orders', 'action' => 'delete', $customerOrder['id']), null, __('Are you sure you want to delete # %s?', $customerOrder['id'])); ?>
                    </td>
                </tr>
        <?php endforeach; ?>
        </table>
<?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Customer Order'), array('controller' => 'customer_orders', 'action' => 'add', $customer['Customer']['id'])); ?> </li>
        </ul>
    </div>
</div>
