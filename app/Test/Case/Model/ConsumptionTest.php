<?php
App::uses('Consumption', 'Model');

/**
 * Consumption Test Case
 *
 */
class ConsumptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consumption',
		'app.consumption_article',
		'app.consumption_raw_material'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Consumption = ClassRegistry::init('Consumption');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Consumption);

		parent::tearDown();
	}

}
