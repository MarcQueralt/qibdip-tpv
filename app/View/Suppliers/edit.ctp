<div class="suppliers form">
    <?php echo $this->Form->create('Supplier'); ?>
    <fieldset>
        <legend><?php echo __('Edit Supplier'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('supplier_name');
        echo $this->Form->input('supplier_abr');
        echo $this->Form->input('supplier_address');
        echo $this->Form->input('zip');
        echo $this->Form->input('town');
        echo $this->Form->input('supplier_vat_number');
        echo $this->Form->input('supplier_phone1');
        echo $this->Form->input('supplier_phone2');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Supplier.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Supplier.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index')); ?></li>
    </ul>
</div>
