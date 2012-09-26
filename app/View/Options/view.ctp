<div class="options view">
    <h2><?php echo __('Option'); ?></h2>
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
        <dt><?php echo __('Default Order Status'); ?></dt>
        <dd>
            <?php echo h($option['OrderStatus']['order_status_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Default Order Invoiced Status'); ?></dt>
        <dd>
            <?php echo h($option['OrderInvoicedStatus']['order_status_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Default Customer Invoice Group'); ?></dt>
        <dd>
            <?php echo h($option['InvoiceGroup']['code']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Default Customer Invoice Status'); ?></dt>
        <dd>
            <?php echo h($option['CustomerInvoiceStatus']['cus_inv_status_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Default Supplier Invoice Status'); ?></dt>
        <dd>
            <?php echo h($option['SupplierInvoiceStatus']['sup_inv_status_name']); ?>
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
