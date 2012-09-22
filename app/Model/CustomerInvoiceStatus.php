<?php
App::uses('AppModel', 'Model');
/**
 * CustomerInvoiceStatus Model
 *
 */
class CustomerInvoiceStatus extends AppModel {
    public $displayField = 'cus_inv_status_name';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'customer_invoice_status';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cus_inv_status_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cus_inv_is_final_status' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
