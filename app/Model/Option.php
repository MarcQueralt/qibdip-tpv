<?php

App::uses('AppModel', 'Model');

/**
 * Option Model
 *
 */
class Option extends AppModel {

    public $validate = array(
        'vat' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'vat_re' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'order_status_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'order_invoiced_status_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'customer_invoice_status_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'supplier_invoice_status_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'customer_invoice_group_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );
    public $belongsTo = array(
        'OrderStatus' => array(
            'className' => 'OrderStatus',
            'foreignKey' => 'order_status_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'OrderInvoicedStatus' => array(
            'className' => 'OrderStatus',
            'foreignKey' => 'order_invoiced_status_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'SupplierInvoiceStatus' => array(
            'className' => 'SupplierInvoiceStatus',
            'foreignKey' => 'supplier_invoice_status_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'CustomerInvoiceStatus' => array(
            'className' => 'CustomerInvoiceStatus',
            'foreignKey' => 'customer_invoice_status_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'InvoiceGroup'=>array(
            'className'=>'InvoiceGroup',
            'foreignKey'=>'customer_invoice_group_id',
            'conditions'=>'',
            'fields'=>'',
            'order'=>''
        ),
    );

}
