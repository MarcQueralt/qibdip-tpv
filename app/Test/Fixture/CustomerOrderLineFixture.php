<?php
/**
 * CustomerOrderLineFixture
 *
 */
class CustomerOrderLineFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'order_line_order_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'order_line_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'order_line_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'order_line_type' => array('type' => 'string', 'null' => false, 'default' => 'E', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'order_line_article_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'order_line_description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'order_line_is_left_article' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'order_line_left_article_description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'order_line_due_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'order_line_invoice_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'order_line_invoice_line_number' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'order_line_amout' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'order_line_vat' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'order_line_comments' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'order_line_order_id' => array('column' => 'order_line_order_id', 'unique' => 0),
			'order_line_status_id' => array('column' => 'order_line_status_id', 'unique' => 0),
			'order_line_article_id' => array('column' => 'order_line_article_id', 'unique' => 0),
			'order_line_invoice_id' => array('column' => 'order_line_invoice_id', 'unique' => 0)
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
			'order_line_order_id' => 1,
			'order_line_number' => 1,
			'order_line_status_id' => 1,
			'order_line_type' => 'Lorem ipsum dolor sit ame',
			'order_line_article_id' => 1,
			'order_line_description' => 'Lorem ipsum dolor sit amet',
			'order_line_is_left_article' => 1,
			'order_line_left_article_description' => 'Lorem ipsum dolor sit amet',
			'order_line_due_date' => '2012-08-26',
			'created' => '2012-08-26 14:36:57',
			'modified' => '2012-08-26 14:36:57',
			'order_line_invoice_id' => 1,
			'order_line_invoice_line_number' => 1,
			'order_line_amout' => 1,
			'order_line_vat' => 1,
			'order_line_comments' => 'Lorem ipsum dolor sit amet'
		),
	);

}
