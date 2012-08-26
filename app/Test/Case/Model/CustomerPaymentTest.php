<?php
App::uses('CustomerPayment', 'Model');

/**
 * CustomerPayment Test Case
 *
 */
class CustomerPaymentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_payment',
		'app.payment_order'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerPayment = ClassRegistry::init('CustomerPayment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerPayment);

		parent::tearDown();
	}

}
