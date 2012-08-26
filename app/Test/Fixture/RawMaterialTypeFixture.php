<?php
/**
 * RawMaterialTypeFixture
 *
 */
class RawMaterialTypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'raw_mat_type_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'raw_mat_type_is_partial_consume' => array('type' => 'boolean', 'null' => true, 'default' => '1'),
		'raw_mat_measuring_unit' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'raw_mat_type_name' => 'Lorem ipsum dolor sit a',
			'raw_mat_type_is_partial_consume' => 1,
			'raw_mat_measuring_unit' => 'Lorem ipsum dolor sit a'
		),
	);

}
