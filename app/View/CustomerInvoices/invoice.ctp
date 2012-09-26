<?php echo $this->Html->script('jquery', FALSE); ?>
<?php echo $this->Html->script('customerInvoice', FALSE); ?>
<div class="customerInvoices form">
    <?php echo $this->Form->create('CustomerInvoice'); ?>
    <fieldset>
        <legend><?php echo __('Add Customer Invoice'); ?></legend>
        <?php
        echo $this->Form->hidden('customer_order_id',array('type'=>'text','value'=>$this->request->data['CustomerInvoice']['customer_order_id']));
        echo $this->Form->hidden('customer_order_status_id',array('type'=>'text','value'=>$this->viewVars['orderNewStatusId']));
        echo $this->Form->hidden('customer_id',array('type'=>'text'));
        echo $this->Form->input('customer_invoice_date', array('dateFormat' => 'DMY'));
        echo $this->Form->input('invoice_group_id', array('empty' => '---','value'=>$this->viewVars['groupId']));
        $this->Js->get('#CustomerInvoiceInvoiceGroupId');
        $this->Js->event('change', 'invoiceGroupIdChanged(event)');
        echo $this->Form->input('customer_invoice_number_list', array('label'=>'Invoice Number','disabled', 'type' => 'select', 'empty' => '---', 'options' => $this->viewVars['invoiceNumbers'],'value'=>$this->viewVars['groupId']));
        echo $this->Form->hidden('customer_invoice_number',array('required','value'=>$this->viewVars['invoiceNumber']));
        echo $this->Form->input('customer_invoice_status_id', array('empty' => '---', 'options' => $this->viewVars['invoiceStatuses'],'value'=>$this->viewVars['invoiceStatusId']));
        echo $this->Form->input('customer_invoice_comments');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Back to order'), array('controller' => 'customer_orders', 'action' => 'view', $this->request->data['CustomerInvoice']['customer_order_id'])); ?> </li>
    </ul>
</div>
