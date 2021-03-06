<div class="customers index">
    <h2><?php echo __('Customers'); ?></h2>
    <div class="filter">
        <?php echo $this->Form->create('Customer', array('action' => 'search')); ?>
        <fieldset>
            <legend><?php echo __('Filter'); ?></legend>
            <?php echo $this->Form->input('Search.customer_name', array('div' => false, 'default' => ((isset($this->passedArgs['Search.customer_name'])) ? $this->passedArgs['Search.customer_name'] : ''))); ?>
            <?php echo $this->Form->submit(__('Search', true), array('div' => false)); ?>
        </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>

    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('customer_name'); ?></th>
            <th><?php echo $this->Paginator->sort('customer_address'); ?></th>
            <th><?php echo $this->Paginator->sort('town'); ?></th>
            <th><?php echo $this->Paginator->sort('zip'); ?></th>
            <th><?php echo $this->Paginator->sort('customer_vat_number'); ?></th>
            <th><?php echo $this->Paginator->sort('customer_phone1'); ?></th>
            <th><?php echo $this->Paginator->sort('customer_phone2'); ?></th>
            <th><?php echo $this->Paginator->sort('customer_email'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
                <td><?php echo $this->Html->link(h($customer['Customer']['customer_name']), array('action' => 'view', $customer['Customer']['id'])); ?><?php //echo h($customer['Customer']['customer_name']);   ?>&nbsp;</td>
                <td><?php echo h($customer['Customer']['customer_address']); ?>&nbsp;</td>
                <td><?php echo h($customer['Customer']['town']); ?>&nbsp;</td>
                <td><?php echo h($customer['Customer']['zip']); ?>&nbsp;</td>
                <td><?php echo h($customer['Customer']['customer_vat_number']); ?>&nbsp;</td>
                <td><?php echo h($customer['Customer']['customer_phone1']); ?>&nbsp;</td>
                <td><?php echo h($customer['Customer']['customer_phone2']); ?>&nbsp;</td>
                <td><?php echo h($customer['Customer']['customer_email']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>

    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?></li>
    </ul>
</div>
