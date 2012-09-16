<?php

App::uses('AppModel', 'Model');

/**
 * CustomerOrder Model
 *
 * @property Customer $Customer
 * @property OrderStatus $OrderStatus
 * @property CustomerInvoiceLine $CustomerInvoiceLine
 * @property CustomerOrderLine $CustomerOrderLine
 * @property CustomerPayment $CustomerPayment
 */
class CustomerOrder extends AppModel {

    public $virtualFields = array(
        'sum_amount' => '@ta:=(SELECT COALESCE(SUM(customer_order_lines.order_line_amount),0) FROM customer_order_lines WHERE customer_order_lines.customer_order_id = CustomerOrder.id)',
        'sum_vat' => '@tv:=(SELECT COALESCE(SUM(customer_order_lines.order_line_vat),0) FROM customer_order_lines WHERE customer_order_lines.customer_order_id = CustomerOrder.id)',
        'sum_payments' => '@tp:=(SELECT COALESCE(SUM(customer_payments.payment_amount),0) FROM customer_payments WHERE customer_payments.customer_order_id = CustomerOrder.id)',
        'total_amount' => '@ta+@tv',
        'due_amount' => '@ta+@tv-@tp',
        'count_lines' => '(SELECT count(*) FROM customer_order_lines WHERE customer_order_lines.customer_order_id = CustomerOrder.id)',
        'count_left_articles' => '(SELECT count(*) FROM customer_order_lines WHERE trim(order_line_left_article_description)<>"" AND customer_order_lines.customer_order_id = CustomerOrder.id)',
        'next_line' => 'SELECT COALESCE(MAX(customer_order_lines.order_line_number) DIV 10*10,0)+10 FROM customer_order_lines WHERE customer_order_lines.customer_order_id = CustomerOrder.id',
        'expected_vat'=> 'SELECT vat FROM options WHERE options.id=1'
    );

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'customer_id' => array(
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
        'order_date' => array(
            'date' => array(
                'rule' => array('date'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Customer' => array(
            'className' => 'Customer',
            'foreignKey' => 'customer_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'OrderStatus' => array(
            'className' => 'OrderStatus',
            'foreignKey' => 'order_status_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'CustomerInvoiceLine' => array(
            'className' => 'CustomerInvoiceLine',
            'foreignKey' => 'customer_order_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'CustomerOrderLine' => array(
            'className' => 'CustomerOrderLine',
            'foreignKey' => 'customer_order_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => 'order_line_number',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'CustomerPayment' => array(
            'className' => 'CustomerPayment',
            'foreignKey' => 'customer_order_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => 'payment_date',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
