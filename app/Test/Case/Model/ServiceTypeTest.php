<?php
App::uses('ServiceType', 'Model');

/**
 * ServiceType Test Case
 *
 */
class ServiceTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ServiceType = ClassRegistry::init('ServiceType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceType);

		parent::tearDown();
	}

}
