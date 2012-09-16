<div class="customerOrderLines form">
    <?php echo $this->Form->create('CustomerOrderLine'); ?>
    <fieldset>
        <legend><?php echo __('Add Customer Order Line (Service)'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('customer_order_id');
        echo $this->Form->input('order_line_number');
        echo $this->Form->hidden('expected_vat');
        echo $this->Form->input('order_line_description', array('required' => 'required'));
        echo $this->Form->input('order_line_left_article_description');
        echo $this->Form->input('order_line_due_date', array('dateFormat' => 'DMY'));
        echo $this->Form->input('order_line_amount', array('label' => __('Total line amount (taxes included)'), 'required' => 'required'));
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
