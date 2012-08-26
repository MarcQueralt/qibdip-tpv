<?php
/**
 * ConsumptionFixture
 *
 */
class ConsumptionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'consumption_article_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'consumption_raw_material_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'consumption_raw_mat_consumed_units' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'consumption_cost_01' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'consumption_cost_02' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'consumption_cost_03' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'consumption_cost_04' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'consumption_article_id' => array('column' => 'consumption_article_id', 'unique' => 0),
			'consumption_raw_material_id' => array('column' => 'consumption_raw_material_id', 'unique' => 0)
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
			'consumption_article_id' => 1,
			'consumption_raw_material_id' => 1,
			'consumption_raw_mat_consumed_units' => 1,
			'consumption_cost_01' => 1,
			'consumption_cost_02' => 1,
			'consumption_cost_03' => 1,
			'consumption_cost_04' => 1
		),
	);

}
