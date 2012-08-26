<?php
/**
 * SupplierSlipFixture
 *
 */
class SupplierSlipFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'supplier_slip_num' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'supplier_slip_supplier_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'supplier_slip_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'supplier_slip_supplier_id' => array('column' => 'supplier_slip_supplier_id', 'unique' => 0)
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
			'supplier_slip_num' => 'Lorem ipsum d',
			'supplier_slip_supplier_id' => 1,
			'supplier_slip_date' => '2012-08-26',
			'created' => '2012-08-26 15:02:58',
			'modified' => '2012-08-26 15:02:58'
		),
	);

}
