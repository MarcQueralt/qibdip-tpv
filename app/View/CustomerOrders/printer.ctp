<div class="customerOrders view">
    <h2><?php echo __('Customer Order') . '&nbsp;' . h($customerOrder['CustomerOrder']['id']); ?></h2>
    <table id="document-header">
        <tr>
            <td style="width:40%">
                <?php echo __('Customer') . ":"; ?></td>
            <td style="width:60%;">
                <?php echo $customerOrder['Customer']['customer_name']; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo __('Order Status'); ?>
            </td>
            <td>
                <?php $customerOrder['OrderStatus']['order_status_name']; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo __('Order Date'); ?>
            </td>
            <td>
                <?php echo h($customerOrder['CustomerOrder']['order_date']); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo __('Order Comments'); ?>        
            </td>
            <td>
                <?php echo h($customerOrder['CustomerOrder']['order_comments']); ?>
            </td>
        </tr>
    </table>
    <?php
    $total = 0;
    $total_vat = 0;
    if (!empty($customerOrder['CustomerOrderLine'])):
        ?>
        <table cellpadding = "0" cellspacing = "0" id="document-body">
            <tr>
                <th style="width:5%"><?php echo __('#'); ?></th>
                <th style="width:10%"><?php echo __('Type'); ?></th>
                <th style="width:65%"><?php echo __('Article'); ?></th>
                <th style="width:10%"><?php echo __('Due Date'); ?></th>
                <th style="width:10%"><?php echo __('Amount'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($customerOrder['CustomerOrderLine'] as $customerOrderLine):
                $total+=$customerOrderLine['order_line_amout'];
                $total_vat+=$customerOrderLine['order_line_vat'];
                ?>
                <tr>
                    <td>
                        <?php echo $customerOrderLine['order_line_number']; ?></td>
                    <td><?php echo qibdipTPV_prettyOrderLineType($customerOrderLine['order_line_type']); ?></td>
                    <td>
                        <?php
                        if ('A' == $customerOrderLine['order_line_type']):
                            echo $customerOrderLine['stock_id'];
                        else:
                            echo $customerOrderLine['order_line_description'];
                        endif;
                        if ($customerOrderLine['order_line_is_left_article']):
                            ?>
                            <br/>
                            <?php
                            echo __('Left article') . ': ';
                            echo $customerOrderLine['order_line_left_article_description'];
                        endif;
                        if ($customerOrderLine['order_line_comments']):
                            ?>
                            <br/>
                            <span class="comentari"><?php echo $customerOrderLine['order_line_comments']; ?></span>
                            <?php
                        endif;
                        ?>
                    </td>
                    <td><?php echo $customerOrderLine['order_line_due_date']; ?></td>
                    <td style="text-align:right;"><?php echo $customerOrderLine['order_line_amout']; ?></td>
                </tr>
            <?php endforeach;
            ?>
        <?php endif; ?>
        <tr class="subtotal">
            <td colspan="4" style="text-align:right;"><?php echo __('Total Amount'); ?></td>
            <td style="text-align:right;"><?php echo $total; ?></td>
        </tr>
        <tr class="subtotal">
            <td colspan="4" style="text-align:right;"><?php echo __('Total VAT'); ?></td>
            <td style="text-align:right;"><?php echo $total_vat; ?></td>
        </tr>
        <tr class="total">
            <td colspan="4" style="text-align:right;"><?php echo __('Total'); ?></td>
            <td style="text-align:right;"><?php echo $total_vat+$total; ?></td>
        </tr>
        <?php
        if (!empty($customerOrder['CustomerPayment'])):
            $i = 0;
            $total_pay = 0;
            foreach ($customerOrder['CustomerPayment'] as $customerPayment):
                $total_pay+=$customerPayment['payment_amount'];
                ?>
                <tr> 
                    <td colspan="3">
                        <?php
                        if (0 == $i):
                            echo __('Payments');
                        else:
                            ?>
                            &nbsp;
                        <?php endif;
                        ?>
                    </td>
                    <td>
                        <?php echo $customerPayment['payment_date']; ?>
                    </td>
                    <td style="text-align:right;">
                        <?php echo $customerPayment['payment_amount']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr class="total">
                <td colspan="4" style="text-align:right;"><? echo __('Total Due Amount'); ?></td>
                <td style="text-align:right;"><?php echo $total + $total_vat - $total_pay; ?></td>
            </tr>
        <?php endif; ?>
    </table>