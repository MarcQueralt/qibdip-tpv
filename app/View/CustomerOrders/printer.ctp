<?php

$this->Number->addFormat('QBD', array(
    'before' => '',
    'after' => '',
    'zero' => '',
    'thousands' => '.',
    'decimals' => ',',
));
App::import('Vendor', 'xtcpdf');
$tcpdf = new XTCPDF();
$textfont = 'helvetica';
$tcpdf->AddPage();
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont, '', 10);
$tcpdf->WriteHTML(qibdipTPV_document_header());
$cos = '<h1>' . __('Customer Order') . '&nbsp;' . h($customerOrder['CustomerOrder']['id']) . '</h1>';
$cos.='<table id="document-header">';
$cos.='<tr><td style="width:20%">' . __('Customer') . ":" . '</td><td style="width:80%;">' . h($customerOrder['Customer']['customer_name']) . '</td></tr>';
$cos.='<tr><td>' . __('Order Status') . ":" . '</td><td>' . h($customerOrder['OrderStatus']['order_status_name']) . '</td></tr>';
$cos.='<tr><td>' . __('Order Date') . ":" . '</td><td>' . h($customerOrder['CustomerOrder']['order_date']) . '</td></tr>';
$cos.='<tr><td>' . __('Order Comments') . ":" . '</td><td>' . nl2br($customerOrder['CustomerOrder']['order_comments']) . '</td></tr>';
$cos.='</table>';
$tcpdf->WriteHTML($cos);
$total = 0;
$total_vat = 0;
$cos = '';
if (!empty($customerOrder['CustomerOrderLine'])):
    $cos.='<table cellpadding = "3" cellspacing = "0" style="margin-top:25px;">';
    $cos.='<tr style="background-color:#aaa;color:white;">';
    $cos.='<th style="width:5%;vertical-align:bottom;">' . __('#') . '</th>';
    $cos.='<th style="width:10%">' . __('Type') . '</th>';
    $cos.='<th style="width:55%">' . __('Article') . '</th>';
    $cos.='<th style="width:15%">' . __('Due Date') . '</th>';
    $cos.='<th style="width:15%;text-align:right;">' . __('Amount') . '</th>';
    $cos.='</tr>';
    $i = 0;
    foreach ($customerOrder['CustomerOrderLine'] as $customerOrderLine):
        $total+=$customerOrderLine['order_line_amount'];
        $total_vat+=$customerOrderLine['order_line_vat'];
        $cos.=(1 == $i++ % 2) ? '<tr style="background-color:#eee;">' : '<tr>';
        $cos.='<td>' . h($customerOrderLine['order_line_number']) . '</td>';
        $cos.='<td>' . qibdipTPV_prettyOrderLineType($customerOrderLine['order_line_type']) . '</td>';
        $cos.='<td>';
        if ('A' == $customerOrderLine['order_line_type']):
            $cos.=h($customerOrderLine['order_line_text']);
        else:
            $cos.=nl2br($customerOrderLine['order_line_description']);
        endif;
        if ($customerOrderLine['order_line_is_left_article']):
            $cos.='<br/>' . __('Left article') . ' : ' . nl2br($customerOrderLine['order_line_left_article_description']);
        endif;
        if ($customerOrderLine['order_line_comments']):
            $cos.='<br/>' . '<span style="font-size:0.8em;">' . nl2br($customerOrderLine['order_line_comments']) . '</span>';
        endif;
        $cos.='</td>';
        $cos.='<td>' . h($customerOrderLine['order_line_due_date']) . '</td>';
        $cos.='<td style = "text-align:right;">' . $this->Number->currency($customerOrderLine['order_line_amount'], 'QBD') . '</td>';
        $cos.='</tr>';
    endforeach;
    $cos.='<tr style="background-color:#aaa;">';
    $cos.='<td colspan="4" style="text-align:right;color:white;font-weight:bold;">' . __('Total Amount') . '</td>';
    $cos.='<td style="text-align:right;color:white;font-weight:bold;">' . $this->Number->currency($total, 'QBD') . '</td>';
    $cos.='</tr>';
    $cos.='<tr style="background-color:#aaa;">';
    $cos.='<td colspan="4" style="text-align:right;color:white;font-weight:bold;">' . __('Total VAT') . '</td>';
    $cos.='<td style="text-align:right;color:white;font-weight:bold;">' . $this->Number->currency($total_vat, 'QBD') . '</td>';
    $cos.='</tr>';
    $cos.='<tr style="background-color:#aaa;">';
    $cos.='<td colspan="4" style="text-align:right;font-size:1.3em;color:white;font-weight:bold;">' . __('Total') . '</td>';
    $cos.='<td style="text-align:right;font-size:1.3em;color:white;font-weight:bold;">' . $this->Number->currency($total_vat + $total, 'QBD') . '</td>';
    $cos.='</tr>';
    $cos.='</table>';
endif;
if (!empty($customerOrder['CustomerPayment'])):
    $i = 0;
    $total_pay = 0;
    $cos.='<h2>' . __('Payments') . '</h2>';
    $cos.='<table cellpadding = "3" cellspacing = "0" style="margin-top:25px;">';
    $cos.='<tr style="border-bottom:1px solid #000;background-color:#aaa;color:white;">';
    $cos.='<th style="width:85%">' . __('Payment Date') . '</th>';
    $cos.='<th style="width:15%;text-align:right;">' . __('Amount') . '</th>';
    $cos.='</tr>';
    foreach ($customerOrder['CustomerPayment'] as $customerPayment):
        $total_pay+=$customerPayment['payment_amount'];
        $cos.=(1 == $i++ % 2) ? '<tr style="background-color:#eee;">' : '<tr>';
        $cos.='<td style="text-align:right;">' . h($customerPayment['payment_date']) . '</td>';
        $cos.='<td style="text-align:right;">' . $this->Number->currency($customerPayment['payment_amount'], 'QBD') . '</td>';
        $cos.='</tr>';
    endforeach;
    $cos.='<tr style="background-color:#aaa;">';
    $cos.='<td style="text-align:right;color:white;font-weight:bold;">' . __('Total Payed Amount') . '</td>';
    $cos.='<td style="text-align:right;color:white;font-weight:bold;">' . $this->Number->currency($total_pay, 'QBD') . '</td>';
    $cos.='</tr>';
    $cos.='<tr style="background-color:#aaa;">';
    $cos.='<td style="text-align:right;font-size:1.3em;color:white;font-weight:bold;">' . __('Total Due Amount') . '</td>';
    $cos.='<td style="text-align:right;font-size:1.3em;color:white;font-weight:bold;">' . $this->Number->currency($total + $total_vat - $total_pay, 'QBD') . '</td>';
    $cos.='</tr>';
    $cos.='</table>';
endif;
$tcpdf->WriteHTML($cos);
//$tcpdf->WriteHTML('<pre>' . print_r($customerOrder, true) . '</pre>');
echo $tcpdf->Output(__('Order') . '-' . $customerOrder['CustomerOrder']['id'] . '.pdf', 'D');
?>