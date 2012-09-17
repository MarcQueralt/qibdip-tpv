<?php
$this->Number->addFormat('QBD', array(
    'before' => '',
    'after' => '',
    'zero' => '',
    'thousands' => '.',
    'decimals' => ',',
));
?>
<div class="suppliers view">
    <h2><?php echo __('Supplier'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Name'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['supplier_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Abreviated'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['supplier_abr']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Address'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['supplier_address']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Zip'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['zip']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Town'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['town']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Vat Number'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['supplier_vat_number']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Phone1'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['supplier_phone1']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Supplier Phone2'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['supplier_phone2']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($supplier['Supplier']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Supplier'), array('action' => 'edit', $supplier['Supplier']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Supplier'), array('action' => 'delete', $supplier['Supplier']['id']), null, __('Are you sure you want to delete # %s?', $supplier['Supplier']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Supplier'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Supplier Invoices'), array('controller' => 'supplier_invoices', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Supplier Slips'), array('controller' => 'supplier_slips', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Supplier Slip'), array('controller' => 'supplier_slips', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Supplier Invoices'); ?></h3>
    <?php if (!empty($supplier['SupplierInvoice'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Supplier Invoice Number'); ?></th>
                <th><?php echo __('Supplier Id'); ?></th>
                <th><?php echo __('Supplier Invoice Date'); ?></th>
                <th><?php echo __('Supplier Invoice Amount'); ?></th>
                <th><?php echo __('Supplier Invoice Vat'); ?></th>
                <th><?php echo __('Supplier Invoice Vat Re'); ?></th>
                <th><?php echo __('Supplier Invoice Status Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($supplier['SupplierInvoice'] as $supplierInvoice):
                ?>
                <tr>
                    <td><?php echo $supplierInvoice['id']; ?></td>
                    <td><?php echo $supplierInvoice['supplier_invoice_number']; ?></td>
                    <td><?php echo $supplierInvoice['supplier_id']; ?></td>
                    <td><?php echo $supplierInvoice['supplier_invoice_date']; ?></td>
                    <td><?php echo $supplierInvoice['supplier_invoice_amount']; ?></td>
                    <td><?php echo $supplierInvoice['supplier_invoice_vat']; ?></td>
                    <td><?php echo $supplierInvoice['supplier_invoice_vat_re']; ?></td>
                    <td><?php echo $supplierInvoice['supplier_invoice_status_id']; ?></td>
                    <td><?php echo $supplierInvoice['created']; ?></td>
                    <td><?php echo $supplierInvoice['modified']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'supplier_invoices', 'action' => 'view', $supplierInvoice['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'supplier_invoices', 'action' => 'edit', $supplierInvoice['id'])); ?>
        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'supplier_invoices', 'action' => 'delete', $supplierInvoice['id']), null, __('Are you sure you want to delete # %s?', $supplierInvoice['id'])); ?>
                    </td>
                </tr>
        <?php endforeach; ?>
        </table>
<?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Supplier Invoice'), array('controller' => 'supplier_invoices', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Supplier Slips'); ?></h3>
<?php if (!empty($supplier['SupplierSlip'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Supplier Slip Num'); ?></th>
                <th><?php echo __('Supplier Slip Date'); ?></th>
                <th><?php echo __('Amount'); ?></th>
                <th><?php echo __('VAT'); ?></th>
                <th><?php echo __('VAT RE'); ?></th>
                <th><?php echo __('Total Amount'); ?></th>
                <th><?php echo __('Lines'); ?></th>
                <th><?php echo __('Not Invoiced Lines'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($supplier['SupplierSlip'] as $supplierSlip):
                ?>
                <tr>
                    <td><?php echo $supplierSlip['id']; ?></td>
                    <td><?php echo $supplierSlip['extended_number']; ?></td>
                    <td><?php echo $supplierSlip['supplier_slip_date']; ?></td>
                    <td style="text-align: right;"><?php echo $this->Number->currency($supplierSlip['sum_amount'], 'QBD'); ?></td>
                    <td style="text-align: right;"><?php echo $this->Number->currency($supplierSlip['sum_vat'], 'QBD'); ?></td>
                    <td style="text-align: right;"><?php echo $this->Number->currency($supplierSlip['sum_vat_re'], 'QBD'); ?></td>
                    <td style="text-align: right;"><?php echo $this->Number->currency($supplierSlip['total_amount'], 'QBD'); ?></td>
                    <td style="text-align: right;"><?php echo $supplierSlip['count_lines']; ?></td>
                    <td style="text-align: right;"><?php echo $supplierSlip['count_pending_lines']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'supplier_slips', 'action' => 'view', $supplierSlip['id'])); ?>
        <?php echo $this->Html->link(__('Edit'), array('controller' => 'supplier_slips', 'action' => 'edit', $supplierSlip['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'supplier_slips', 'action' => 'delete', $supplierSlip['id']), null, __('Are you sure you want to delete # %s?', $supplierSlip['id'])); ?>
                    </td>
                </tr>
        <?php endforeach; ?>
        </table>
<?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Supplier Slip'), array('controller' => 'supplier_slips', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
