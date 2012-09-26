<?php
App::uses('AppModel', 'Model');
/**
 * CustomerInvoice Model
 *
 * @property Customer $Customer
 * @property Serie $Serie
 * @property CustomerInvoiceLine $CustomerInvoiceLine
 * @property CustomerOrderLine $CustomerOrderLine
 * @property CustomerPayment $CustomerPayment
 */
class CustomerInvoice extends AppModel {

    public $virtualFields = array(
        'serie'=>'SELECT invoice_groups.code FROM invoice_groups WHERE invoice_groups.id=CustomerInvoice.invoice_group_id',
        'extended_number' => 'CONCAT((SELECT invoice_groups.code FROM invoice_groups WHERE invoice_groups.id=CustomerInvoice.invoice_group_id),"-",RIGHT(CONCAT("00000",CustomerInvoice.customer_invoice_number),5))',
        'expected_vat'=> 'SELECT vat FROM options WHERE options.id=1',
        'sum_amount' => '@ta:=(SELECT COALESCE(SUM(customer_order_lines.order_line_amount),0) FROM customer_order_lines WHERE customer_order_lines.customer_invoice_id = CustomerInvoice.id)',
        'sum_vat' => '@tv:=(SELECT COALESCE(SUM(customer_order_lines.order_line_vat),0) FROM customer_order_lines WHERE customer_order_lines.customer_invoice_id = CustomerInvoice.id)',
        'total_amount' => '@ta+@tv',
    );
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'extended_number';

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
		'customer_invoice_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'invoice_group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'customer_invoice_number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'customer_invoice_status' => array(
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
		'InvoiceGroup' => array(
			'className' => 'InvoiceGroup',
			'foreignKey' => 'invoice_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'InvoiceStatus'=>array(
			'className' => 'CustomerInvoiceStatus',
			'foreignKey' => 'customer_invoice_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
                ),
	);

/**
 * hasMany associations
 *
 * @var array
 */
        public $hasMany = array(
		'CustomerInvoiceLine' => array(
			'className' => 'CustomerInvoiceLine',
			'foreignKey' => 'customer_invoice_id',
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
			'foreignKey' => 'customer_invoice_id',
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
	);

}
