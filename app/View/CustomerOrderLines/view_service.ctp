<div class="customerOrderLines view">
    <h2><?php echo __('Customer Order Line (Service)'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Customer Order'); ?></dt>
        <dd>
            <?php echo $this->Html->link($customerOrderLine['CustomerOrder']['id'], array('controller' => 'customer_orders', 'action' => 'view', $customerOrderLine['CustomerOrder']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Order Line Number'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['order_line_number']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Order Line Type'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['order_line_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Order Line Description'); ?></dt>
        <dd>
            <?php echo nl2br($customerOrderLine['CustomerOrderLine']['order_line_description']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Order Line Left Article Description'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['order_line_left_article_description']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Order Line Due Date'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['order_line_due_date']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Order Line Ready'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['order_line_ready']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Order Line Amount'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['order_line_amount']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Order Line Vat'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['order_line_vat']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Order Line Comments'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['order_line_comments']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Customer Invoice'); ?></dt>
        <dd>
            <?php echo $this->Html->link($customerOrderLine['CustomerInvoice']['id'], array('controller' => 'customer_invoices', 'action' => 'view', $customerOrderLine['CustomerInvoice']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Customer Invoice Line Number'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['customer_invoice_line_number']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($customerOrderLine['CustomerOrderLine']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(_('Back to Customer Order'), array('controller' => 'customer_orders', 'action' => 'view', $customerOrderLine['CustomerOrder']['id'])); ?></li>	
    </ul>
</div>
