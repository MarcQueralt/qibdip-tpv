<?php
App::uses('AppModel', 'Model');
/**
 * CustomerPayment Model
 *
 * @property CustomerOrder $CustomerOrder
 * @property CustomerInvoice $CustomerInvoice
 */
class CustomerPayment extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'payment_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'customer_order_id' => array(
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
		'CustomerOrder' => array(
			'className' => 'CustomerOrder',
			'foreignKey' => 'customer_order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CustomerInvoice' => array(
			'className' => 'CustomerInvoice',
			'foreignKey' => 'customer_invoice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Customer' => array(
                        'className' => 'Customer',
                        'foreignKey' => 'customer_id',
                        'conditions' => '',
                        'fields' => '',
                        'order' => ''
                )
	);
}
