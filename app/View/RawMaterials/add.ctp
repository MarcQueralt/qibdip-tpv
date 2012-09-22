<?php
echo $this->Html->script('jquery', FALSE);
echo $this->Html->script('rawMaterials', FALSE);
?>
<div class="rawMaterials form">
    <?php echo $this->Form->create('RawMaterial'); ?>
    <fieldset>
        <legend><?php echo __('Add Raw Material'); ?></legend>
        <?php
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

        <li><?php echo $this->Html->link(__('List Raw Materials'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Raw Material Types'), array('controller' => 'raw_material_types', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Raw Material Type'), array('controller' => 'raw_material_types', 'action' => 'add')); ?> </li>
        <?php if (isset($this->data['RawMaterial']['supplier_slip_id'])): ?>
            <li><?php echo $this->Html->link(__('Back to Supplier Slip'), array('action' => 'view', 'controller' => 'SupplierSlips', $this->data['RawMaterial']['supplier_slip_id'])); ?></li>
        <?php endif; ?>

    </ul>
</div>
