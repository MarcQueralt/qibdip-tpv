<?php
/**
 * CustomerInvoiceFixture
 *
 */
class CustomerInvoiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'customer_invoice_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'serie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'customer_invoice_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'customer_invoice_status' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'customer_invoice_comments' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'customer_id' => array('column' => 'customer_id', 'unique' => 0),
			'serie_id' => array('column' => 'serie_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'customer_invoice_date' => '2012-09-15',
			'serie_id' => 1,
			'customer_invoice_number' => 1,
			'customer_invoice_status' => 1,
			'customer_invoice_comments' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-15 14:34:14',
			'modified' => '2012-09-15 14:34:14'
		),
	);

}
