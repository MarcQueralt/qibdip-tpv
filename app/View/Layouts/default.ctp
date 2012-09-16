<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$appName = Configure::read('Company');
if (!isset($appName)):
    $appName = 'qibdip TPV';
else:
    $appName = 'qibdip TPV - ' . $appName;
endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $appName ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');
        echo $this->Html->css('qibdip');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1><?php echo $appName; ?></h1>
            </div>
            <div id="menu">
                <ul>                        
                    <li>
                        <?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'display', 'home')) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Sales'), ''); ?>
                        <ul>
                            <li>
                                <?php echo $this->Html->link(__('Orders'), array('controller' => 'customerOrders')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Invoices'), array('controller' => 'customerInvoices')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Payments'), array('controller' => 'customerPayments')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Customers'), array('controller' => 'customers')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Purchases'), ''); ?>
                        <ul>
                            <li>
                                <?php echo $this->Html->link(__('Supplier Slips'), array('controller' => 'supplierSlips')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Supplier Invoices'), array('controller' => 'supplierInvoices')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Suppliers'), array('controller' => 'suppliers')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Stocks'), ''); ?>
                        <ul>
                            <li>
                                <?php echo $this->Html->link(__('Articles'), array('controller' => 'articles')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Raw materials'), array('controller' => 'rawMaterials')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('All materials'), array('controller' => 'stocks')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Consumptions'), array('controller' => 'consumptions')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Analysis'), ''); ?>
                        <ul></ul>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Administration'), ''); ?>
                        <ul>
                            <li>
                                <?php echo $this->Html->link(__('Users'), array('controller' => 'users')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Invoice Series'), array('controller' => 'series')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Raw Material Types'), array('controller' => 'rawMaterialTypes')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Customer Order Status'), array('controller' => 'customerOrderStatus')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Customer Invoice Status'), array('controller' => 'customerInvoiceStatus')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Supplier Invoice Status'), array('controller' => 'supplierInvoiceStatus')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('Options'), array('controller' => 'options')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?>
                    </li>
                </ul>
            </div>
            <div id="content">

                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer">
                <?php echo __('Developed by qibdip'); ?>
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
        <?php echo $this->Js->writeBuffer(); ?>
    </body>
</html>
