<?php
App::uses('AppModel', 'Model');
/**
 * CustomerOrderLine Model
 *
 * @property CustomerOrder $CustomerOrder
 * @property OrderStatus $OrderStatus
 * @property Stock $Stock
 * @property CustomerInvoice $CustomerInvoice
 */
class CustomerOrderLine extends AppModel {
    
    public $virtualFields = array(
        'order_line_total' => 'order_line_amount + order_line_vat',
        'current_vat' => '(select vat from options where options.id=1)'
    );

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'order_line_type' => array(
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
		'CustomerOrder' => array(
			'className' => 'CustomerOrder',
			'foreignKey' => 'customer_order_id',
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
		),
		'Stock' => array(
			'className' => 'Stock',
			'foreignKey' => 'stock_id',
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
		)
	);
}
