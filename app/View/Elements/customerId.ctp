<?php
//echo $this->Html->script('customerId', FALSE);
//echo $this->Form->input('filter', array('label' => __('Customer Filter'), 'type' => 'text', 'id' => 'customerFilter'));
//echo $this->Form->button(__('Customer Search'),array('type'=>'button','id'=>'customerIdSearch','class'=>'search'));
echo $this->Form->input('customer_id', array(
    'default' => isset($customerId) ? $customerId : '', 
    'empty' => '---', 
    'id' => 'customerId',
//    'size'=>'10', 
    'style'=>'width:100%;'));
?>
