<?php
App::uses('AppModel', 'Model');
/**
 * CustomerOrderLine Model
 *
 * @property OrderLineOrder $OrderLineOrder
 * @property OrderLineStatus $OrderLineStatus
 * @property OrderLineArticle $OrderLineArticle
 * @property OrderLineInvoice $OrderLineInvoice
 */
class CustomerOrderLine extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'order_line_number';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'order_line_order_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'order_line_number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'order_line_status_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'order_line_type' => array(
			'inlist' => array(
				'rule' => array('inlist',array('A','E')),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'order_line_is_left_article' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'order_line_due_date' => array(
			'date' => array(
				'rule' => array('date','dmy'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'order_line_amout' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'order_line_vat' => array(
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
		'OrderLineOrder' => array(
			'className' => 'OrderLineOrder',
			'foreignKey' => 'order_line_order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OrderLineStatus' => array(
			'className' => 'OrderLineStatus',
			'foreignKey' => 'order_line_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OrderLineArticle' => array(
			'className' => 'OrderLineArticle',
			'foreignKey' => 'order_line_article_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OrderLineInvoice' => array(
			'className' => 'OrderLineInvoice',
			'foreignKey' => 'order_line_invoice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
