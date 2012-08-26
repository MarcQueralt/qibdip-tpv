<?php
/**
 * SupplierInvoiceFixture
 *
 */
class SupplierInvoiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'supplier_invoice_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'supplier_invoice_supplier_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'supplier_invoice_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'supplier_invoice_amount' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'supplier_invoice_vat' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'supplier_invoice_vat_re' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '10,2'),
		'supplier_invoice_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'supplier_invoice_supplier_id' => array('column' => 'supplier_invoice_supplier_id', 'unique' => 0),
			'supplier_invoice_status_id' => array('column' => 'supplier_invoice_status_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'supplier_invoice_number' => 'Lorem ipsum d',
			'supplier_invoice_supplier_id' => 1,
			'supplier_invoice_date' => '2012-08-26',
			'supplier_invoice_amount' => 1,
			'supplier_invoice_vat' => 1,
			'supplier_invoice_vat_re' => 1,
			'supplier_invoice_status_id' => 1,
			'created' => '2012-08-26 14:50:59',
			'modified' => '2012-08-26 14:50:59'
		),
	);

}
