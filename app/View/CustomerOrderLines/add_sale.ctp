<?php
echo $this->Html->script('jquery', FALSE);
echo $this->Html->script('customerOrderLines', FALSE);
?>
<div class="customerOrderLines form">
    <?php echo $this->Form->create('CustomerOrderLine'); ?>
    <fieldset>
        <legend><?php echo __('Add Customer Order Line (Sale)'); ?></legend>
        <?php
        echo $this->Form->hidden('customer_order_id', array('empty' => '---'));
        $this->Js->get('#CustomerOrderLineStockId');
        $this->Js->event('change', 'stockIdChanged(event)');
        echo $this->Form->hidden('order_line_number');
        echo $this->Form->hidden('order_line_type');
        echo $this->Form->hidden('expected_vat');
        echo $this->Form->input('stock_id', array('empty' => '---', 'style' => 'width:100%;'));
        echo $this->Form->input('price', array('empty' => '', 'label' => 'Stock Price', 'disabled'));
        echo $this->Form->input('order_line_amount', array('disabled' => 'disabled'));
        echo $this->Form->input('order_line_vat', array('disabled' => 'disabled'));
        echo $this->Form->input('order_line_total');
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
