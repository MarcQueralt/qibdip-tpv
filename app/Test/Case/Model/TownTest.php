<?php
App::uses('Town', 'Model');

/**
 * Town Test Case
 *
 */
class TownTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.town'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Town = ClassRegistry::init('Town');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Town);

		parent::tearDown();
	}

}
