<div class="options form">
    <?php echo $this->Form->create('Option'); ?>
    <fieldset>
        <legend><?php echo __('Edit Option'); ?></legend>
        <?php
        echo $this->Form->input('vat');
        echo $this->Form->input('vat_re');
        echo $this->Form->input('order_status_id', array(
            'label' => 'Default Order Status',
            'empty' => '---',
            'options' => $this->viewVars['OrderStatuses']
        ));
        echo $this->Form->input('customer_invoice_status_id', array(
            'label' => 'Default Customer Invoice Status',
            'empty' => '---',
            'options' => $this->viewVars['CustomerInvoiceStatuses']
        ));
        echo $this->Form->input('supplier_invoice_status_id', array(
            'label' => 'Default Supplier Invoice Status',
            'empty' => '---',
            'options' => $this->viewVars['SupplierInvoiceStatuses']
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Options'), array('action' => 'index')); ?></li>
    </ul>
</div>
