<?php
echo $this->Html->script('jquery', FALSE);
echo $this->Html->script('rawMaterials', FALSE);
?>
<div class="rawMaterials form">
    <?php echo $this->Form->create('RawMaterial'); ?>
    <fieldset>
        <legend><?php echo __('Edit Raw Material'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->hidden('stock_type');
        echo $this->Form->hidden('expected_vat');
        echo $this->Form->hidden('expected_vat_re');
        echo $this->Form->input('raw_material_type_id', array('empty' => '---'));
        echo $this->Form->input('raw_mat_units');
        echo $this->Form->input('raw_mat_userfield01', array('label' => qibdipTPV_raw_uf01()));
        echo $this->Form->input('stock_comment');
        echo $this->Form->input('stock_userfield01', array('label' => qibdipTPV_stock_uf01()));
        echo $this->Form->input('stock_userfield02', array('label' => qibdipTPV_stock_uf02()));
        echo $this->Form->input('stock_userfield03', array('label' => qibdipTPV_stock_uf03()));
        echo $this->Form->input('stock_buy_price');
        $this->Js->get('#RawMaterialStockBuyPrice');
        $this->Js->event('change', 'rawMaterialBuyPriceChanged(event)');
        echo $this->Form->input('stock_vat');
        echo $this->Form->input('stock_vat_re');
        echo $this->Form->input('stock_sale_price');
        echo $this->Form->input('supplier_slip_id', array('empty' => '---'));
        echo $this->Form->input('supplier_slip_line');
        echo $this->Form->input('supplier_invoice_id', array('empty' => '---'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RawMaterial.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RawMaterial.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Raw Materials'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Raw Material Types'), array('controller' => 'raw_material_types', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Raw Material Type'), array('controller' => 'raw_material_types', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Supplier Slips'), array('controller' => 'supplier_slips', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Supplier Slip'), array('controller' => 'supplier_slips', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Supplier Invoices'), array('controller' => 'supplier_invoices', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Consumptions'), array('controller' => 'consumptions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Consumption'), array('controller' => 'consumptions', 'action' => 'add')); ?> </li>
    </ul>
</div>
