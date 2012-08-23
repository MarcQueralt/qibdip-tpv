<?php
/* Albaran Test cases generated on: 2012-05-28 16:02:44 : 1338213764*/
App::uses('Albaran', 'Model');

/**
 * Albaran Test Case
 *
 */
class AlbaranTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.albaran', 'app.proveidor');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Albaran = ClassRegistry::init('Albaran');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Albaran);

		parent::tearDown();
	}

}
