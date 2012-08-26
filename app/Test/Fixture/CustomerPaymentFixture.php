<?php
/**
 * CustomerPaymentFixture
 *
 */
class CustomerPaymentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'payment_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'payment_amount' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'payment_comments' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'payment_is_down_payment' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'payment_order_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'payment_order_id' => array('column' => 'payment_order_id', 'unique' => 0)
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
			'payment_date' => '2012-08-26',
			'payment_amount' => 1,
			'payment_comments' => 'Lorem ipsum dolor sit amet',
			'payment_is_down_payment' => 1,
			'payment_order_id' => 1,
			'created' => '2012-08-26 14:39:34',
			'modified' => '2012-08-26 14:39:34'
		),
	);

}
