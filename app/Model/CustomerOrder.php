<?php
App::uses('AppModel', 'Model');
/**
 * CustomerOrder Model
 *
 * @property OrderCustomer $OrderCustomer
 * @property OrderStatus $OrderStatus
 */
class CustomerOrder extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'order_customer_id' => array(
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
				'rule' => array('date','dmy'),
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
		'OrderCustomer' => array(
			'className' => 'OrderCustomer',
			'foreignKey' => 'order_customer_id',
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
}
