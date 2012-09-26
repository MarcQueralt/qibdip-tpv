<?php
App::uses('AppModel', 'Model');
/**
 * CustomerInvoiceLine Model
 *
 * @property CustomerInvoice $CustomerInvoice
 * @property CustomerOrder $CustomerOrder
 * @property Stock $Stock
 */
class CustomerInvoiceLine extends AppModel {

    public $virtualFields = array(
        'customer_invoice_line_total' => 'customer_invoice_line_amount + customer_invoice_line_vat',
        'customer_invoice_line_text' => 'IF(CustomerInvoiceLine.customer_invoice_line_type="A",(SELECT concat(stocks.id,"-",stocks.article_model) FROM stocks WHERE stocks.id=CustomerInvoiceLine.stock_id),CustomerInvoiceLine.customer_invoice_line_description)',
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
		'customer_invoice_line_type' => array(
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
		'CustomerInvoice' => array(
			'className' => 'CustomerInvoice',
			'foreignKey' => 'customer_invoice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CustomerOrder' => array(
			'className' => 'CustomerOrder',
			'foreignKey' => 'customer_order_id',
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
		)
	);
}
