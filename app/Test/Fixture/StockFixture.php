<?php
/**
 * StockFixture
 *
 */
class StockFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'stock_type' => array('type' => 'string', 'null' => false, 'default' => 'A', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'article_reference' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'article_model' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'article_size' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'raw_material_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'raw_mat_units' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'raw_mat_userfield01' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'raw_mat_unit_price' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'stock_comment' => array('type' => 'string', 'null' => true, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'stock_userfield01' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'stock_userfield02' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'stock_userfield03' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'stock_buy_price' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '10,2'),
		'stock_vat' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '10,2'),
		'stock_vat_re' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '10,2'),
		'stock_sale_price' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '10,2'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'stock_supplier_slip_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'stock_supplier_slip_line' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 10),
		'stock_supplier_invoice_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'stock_supplier_invoice_id' => array('column' => 'stock_supplier_invoice_id', 'unique' => 0),
			'raw_material_type_id' => array('column' => 'raw_material_type_id', 'unique' => 0)
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
			'stock_type' => 'Lorem ipsum dolor sit ame',
			'article_reference' => 'Lorem ipsum dolor sit amet',
			'article_model' => 'Lorem ipsum dolor sit amet',
			'article_size' => 'Lorem ip',
			'raw_material_type_id' => 1,
			'raw_mat_units' => 1,
			'raw_mat_userfield01' => 'Lorem ipsum dolor sit amet',
			'raw_mat_unit_price' => 1,
			'stock_comment' => 'Lorem ipsum dolor sit amet',
			'stock_userfield01' => 'Lorem ip',
			'stock_userfield02' => 'Lorem ip',
			'stock_userfield03' => 'Lorem ip',
			'stock_buy_price' => 1,
			'stock_vat' => 1,
			'stock_vat_re' => 1,
			'stock_sale_price' => 1,
			'created' => '2012-08-26 15:06:56',
			'modified' => '2012-08-26 15:06:56',
			'stock_supplier_slip_id' => 1,
			'stock_supplier_slip_line' => 1,
			'stock_supplier_invoice_id' => 1
		),
	);

}
