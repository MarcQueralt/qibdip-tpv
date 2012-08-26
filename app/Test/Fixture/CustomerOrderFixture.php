<?php
/**
 * CustomerOrderFixture
 *
 */
class CustomerOrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'order_customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'order_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'order_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'order_comments' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'order_customer_id' => array('column' => 'order_customer_id', 'unique' => 0),
			'order_status_id' => array('column' => 'order_status_id', 'unique' => 0)
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
			'order_customer_id' => 1,
			'order_status_id' => 1,
			'order_date' => '2012-08-26',
			'order_comments' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-08-26 15:51:38',
			'modified' => '2012-08-26 15:51:38'
		),
	);

}
