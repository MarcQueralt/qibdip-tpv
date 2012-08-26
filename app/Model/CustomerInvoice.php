<?php
App::uses('AppModel', 'Model');
/**
 * CustomerInvoice Model
 *
 * @property CustomerInvoiceCustomer $CustomerInvoiceCustomer
 */
class CustomerInvoice extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'customer_invoice_number';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'customer_invoice_customer_id' => array(
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
				'rule' => array('date','dmy'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'customer_invoice_number' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'CustomerInvoiceCustomer' => array(
			'className' => 'CustomerInvoiceCustomer',
			'foreignKey' => 'customer_invoice_customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
