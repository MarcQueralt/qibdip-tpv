<?php
App::uses('AppModel', 'Model');
/**
 * SupplierInvoice Model
 *
 * @property Supplier $Supplier
 * @property SupplierInvoiceStatus $SupplierInvoiceStatus
 * @property Article $Article
 * @property RawMaterial $RawMaterial
 * @property Stock $Stock
 */
class SupplierInvoice extends AppModel {
    public $displayField = 'extended_number';
    public $virtualFields = array(
//        'sum_amount' => '@ta:=(SELECT COALESCE(SUM(customer_order_lines.order_line_amount),0) FROM customer_order_lines WHERE customer_order_lines.customer_order_id = CustomerOrder.id)',
//        'sum_vat' => '@tv:=(SELECT COALESCE(SUM(customer_order_lines.order_line_vat),0) FROM customer_order_lines WHERE customer_order_lines.customer_order_id = CustomerOrder.id)',
//        'sum_payments' => '@tp:=(SELECT COALESCE(SUM(customer_payments.payment_amount),0) FROM customer_payments WHERE customer_payments.customer_order_id = CustomerOrder.id)',
//        'total_amount' => '@ta+@tv',
//        'due_amount' => '@ta+@tv-@tp',
//        'count_lines' => '(SELECT count(*) FROM customer_order_lines WHERE customer_order_lines.customer_order_id = CustomerOrder.id)',
//        'count_left_articles' => '(SELECT count(*) FROM customer_order_lines WHERE trim(order_line_left_article_description)<>"" AND customer_order_lines.customer_order_id = CustomerOrder.id)',
//        'next_line' => 'SELECT COALESCE(MAX(customer_order_lines.order_line_number) DIV 10*10,0)+10 FROM customer_order_lines WHERE customer_order_lines.customer_order_id = CustomerOrder.id',
        'expected_vat'=> 'SELECT vat FROM options WHERE options.id=1',
        'extended_number'=>'concat((select suppliers.supplier_abr from suppliers where suppliers.id=SupplierInvoice.supplier_id),"-",SupplierInvoice.supplier_invoice_number)',
    );

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'supplier_invoice_number' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'supplier_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'supplier_invoice_date' => array(
			'date' => array(
				'rule' => array('date'),
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Supplier' => array(
			'className' => 'Supplier',
			'foreignKey' => 'supplier_id',
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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Article' => array(
			'className' => 'Article',
			'foreignKey' => 'supplier_invoice_id',
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
		'RawMaterial' => array(
			'className' => 'RawMaterial',
			'foreignKey' => 'supplier_invoice_id',
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
		'Stock' => array(
			'className' => 'Stock',
			'foreignKey' => 'supplier_invoice_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
