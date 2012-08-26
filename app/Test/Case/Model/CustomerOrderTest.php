<?php
App::uses('CustomerOrder', 'Model');

/**
 * CustomerOrder Test Case
 *
 */
class CustomerOrderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_order',
		'app.order_customer',
		'app.order_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerOrder = ClassRegistry::init('CustomerOrder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerOrder);

		parent::tearDown();
	}

}
