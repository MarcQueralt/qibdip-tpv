<?php
App::uses('AppModel', 'Model');
/**
 * SupplierSlip Model
 *
 * @property Supplier $Supplier
 * @property Article $Article
 * @property RawMaterial $RawMaterial
 * @property Stock $Stock
 */
class SupplierSlip extends AppModel {

    public $displayField = 'extended_number';
    public $virtualFields = array(
        'sum_amount' => '@ta:=(SELECT COALESCE(SUM(stocks.stock_buy_price),0) FROM stocks WHERE stocks.supplier_slip_id = SupplierSlip.id)',
        'sum_vat' => '@tv:=(SELECT COALESCE(SUM(stocks.stock_vat),0) FROM stocks WHERE stocks.supplier_slip_id = SupplierSlip.id)',
        'sum_vat_re' => '@tvr:=(SELECT COALESCE(SUM(stocks.stock_vat_re),0) FROM stocks WHERE stocks.supplier_slip_id = SupplierSlip.id)',
        'total_amount' => '@ta+@tv+@tvr',
        'count_lines' => '(SELECT COUNT(*) FROM stocks WHERE stocks.supplier_slip_id = SupplierSlip.id)',
        'count_pending_lines' => '(SELECT COUNT(*) FROM stocks WHERE stocks.supplier_slip_id = SupplierSlip.id AND stocks.supplier_invoice_id is null)',
        'next_line' => 'SELECT COALESCE(MAX(stocks.supplier_slip_line) DIV 10*10,0)+10 FROM stocks WHERE stocks.supplier_slip_id = SupplierSlip.id',
        'expected_vat'=> 'SELECT vat FROM options WHERE options.id=1',
        'expected_vat_re'=> 'SELECT vat_re FROM options WHERE options.id=1',
        'extended_number'=>'concat((select suppliers.supplier_abr from suppliers where suppliers.id=SupplierSlip.supplier_id),"-",SupplierSlip.supplier_slip_num)',
    );
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'supplier_slip_num' => array(
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
		'supplier_slip_date' => array(
			'date' => array(
				'rule' => array('date'),
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
			'foreignKey' => 'supplier_slip_id',
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
			'foreignKey' => 'supplier_slip_id',
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
			'foreignKey' => 'supplier_slip_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'supplier_slip_line',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
