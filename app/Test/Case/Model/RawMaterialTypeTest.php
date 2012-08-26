<?php
App::uses('RawMaterialType', 'Model');

/**
 * RawMaterialType Test Case
 *
 */
class RawMaterialTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.raw_material_type',
		'app.stock'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RawMaterialType = ClassRegistry::init('RawMaterialType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RawMaterialType);

		parent::tearDown();
	}

}
