<?php
echo $this->Html->script('jquery', FALSE);
echo $this->Html->script('customerOrderLines', FALSE);
?>
<div class="customerOrderLines form">
    <?php echo $this->Form->create('CustomerOrderLine'); ?>
    <fieldset>
        <legend><?php echo __('Add Customer Order Line (Service)'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('customer_order_id');
        echo $this->Form->input('service_type_id', array('required' => 'required','empty'=>'---'));
        echo $this->Form->input('order_line_number');
        echo $this->Form->hidden('expected_vat');
        echo $this->Form->input('order_line_description', array('required' => 'required'));
        echo $this->Form->input('order_line_left_article_description');
        echo $this->Form->input('order_line_due_date', array('dateFormat' => 'DMY'));
        echo $this->Form->input('order_line_amount', array('required' => 'required'));
        $this->Js->get('#CustomerOrderLineOrderLineAmount');
        $this->Js->event('change', 'lineAmountChanged(event)');
        echo $this->Form->input('order_line_vat', array('required' => 'required'));
        $this->Js->get('#CustomerOrderLineOrderLineVat');
        $this->Js->event('change', 'lineVatChanged(event)');
        echo $this->Form->input('order_line_total', array('label'=>__('Total'),'required' => 'required'));
        $this->Js->get('#CustomerOrderLineOrderLineTotal');
        $this->Js->event('change', 'lineTotalChanged(event)');
        echo $this->Form->input('order_line_comments');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Back to Customer Order'), array('action' => 'view', 'controller' => 'CustomerOrders', $this->request->data['CustomerOrderLine']['customer_order_id'])); ?></li>
    </ul>
</div>
