<?php
App::uses('AppModel', 'Model');
/**
 * SupplierInvoice Model
 *
 * @property SupplierInvoiceSupplier $SupplierInvoiceSupplier
 * @property SupplierInvoiceStatus $SupplierInvoiceStatus
 */
class SupplierInvoice extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'supplier_invoice_number';

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
		'supplier_invoice_supplier_id' => array(
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
				'rule' => array('date','dmy'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'supplier_invoice_amount' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'supplier_invoice_vat' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'supplier_invoice_vat_re' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'SupplierInvoiceSupplier' => array(
			'className' => 'SupplierInvoiceSupplier',
			'foreignKey' => 'supplier_invoice_supplier_id',
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
}
