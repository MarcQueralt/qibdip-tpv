<div class="supplierSlips view">
    <h2><?php echo __('Supplier Slip'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($supplierSlip['SupplierSlip']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Slip Num'); ?></dt>
        <dd>
            <?php echo h($supplierSlip['SupplierSlip']['extended_number']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier'); ?></dt>
        <dd>
            <?php echo $this->Html->link($supplierSlip['Supplier']['supplier_name'], array('controller' => 'suppliers', 'action' => 'view', $supplierSlip['Supplier']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Slip Date'); ?></dt>
        <dd>
            <?php echo h($supplierSlip['SupplierSlip']['supplier_slip_date']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Slip Amount'); ?></dt>
        <dd>
            <?php echo h($supplierSlip['SupplierSlip']['sum_amount']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Slip VAT'); ?></dt>
        <dd>
            <?php echo h($supplierSlip['SupplierSlip']['sum_vat']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Slip VAT RE'); ?></dt>
        <dd>
            <?php echo h($supplierSlip['SupplierSlip']['sum_vat_re']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Suplier Slip Total Amount'); ?></dt>
        <dd>
            <?php echo h($supplierSlip['SupplierSlip']['total_amount']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Slip Lines'); ?></dt>
        <dd>
            <?php echo h($supplierSlip['SupplierSlip']['count_lines']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Suplier Slip Pending Lines'); ?></dt>
        <dd>
            <?php echo h($supplierSlip['SupplierSlip']['count_pending_lines']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Supplier Slip'), array('action' => 'edit', $supplierSlip['SupplierSlip']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Supplier Slip'), array('action' => 'delete', $supplierSlip['SupplierSlip']['id']), null, __('Are you sure you want to delete # %s?', $supplierSlip['SupplierSlip']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Supplier Slips'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Supplier Slip'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add', $supplierSlip['SupplierSlip']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('New Raw Material'), array('controller' => 'raw_materials', 'action' => 'add', $supplierSlip['SupplierSlip']['id'])); ?> </li>
    </ul>
</ul>
</div>
<div class="related">
    <h3><?php echo __('Related Articles'); ?></h3>
    <?php if (!empty($supplierSlip['Article'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Article Model'); ?></th>
                <th><?php echo __('Article Size'); ?></th>
                <th><?php echo __('Stock Comment'); ?></th>
                <th><?php echo qibdipTPV_stock_uf01(); ?></th>
                <th><?php echo qibdipTPV_stock_uf02(); ?></th>
                <th><?php echo qibdipTPV_stock_uf03(); ?></th>
                <th><?php echo __('Stock Buy Price'); ?></th>
                <th><?php echo __('Stock Vat'); ?></th>
                <th><?php echo __('Stock Vat Re'); ?></th>
                <th><?php echo __('Stock Sale Price'); ?></th>
                <th><?php echo __('Supplier Slip Line'); ?></th>
                <th><?php echo __('Supplier Invoice Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($supplierSlip['Article'] as $article):
                ?>
                <tr>
                    <td><?php echo $article['id']; ?></td>
                    <td><?php echo $article['article_model']; ?></td>
                    <td><?php echo $article['article_size']; ?></td>
                    <td><?php echo $article['stock_comment']; ?></td>
                    <td><?php echo $article['stock_userfield01']; ?></td>
                    <td><?php echo $article['stock_userfield02']; ?></td>
                    <td><?php echo $article['stock_userfield03']; ?></td>
                    <td><?php echo $article['stock_buy_price']; ?></td>
                    <td><?php echo $article['stock_vat']; ?></td>
                    <td><?php echo $article['stock_vat_re']; ?></td>
                    <td><?php echo $article['stock_sale_price']; ?></td>
                    <td><?php echo $article['supplier_slip_line']; ?></td>
                    <td><?php echo $article['supplier_invoice_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'articles', 'action' => 'view', $article['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'articles', 'action' => 'edit', $article['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articles', 'action' => 'delete', $article['id']), null, __('Are you sure you want to delete # %s?', $article['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add', $supplierSlip['SupplierSlip']['id'])); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Raw Materials'); ?></h3>
    <?php if (!empty($supplierSlip['RawMaterial'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Raw Material Type Id'); ?></th>
                <th><?php echo __('Raw Mat Units'); ?></th>
                <th><?php echo qibdipTPV_raw_uf01(); ?></th>
                <th><?php echo __('Raw Mat Unit Price'); ?></th>
                <th><?php echo __('Stock Comment'); ?></th>
                <th><?php echo __('Stock Userfield01'); ?></th>
                <th><?php echo __('Stock Userfield02'); ?></th>
                <th><?php echo __('Stock Userfield03'); ?></th>
                <th><?php echo __('Stock Buy Price'); ?></th>
                <th><?php echo __('Stock Vat'); ?></th>
                <th><?php echo __('Stock Vat Re'); ?></th>
                <th><?php echo __('Supplier Slip Line'); ?></th>
                <th><?php echo __('Supplier Invoice Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($supplierSlip['RawMaterial'] as $rawMaterial):
                ?>
                <tr>
                    <td><?php echo $rawMaterial['id']; ?></td>
                    <td><?php echo $rawMaterial['raw_material_type_id']; ?></td>
                    <td><?php echo $rawMaterial['raw_mat_units']; ?></td>
                    <td><?php echo $rawMaterial['raw_mat_userfield01']; ?></td>
                    <td><?php echo $rawMaterial['raw_mat_unit_price']; ?></td>
                    <td><?php echo $rawMaterial['stock_comment']; ?></td>
                    <td><?php echo $rawMaterial['stock_userfield01']; ?></td>
                    <td><?php echo $rawMaterial['stock_userfield02']; ?></td>
                    <td><?php echo $rawMaterial['stock_userfield03']; ?></td>
                    <td><?php echo $rawMaterial['stock_buy_price']; ?></td>
                    <td><?php echo $rawMaterial['stock_vat']; ?></td>
                    <td><?php echo $rawMaterial['stock_vat_re']; ?></td>
                    <td><?php echo $rawMaterial['supplier_slip_line']; ?></td>
                    <td><?php echo $rawMaterial['supplier_invoice_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'raw_materials', 'action' => 'view', $rawMaterial['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'raw_materials', 'action' => 'edit', $rawMaterial['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'raw_materials', 'action' => 'delete', $rawMaterial['id']), null, __('Are you sure you want to delete # %s?', $rawMaterial['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Raw Material'), array('controller' => 'raw_materials', 'action' => 'add', $supplierSlip['SupplierSlip']['id'])); ?> </li>
        </ul>
    </div>
</div>
