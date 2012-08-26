<?php
App::uses('AppModel', 'Model');
/**
 * Stock Model
 *
 * @property RawMaterialType $RawMaterialType
 * @property StockSupplierSlip $StockSupplierSlip
 * @property StockSupplierInvoice $StockSupplierInvoice
 */
class Stock extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'article_reference';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'stock_type' => array(
			'inlist' => array(
				'rule' => array('inlist',array('A','R')),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'stock_buy_price' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'stock_vat' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'stock_vat_re' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'stock_sale_price' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'stock_supplier_slip_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'stock_supplier_slip_line' => array(
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
		'RawMaterialType' => array(
			'className' => 'RawMaterialType',
			'foreignKey' => 'raw_material_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StockSupplierSlip' => array(
			'className' => 'StockSupplierSlip',
			'foreignKey' => 'stock_supplier_slip_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StockSupplierInvoice' => array(
			'className' => 'StockSupplierInvoice',
			'foreignKey' => 'stock_supplier_invoice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
